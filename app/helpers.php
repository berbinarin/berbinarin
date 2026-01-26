<?php

if (!function_exists('italic_en')) {
    function italic_en($text)
    {
        $enWords = ["Peer Counselor", "Universitas", "Diploma", "Registration", "counselor peer", "Online", "online", "Offline", "Registration", "Weekend", "Weekdays", "Zoom Meeting", "Region", "Session", "Price", "Testimoni", "FAQ", "User", "For U", "Summary", "Class Product Management", "Counseling Product Management", "Graphic Designer", "Graphic Designer and Video Editor", "Human Resource", "Marketing Strategist and Sales", "Psychological Testing Product Management", "Secretary and Finance", "Social Media Content", "Web and Mobile Apps Developer", "TikTok Creator"];
        foreach ($enWords as $word) {
            $text = str_replace($word, "<i>$word</i>", $text);
        }
        return $text;
    }
}
