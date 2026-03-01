<?php

namespace App\Services;

class ThemeService
{
    public function getTheme(): string
    {
        $today = now();
        $theme = 'DEFAULT';

        // Imlek
        if ($today->between(
            now()->copy()->setMonth(2)->setDay(9),
            now()->copy()->setMonth(2)->setDay(value: 22)
        )) {
            $theme = 'IMLEK';
        }

        // Natal
        if ($today->between(
            now()->copy()->setMonth(12)->setDay(1),
            now()->copy()->addYear()->setMonth(12)->setDay(30)
        )) {
            $theme = 'NATAL';
        }

        // Tahun Baru
        if ($today->between(
            now()->copy()->setMonth(12)->setDay(31),
            now()->copy()->addYear()->setMonth(1)->setDay(10)
        )) {
            $theme = 'TARU';
        }

        // Lebaran
        if ($today->between(
            now()->copy()->setMonth(2)->setDay(19),
            now()->copy()->setMonth(3)->setDay(23)
        )) {
            $theme = 'LEBARAN';
        }


        // Kemerdekaan
        if ($today->between(
            now()->copy()->setMonth(8)->setDay(1),
            now()->copy()->setMonth(8)->setDay(31)
        )) {
            $theme = 'KEMERDEKAAN';
        }

        return $theme;
    }
}
