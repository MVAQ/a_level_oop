<?php

namespace dz1;

class Group extends Course
{
    private int $idGroupe;
    private string $nameGroupe;
    private int $idCourse;
    private array $students;
    private array $professors;
    private array $subjects;

    /**
     * @return int
     */
    public function getIdGroupe(): int
    {
        return $this->idGroupe;
    }

    /**
     * @param int $idGroupe
     */
    public function setIdGroupe(int $idGroupe): void
    {
        $this->idGroupe = $idGroupe;
    }

    /**
     * @return string
     */
    public function getNameGroupe(): string
    {
        return $this->nameGroupe;
    }

    /**
     * @param string $nameGroupe
     */
    public function setNameGroupe(string $nameGroupe): void
    {
        $this->nameGroupe = $nameGroupe;
    }

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
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents(array $student): void
    {
        $this->students . push($student);
    }

    /**
     * @return array
     */
    public function getProfessors(): array
    {
        return $this->professors;
    }

    /**
     * @param array $professors
     */
    public function setProfessors(array $professor): void
    {
        $this->professors . push($professor);
    }

    /**
     * @return array
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }

    /**
     * @param array $subjects
     */
    public function setSubjects(array $subject): void
    {
        $this->subjects . push($subject);
    }

}