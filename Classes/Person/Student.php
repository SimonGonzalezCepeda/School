<?php

namespace Com\Iesebre\Dam2\simongonzalez\Person;

class Student extends Person
{
    /* Per a poder fer servir els atributs de Worker. */
    use Worker;

    /**
     * Bolean to know if the Studen win money or not.
     * @var null
     */
    private $dual = false;

    private $classRoomGroup;

    /**
     * This function puts Student dual off as a default but it can be change by calling it.
     * @param null $dual
     */
    public function __construct($dual=null)
    {
        $this->type = "estudiant";
        if($dual != null)
            $this->dual;
    }

    /**
     * Print salary (if any) and name
     */
    public function render (){
        $this->type = "L'estudiant"; // type refers to the first segment of the render string.
        if ($this->dual){
            parent::render() . " i cobra " . $this->salary;
        } else {
            parent::render();
        }
    }

}