<?php

namespace ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="ControlBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="rese_date", type="datetime")
     */
    private $reseDate;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="client")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * @ORM\Column(name="client_id", type="integer")
     * 
     */
    private $clientId;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="room")
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     * @ORM\Column(name="room_id", type="integer")
     */
    private $roomId;


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
     * Set reseDate
     *
     * @param \DateTime $reseDate
     *
     * @return Reservation
     */
    public function setReseDate($reseDate)
    {
        $this->reseDate = $reseDate;

        return $this;
    }

    /**
     * Get reseDate
     *
     * @return \DateTime
     */
    public function getReseDate()
    {
        return $this->reseDate;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return Reservation
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set roomId
     *
     * @param integer $roomId
     *
     * @return Reservation
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;

        return $this;
    }

    /**
     * Get roomId
     *
     * @return int
     */
    public function getRoomId()
    {
        return $this->roomId;
    }
}

