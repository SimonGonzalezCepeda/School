<?php
/**
 * Created by PhpStorm.
 * User: sylver
 * Date: 13/10/15
 * Time: 13:05
 */

namespace Com\Iesebre\Dam2\simongonzalez\Curriculum;

use Com\Iesebre\Dam2\simongonzalez\Person;

class StudyModule extends Studies {

    /**
     * The name of the module
     * @var
     */
    private $module;

    /**
     * Name of the theacher that are part of this Module.
     * @var
     */
    private $teacher;


    /**
     * StudyModule constructor.
     * @param $module
     */
    public function __construct($module)
    {
        $this->module = $module;
    }

    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param mixed $module
     */
    public function setModule($module)
    {
        $this->module = $module;
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

}