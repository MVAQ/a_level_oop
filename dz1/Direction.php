<?php

namespace dz1;

class Direction
{
    private string $nameDirection;
    private int $idDirection;
    private array $curses;

    /**
     * @return string
     */
    public function getNameDirection(): string
    {
        return $this->nameDirection;
    }

    /**
     * @param string $nameDirection
     */
    public function setNameDirection(string $nameDirection): void
    {
        $this->nameDirection = $nameDirection;
    }

    /**
     * @return int
     */
    public function getIdDirection(): int
    {
        return $this->idDirection;
    }

    /**
     * @param int $idDirection
     */
    public function setIdDirection(int $idDirection): void
    {
        $this->idDirection = $idDirection;
    }


    /**
     * @return mixed
     */
    public function getCurses()
    {
        return $this->curses;
    }

    /**
     * @param mixed $curses
     */
    public function setCurses(mixed $curse): void
    {
        $this->curses . push($curse);
    }


}