<?php

class Lasagna
{
    public function expectedCookTime() {
        $time = 40;
        return $time;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        $expected = $this->expectedCookTime();
        $count = $expected - (int)$elapsed_minutes;
        return $count;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        $remainingCookTime = $this->remainingCookTime(40);
        return $layers_to_prep * 2;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        $totalPreparing = $this->totalPreparationTime($layers_to_prep);
        return $totalPreparing + $elapsed_minutes;
    }

    public function alarm()
    {
        return "Ding!";
    }
}
