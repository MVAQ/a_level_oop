<?php


include_once 'RodElement.php';

class Line extends RodElement
{
    private string $title;
    private string $type;
    private string $color;
    private int $size;
    private bool $status;


    public function __construct($title, $type, $color)
    {
        $this->title = $title;
        $this->type = $type;
        $this->color = $color;
        $this->size = rand(30, 100);
        $this->status = true;
    }

    public function checkState()
    {
        if ($this->size >= 5) {

            echo "Congrat, line bait OK" . PHP_EOL;

        } else {
            $this->status == false;
            echo "Your line lost!" . PHP_EOL;
        }

    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }
}