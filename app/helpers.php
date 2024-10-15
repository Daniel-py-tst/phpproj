<?php

declare(strict_types=1);

function formatDollarAmount(float $amount): string{
    $sign = ($amount < 0) ? '-' : '';

    return $sign . '$' . number_format(abs($amount), 2);
}

function formatDate(string $date): string{

    return date('M j, Y', strtotime($date));
}