<?php


namespace Com\Iesebre\Dam2\simongonzalez\Curriculum;

/**
 * Class ClassroomGroup
 * @package Com\Iesebre\Dam2\simongonzalez\Curriculum
 */
class ClassroomGroup{

    /**
     * Name of the group
     * @var
     */
    private $name;

    /**
     + All the teachers
     * @var array
     */
    private $teachers = array();

    /**
     * All locations or classrooms that are included here
     * @var array
     */
    private $locations = array();

    /**
     * All studymodules that are permeated here if its necessary
     * @var array
     */
    private $studymodules = array();


    /// --- Getters and Setters ---

    /**
     * @return array
     */
    public function getTeachers()
    {
        return $this->teachers;
    }

    /**
     * @param array $teachers
     */
    public function setTeachers($teachers)
    {
        $this->teachers = $teachers;
    }

    /**
     * @return array
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @param array $locations
     */
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }

    /**
     * @return array
     */
    public function getStudymodules()
    {
        return $this->studymodules;
    }

    /**
     * @param array $studymodules
     */
    public function setStudymodules($studymodules)
    {
        $this->studymodules = $studymodules;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    } /// --- Getters and Setters ---

}