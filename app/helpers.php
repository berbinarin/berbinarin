<?php

if (!function_exists('italic_en')) {
    function italic_en($text)
    {
        $enWords = ["Peer Counselor", "Universitas", "Diploma", "Registration", "counselor peer", "Online", "Offline", "Registration", "Weekend", "Weekdays", "Zoom Meeting", "Region", "Session", "Price", "Testimoni", "FAQ", "Berbinar", "User", "Berbinar For U", "Summary"];
        foreach ($enWords as $word) {
            $text = str_replace($word, "<i>$word</i>", $text);
        }
        return $text;
    }
}
