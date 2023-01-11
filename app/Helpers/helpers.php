<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

if (!function_exists('dateToMonthNameYear')) {
    function dateToMonthNameYear(Date|string|null $date): string
    {
        if (is_null($date)) {
            return "по настоящее время";
        }
        return Str::ucfirst(
            Carbon::make($date)->monthName.' '.Carbon::make($date)->year
        );
    }
}

if (!function_exists('dateToDateFormat')) {
    function dateToDateFormat(Date|string|null $date, string $format): ?string
    {
        if (is_null($date)) {
            return null;
        }
        return Carbon::make($date)->format($format);
    }
}