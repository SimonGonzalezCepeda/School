<?php

namespace Com\Iesebre\Dam2\simongonzalez\Person;

class Person{
    /**
     * Especificar tipus d'individu que s'aplica a la funció render.
     * @var string
     */
    private $type = "La persona";
    /**
     * DNI
     * @var
     */
    private $personalId;
    /**
     * Nom
     * @var
     */
    private $givenName;
    /**
     * Cognom 1
     * @var
     */
    private $sn1;
    /**
     * Cognom 2
     * @var
     */
    private $sn2;

    /**
     * @var
     */
    private $email;

    /**
     * @var
     */
    private $postalAddress;

    /**
     * @var
     */
    private $localCity;

    /**
     * @var
     */
    private $postalCode;

    /**
     * @var
     */
    private $state;

    /**
     * @var
     */
    private $country;

    /**
     * @var
     */
    private $nationality;

    /**
     * Person constructor.
     * @param string $type
     * @param $personalId
     * @param $givenName
     * @param $sn1
     * @param $sn2
     * @param $email
     * @param $postalAddress
     * @param $localCity
     * @param $postalCode
     * @param $state
     * @param $country
     * @param $nationality
     */
    public function __construct($type, $personalId, $givenName, $sn1, $sn2, $email, $postalAddress, $localCity, $postalCode, $state, $country, $nationality)
    {
        $this->type = $type;
        $this->personalId = $personalId;
        $this->givenName = $givenName;
        $this->sn1 = $sn1;
        $this->sn2 = $sn2;
        $this->email = $email;
        $this->postalAddress = $postalAddress;
        $this->localCity = $localCity;
        $this->postalCode = $postalCode;
        $this->state = $state;
        $this->country = $country;
        $this->nationality = $nationality;
    }



    //
    /// --- Getters and Setters
    //


    /**
     * @return mixed
     */
    public function getPersonalId()
    {
        return $this->personalId;
    }

    /**
     * @param mixed $personalId
     */
    public function setPersonalId($personalId)
    {
        $this->personalId = $personalId;
    }

    /**
     * DNI
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * nom
     * @param mixed $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * Cognom 1
     * @param mixed $sn1
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;
    }

    /**
     * Cognom 2
     * @return mixed
     */
    public function getSn2()
    {
        return $this->sn2;
    }

    /**
     * @param mixed $sn2
     */
    public function setSn2($sn2)
    {
        $this->sn2 = $sn2;
    }

    /**
     * It will make appear the name of the People.
     */
    public function render()
    {
        echo "{$this->type} té el nom " . $this->getGivenName();
    }
}