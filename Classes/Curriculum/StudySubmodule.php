<?php


namespace Com\Iesebre\Dam2\simongonzalez\Curriculum;

use Com\Iesebre\Dam2\simongonzalez\Person;

class StudySubmodule extends StudyModule{

    /**
     * Name of the submodule
     * @var
     */
    private $submodule;

    /**
     * @var
     */
    private $hours;

    /**
     * StudySubmodule constructor.
     * @param $submodule
     * @param $teacher
     * @param $students
     * @param $hours
     */
    public function __construct($submodule, $teacher, $students, $hours)
    {
        $this->submodule = $submodule;
        $this->getTeacher()->teacher = $teacher;
        $this->getStudents()->students = $students;
        $this->hours = $hours;
    }


    //
    /// --- Getters and Setters ---
    //


    /**
     * @return mixed
     */
    public function getSubmodule()
    {
        return $this->submodule;
    }

    /**
     * @param mixed $submodule
     */
    public function setSubmodule($submodule)
    {
        $this->submodule = $submodule;
    }

    /**
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * @return mixed
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param mixed $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }

    /**
     * @return mixed
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @param mixed $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }


}