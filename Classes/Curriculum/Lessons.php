<?php


namespace Com\Iesebre\Dam2\simongonzalez\Curriculum;

use Com\Iesebre\Dam2\simongonzalez\Person;

class Lessons extends StudySubmodule{

    /**
     * hour in the weeks.
     * @var
     */
    private $hour;

    /**
     * $student coming from Student Class
     * Same for $teacher
     * Lessons constructor.
     * @param $hour
     */
    public function __construct($hour, $student, $teacher, $submodule)
    {
        $this->hour = $hour;
        $this->getStudents()->students = $student;
        $this->getTeacher()->teacher = $teacher;
        $this->getSubmodule()->submodule = $submodule;
    }

    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }


}