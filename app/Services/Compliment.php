<?php

namespace App\Services;

class Compliment
{
    public function endOfYearWish(): string
    {
        return 'Bye Bye to the old year';
    }

    public function newYearWish(): string
    {
        return 'Happy New Year';
    }

    public function randomWish(string $wish): string
    {
        return "You wish:" .$wish;
    }

}
