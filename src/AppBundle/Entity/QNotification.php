<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QNotification
 *
 * @ORM\Table(name="qnotification", indexes={@ORM\Index(name="id_user3", columns={"idU"})})
 * @ORM\Entity(repositoryClass="QandABundle\Repository\QNotificationRepository")
 */
class QNotification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idU", referencedColumnName="id")
     * })
     */
    private $idu;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="idType", type="integer", nullable=false)
     */
    private $idtype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="declanched", type="date", nullable=false)
     */
    private $declanched;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="viwed", type="date", nullable=true)
     */
    private $viwed;

    public function __construct()
    {
        $this->declanched=new \DateTime('now');
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idu
     *
     * @param \AppBundle\Entity\FosUser $idu
     *
     * @return QNotification
     */
    public function setIdu(\AppBundle\Entity\FosUser $idu = null)
    {
        $this->idu = $idu;

        return $this;
    }

    /**
     * Get idu
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getIdu()
    {
        return $this->idu;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return QNotification
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set idtype
     *
     * @param integer $idtype
     *
     * @return QNotification
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;

        return $this;
    }

    /**
     * Get idtype
     *
     * @return integer
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * Set declanched
     *
     * @param \DateTime $declanched
     *
     * @return QNotification
     */
    public function setDeclanched($declanched)
    {
        $this->declanched = $declanched;

        return $this;
    }

    /**
     * Get declanched
     *
     * @return \DateTime
     */
    public function getDeclanched()
    {
        return $this->declanched;
    }

    /**
     * Set viwed
     *
     * @param \DateTime $viwed
     *
     * @return QNotification
     */
    public function setViwed($viwed)
    {
        $this->viwed = $viwed;

        return $this;
    }

    /**
     * Get viwed
     *
     * @return \DateTime
     */
    public function getViwed()
    {
        return $this->viwed;
    }
}
