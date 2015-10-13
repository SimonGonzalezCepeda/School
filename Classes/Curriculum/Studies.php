<?php

namespace Com\Iesebre\Dam2\simongonzalez\Curriculum;


class Studies{

    /**
     * Name of the study
     * @var
     */
    private $study;

    /**
     * @param $study
     */
    public function __construct($study)
    {
        $this->study = $study;
    }

    //
    /// --- Getters and Setters
    //

    /**
     * @return mixed
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * @param mixed $study
     */
    public function setStudy($study)
    {
        $this->study = $study;
    }


}