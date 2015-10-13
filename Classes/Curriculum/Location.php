<?php


namespace Com\Iesebre\Dam2\simongonzalez\Curriculum;


class Location{

    /**
     * Here will be the current ID of each location. To locate we use both ID and type.
     * @var
     */
    private $id;

    /**
     * If it is a classroom, basement, etc.
     * @var
     */
    private $type;

    //
    /// --- Getters and Setters ---
    //

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }



}
