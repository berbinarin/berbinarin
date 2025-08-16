<?php

namespace App\Helpers;

class CategoryColorHelper
{
    public static function getColor($categoryId)
    {
        $hash = crc32($categoryId);
        $hue = $hash % 360;
        return "hsl($hue, 80%, 70%)";
    }
}