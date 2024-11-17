<?php

if (!function_exists('format_number')) {
    function format_number($number)
    {
        if ($number >= 1000000000) {
            return round($number / 1000000000, 1) . 'm';
        } elseif ($number >= 1000000) {
            return round($number / 1000000, 1) . 'jt';
        } elseif ($number >= 1000) {
            return round($number / 1000, 1) . 'rb';
        }

        return number_format($number);
    }
}
