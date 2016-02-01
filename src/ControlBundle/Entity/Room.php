<?php

namespace ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="room")
 * @ORM\Entity(repositoryClass="ControlBundle\Repository\RoomRepository")
 */
class Room
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
     * @var int
     *
     * @ORM\Column(name="room_number", type="integer", unique=true)
     */
    private $roomNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="floor_number", type="integer")
     */
    private $floorNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="number_beds", type="integer")
     */
    private $numberBeds;

    /**
     * @var bool
     *
     * @ORM\Column(name="has_air_Conditioned", type="boolean")
     */
    private $hasAirConditioned;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=200)
     */
    private $comments;


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
     * Set roomNumber
     *
     * @param integer $roomNumber
     *
     * @return Room
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * Get roomNumber
     *
     * @return int
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * Set floorNumber
     *
     * @param integer $floorNumber
     *
     * @return Room
     */
    public function setFloorNumber($floorNumber)
    {
        $this->floorNumber = $floorNumber;

        return $this;
    }

    /**
     * Get floorNumber
     *
     * @return int
     */
    public function getFloorNumber()
    {
        return $this->floorNumber;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Room
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set numberBeds
     *
     * @param integer $numberBeds
     *
     * @return Room
     */
    public function setNumberBeds($numberBeds)
    {
        $this->numberBeds = $numberBeds;

        return $this;
    }

    /**
     * Get numberBeds
     *
     * @return int
     */
    public function getNumberBeds()
    {
        return $this->numberBeds;
    }

    /**
     * Set hasAirConditioned
     *
     * @param boolean $hasAirConditioned
     *
     * @return Room
     */
    public function setHasAirConditioned($hasAirConditioned)
    {
        $this->hasAirConditioned = $hasAirConditioned;

        return $this;
    }

    /**
     * Get hasAirConditioned
     *
     * @return bool
     */
    public function getHasAirConditioned()
    {
        return $this->hasAirConditioned;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Room
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Room
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }
}

