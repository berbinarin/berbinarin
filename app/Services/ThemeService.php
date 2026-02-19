<?php

namespace App\Services;

class ThemeService
{
    public function getTheme(): string
    {
        $today = now();
        $theme = 'lebaran';

        // Imlek
        if ($today->between(
            now()->copy()->setMonth(2)->setDay(9),
            now()->copy()->setMonth(2)->setDay(18)
        )) {
            $theme = 'imlek';
        }

        // Natal
        if ($today->between(
            now()->copy()->setMonth(12)->setDay(1),
            now()->copy()->addYear()->setMonth(12)->setDay(30)
        )) {
            $theme = 'natal';
        }

        // Tahun Baru
        if ($today->between(
            now()->copy()->setMonth(12)->setDay(31),
            now()->copy()->addYear()->setMonth(1)->setDay(10)
        )) {
            $theme = 'taru';
        }

        // Lebaran
        if ($today->between(
            now()->copy()->setMonth(2)->setDay(19),
            now()->copy()->setMonth(3)->setDay(23)
        )) {
            $theme = 'lebaran';
        }


        // Kemerdekaan
        if ($today->between(
            now()->copy()->setMonth(8)->setDay(1),
            now()->copy()->setMonth(8)->setDay(31)
        )) {
            $theme = 'kemerdekaan';
        }

        return $theme;
    }
}
