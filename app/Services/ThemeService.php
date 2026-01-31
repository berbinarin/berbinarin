<?php

namespace App\Services;

class ThemeService
{
    public function getTheme(): string
    {
        $today = now();
        $theme = 'default';

        // Imlek
        if ($today->between(
            now()->copy()->setMonth(1)->setDay(1),
            now()->copy()->setMonth(2)->setDay(15)
        )) {
            $theme = 'imlek';
        }

        // Nataru
        if ($today->between(
            now()->copy()->setMonth(12)->setDay(20),
            now()->copy()->addYear()->setMonth(1)->setDay(5)
        )) {
            $theme = 'natal';
        }

        return $theme;
    }
}
