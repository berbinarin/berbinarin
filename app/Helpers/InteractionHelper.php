<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use App\Models\Articles\Interaction;

class InteractionHelper
{
    public static function getOrCreateInteraction($articleId)
    {
        // Ambil cookie / buat baru
        $userToken = Cookie::get('user_token');
        if (!$userToken) {
            $userToken = Str::random(32);
            Cookie::queue('user_token', $userToken, 60 * 24 * 365); 
        }

        $ipAddress = request()->ip();

        // Mencari interaksi berdasarkan user_token + ip
        $interaction = Interaction::where('article_id', $articleId)
            ->where(function ($q) use ($userToken, $ipAddress) {
                $q->where('user_token', $userToken)
                    ->orWhere('ip_address', $ipAddress);
            })
            ->first();

        // Kalau belum ada buat baru
        if (!$interaction) {
            $interaction = Interaction::create([
                'article_id' => $articleId,
                'user_token' => $userToken,
                'ip_address' => $ipAddress,
                'views'      => 0,
                'shares'     => 0
            ]);
        }

        return $interaction;
    }

    // Tracking views
    public static function trackView($articleId)
    {
        $interaction = self::getOrCreateInteraction($articleId);

        $interaction->views += 1;
        $interaction->save();
    }

    // Tracking reaction
    public static function trackReaction($articleId, $reaction)
    {
        $interaction = self::getOrCreateInteraction($articleId);
        $interaction->reaction_type = $reaction;
        $interaction->save();
    }

    // Tracking share
    public static function trackShare($articleId)
    {
        $interaction = self::getOrCreateInteraction($articleId);
        $interaction->shares += 1;
        $interaction->save();
    }
}
