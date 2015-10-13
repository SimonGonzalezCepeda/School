<?php
/**
 * Created by PhpStorm.
 * User: sylver
 * Date: 13/10/15
 * Time: 13:05
 */

namespace Com\Iesebre\Dam2\simongonzalez\Curriculum;


class StudyModule extends Studies {

    /**
     * The name of the module
     * @var
     */
    private $module;

    private $study;

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

}