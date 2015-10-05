<?php


class Student extends People
{
    /* Per a poder fer servir els atributs de Worker. */
    use Worker;

    public $dual;

    public function __construct($dual=null)
    {
        $this->dual = $dual;
    }

    public function render()
    {
        if($this->dual){
            echo "El estudiant té el nom" . $this->getGivenName() . "i te el següent salari:" . $this->salary;
        } else {
            echo "El estudiant té el nom" . $this->getGivenName();
        }

    }
}