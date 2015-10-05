<?php

namespace Com\Iesebre\Dam2\simongonzalez\Person;

class Teacher extends Person
{
    /* Obte les característiques de Worker. */
    use Worker;
    /**
     * Per saber si es un professor del centre o no.
     * @var
     */
    public $internal;

    /**
     * Per saber si el professor es titular.
     * @var
     */
    public $titular;

    /**
     * A quin grup d'aules perteneix.
     * @var
     */
    public $specialization;

    /**
     * @return mixed
     */
    public function getInternal()
    {
        return $this->internal;
    }

    /**
     * @param mixed $internal
     */
    public function setInternal($internal)
    {
        $this->internal = $internal;
    }

    /**
     * @return mixed
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * @param mixed $titular
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    /**
     * Print name and salary in the screen.
     */
    public function render()
    {
        $this->type = "El profesor"; // type refers to the first segment of the render string.
        parent::render() . " i cobra " . $this->salary;
    }

}