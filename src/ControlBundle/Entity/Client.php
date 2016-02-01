<?php

namespace ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="ControlBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=45)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="identification_type", type="string", columnDefinition="ENUM('CC', 'TI', 'CE', 'PASSPORT')", length=20)
     */
    private $identificationType;

    /**
     * @var string
     *
     * @ORM\Column(name="identification_number", type="string",  length=20, unique=true)
     */
    private $identificationNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer", unique=true)
     */
    private $phone;

    /**
     * @var int
     *
     * @ORM\Column(name="cellphone", type="string", length=20, unique=true)
     */
    private $cellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100, unique=true)
     */
    private $address;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="datetime")
     */
    private $birthDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Client
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set identificationType
     *
     * @param string $identificationType
     *
     * @return Client
     */
    public function setIdentificationType($identificationType)
    {
        $this->identificationType = $identificationType;

        return $this;
    }

    /**
     * Get identificationType
     *
     * @return string
     */
    public function getIdentificationType()
    {
        return $this->identificationType;
    }

    /**
     * Set identificationNumber
     *
     * @param string $identificationNumber
     *
     * @return Client
     */
    public function setIdentificationNumber($identificationNumber)
    {
        $this->identificationNumber = $identificationNumber;

        return $this;
    }

    /**
     * Get identificationNumber
     *
     * @return string
     */
    public function getIdentificationNumber()
    {
        return $this->identificationNumber;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set cellphone
     *
     * @param integer $cellphone
     *
     * @return Client
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return int
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Client
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Client
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }
}

