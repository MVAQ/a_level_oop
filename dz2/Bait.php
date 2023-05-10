<?php


include_once 'RodElement.php';


class Bait extends RodElement
{
    private string $title;
    private string $material;
    private string $color;
    private int $mobility;
    private bool $status;

    public function __construct($title, $material, $color)
    {
        $this->title = $title;
        $this->material = $material;
        $this->color = $color;
        $this->mobility = rand(1, 10);
        $this->status = true;
    }

    public function checkState()
    {
        if ($this->mobility >= 0) {

            echo "Congrat, your bait OK" . PHP_EOL;

        } else {
            $this->status == false;
            echo "Your bait lost!" . PHP_EOL;
        }

    }

    public function getMobility(): int
    {
        return $this->mobility;
    }

    public function setMobility(int $mobility): void
    {
        $this->mobility = $mobility;
    }


}