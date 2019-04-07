<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table(name="quiz", indexes={@ORM\Index(name="userFK", columns={"idU"})})
 * @ORM\Entity
 */
class Quiz
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
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=100, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="quizFile", type="blob", length=65535, nullable=false)
     */
    private $quizfile;

    /**
     * @var integer
     *
     * @ORM\Column(name="timer", type="integer", nullable=false)
     */
    private $timer;

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
     * @var \DateTime
     *
     * @ORM\Column(name="postDate", type="date", nullable=false)
     */
    private $postdate;

    public function __construct()
    {
        $this->postdate=new \DateTime('now');
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
     * Set subject
     *
     * @param string $subject
     *
     * @return Quiz
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
     * Set postdate
     *
     * @param \DateTime $postdate
     *
     * @return Quiz
     */
    public function setPostdate($postdate)
    {
        $this->postdate = $postdate;

        return $this;
    }

    /**
     * Get postdate
     *
     * @return \DateTime
     */
    public function getPostdate()
    {
        return $this->postdate;
    }

    /**
     * Set quizfile
     *
     * @param string $quizfile
     *
     * @return Quiz
     */
    public function setQuizfile($quizfile)
    {
        $this->quizfile = $quizfile;

        return $this;
    }

    /**
     * Get quizfile
     *
     * @return string
     */
    public function getQuizfile()
    {
        return $this->quizfile;
    }

    /**
     * Set timer
     *
     * @param integer $timer
     *
     * @return Quiz
     */
    public function setTimer($timer)
    {
        $this->timer = $timer;

        return $this;
    }

    /**
     * Get timer
     *
     * @return integer
     */
    public function getTimer()
    {
        return $this->timer;
    }

    /**
     * Set idu
     *
     * @param \AppBundle\Entity\FosUser $idu
     *
     * @return Quiz
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
}
