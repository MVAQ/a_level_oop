<?php

namespace dz2;

class Reel extends RodElement
{

    private string $title;
    private string $type;
    private string $numberOfBearings;
    private int $speed;
    private bool $status;

    public function __construct($title, $type, $numberOfBearings)
    {
        $this->title = $title;
        $this->numberOfBearings = $numberOfBearings;
        $this->type = $type;
        $this->speed = rand(10, 50);
        $this->status = true;
    }

    public function checkState()
    {
        if ($this->speed >= 10) {

            echo "Congrat, your bait OK" . PHP_EOL;

        } else {

            $this->status == false;
            echo "Your bait lost!" . PHP_EOL;
        }

    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

}