<?php

namespace App\Traits;

trait SecondConverter
{
    public static function setSecond($second): string
    {
        $days = floor($second / (60 * 60 * 24));
        $hours = floor(($second % (60 * 60 * 24)) / (60 * 60));
        $minutes = floor(($second % (60 * 60)) / 60);
        $seconds = $second % 60;

        $output = '';
        if ($days != 0){
            $output .= "$days gün, ";
        }

        if ($hours != 0){
            $output .= "$hours saat, ";
        }

        if ($minutes != 0){
            $output .= "$minutes dəqiqə, ";
        }

        if ($seconds != 0){
            $output .= "$seconds saniyə, ";
        }

        return $output;
    }
}
