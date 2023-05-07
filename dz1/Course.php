<?php

namespace dz1;

class Course extends Direction
{
    private int $idCourse;
    private string $nameCourse;
    private int $idDirection;
    private array $groupes;

    /**
     * @return int
     */
    public function getIdCourse(): int
    {
        return $this->idCourse;
    }

    /**
     * @param int $idCourse
     */
    public function setIdCourse(int $idCourse): void
    {
        $this->idCourse = $idCourse;
    }

    /**
     * @return string
     */
    public function getNameCourse(): string
    {
        return $this->nameCourse;
    }

    /**
     * @param string $nameCourse
     */
    public function setNameCourse(string $nameCourse): void
    {
        $this->nameCourse = $nameCourse;
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
     * @return array
     */
    public function getGroupes(): array
    {
        return $this->groupes;
    }

    /**
     * @param mixed $groupes
     */
    public function setGroupes(mixed $groupe): void
    {
        $this->groupes . push($groupe);
    }


}