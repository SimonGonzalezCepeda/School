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

}