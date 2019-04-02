<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Complaints
 *
 * @ORM\Table(name="complaints", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_opp", columns={"id_opp"})})
 * @ORM\Entity
 */
class Complaints
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_complaint", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComplaint;

    /**
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/",
     *     message="not_valid_email"
     * )
     * @var string
     *
     * @ORM\Column(name="mail_user", type="string", length=50, nullable=false)
     */
    private $mailUser;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=50, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added_date", type="date", nullable=false)
     */
    private $addedDate;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \Opportunity
     *
     * @ORM\ManyToOne(targetEntity="Opportunity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_opp", referencedColumnName="id_opp")
     * })
     */
    private $idOpp;



    /**
     * Get idComplaint
     *
     * @return integer
     */
    public function getIdComplaint()
    {
        return $this->idComplaint;
    }

    /**
     * Set mailUser
     *
     * @param string $mailUser
     *
     * @return Complaints
     */
    public function setMailUser($mailUser)
    {
        $this->mailUser = $mailUser;

        return $this;
    }

    /**
     * Get mailUser
     *
     * @return string
     */
    public function getMailUser()
    {
        return $this->mailUser;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Complaints
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Complaints
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set addedDate
     *
     * @param \DateTime $addedDate
     *
     * @return Complaints
     */
    public function setAddedDate($addedDate)
    {
        $this->addedDate = $addedDate;

        return $this;
    }

    /**
     * Get addedDate
     *
     * @return \DateTime
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * Set idUser
     *
     * @param \AppBundle\Entity\FosUser $idUser
     *
     * @return Complaints
     */
    public function setIdUser(\AppBundle\Entity\FosUser $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idOpp
     *
     * @param \AppBundle\Entity\Opportunity $idOpp
     *
     * @return Complaints
     */
    public function setIdOpp(\AppBundle\Entity\Opportunity $idOpp = null)
    {
        $this->idOpp = $idOpp;

        return $this;
    }

    /**
     * Get idOpp
     *
     * @return \AppBundle\Entity\Opportunity
     */
    public function getIdOpp()
    {
        return $this->idOpp;
    }
}
