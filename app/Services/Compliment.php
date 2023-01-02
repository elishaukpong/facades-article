<?php

namespace App\Services;

class Compliment
{
    public function endOfYearWish(): string
    {
        return "The last year was amazing, thank you for being part of it!";
    }

    public function newYearWish(): string
    {
        return "Happy New Year";
    }

    public function randomWish(string $wish): string
    {
        return "Your wish:" .$wish;
    }

}
