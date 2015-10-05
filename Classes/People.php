<?php


class People
{
    /**
     * DNI
     * @var
     */
    public $personalId;
    /**
     * Nom
     * @var
     */
    public $givenName;
    /**
     * Cognom 1
     * @var
     */
    public $sn1;
    /**
     * Cognom 2
     * @var
     */
    public $sn2;

    /**
     * @var
     */
    public $email;

    /**
     * @var
     */
    public $postalAddress;

    /**
     * @var
     */
    public $localCity;

    /**
     * @var
     */
    public $postalCode;

    /**
     * @var
     */
    public $state;

    /**
     * @var
     */
    public $country;

    /**
     * @var
     */
    public $nationality;

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
}