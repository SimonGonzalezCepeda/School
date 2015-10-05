<?php


class Student extends People Trait
{
    /* Per a poder fer servir els atributs de Worker. */
    use Worker;

    public $dual;

    public function render()
    {
        echo "El estudiant té el nom" . $this->getGivenName() . "i te el següent salari:" . $this->salary;
    }
}