<?php

namespace namespace Com\Iesebre\Dam2\simongonzalez\Curriculum;

/**
 * Class Grade
 * @package Com\Iesebre\Dam2\simongonzalez\Curriculum
 */
class Grade{
    /**
     * Number of the grade. Example 1st.
     * @var
     */
    private $grade;

    /**
     *  Time of the current grade, it can bet morning or afternoon.
     * @var
     */
    private $daytime;


    //
    ///  --- Getters and Setters ---
    //


    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    /**
     * @return mixed
     */
    public function getDaytime()
    {
        return $this->daytime;
    }

    /**
     * @param mixed $daytime
     */
    public function setDaytime($daytime)
    {
        $this->daytime = $daytime;
    }
}