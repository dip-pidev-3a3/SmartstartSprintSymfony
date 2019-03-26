<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedback
 *
 * @ORM\Table(name="feedback", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_application", columns={"id_application"})})
 * @ORM\Entity
 */
class Feedback
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_feedback", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeedback;

    /**
     * @var float
     *
     * @ORM\Column(name="Rating", type="float", precision=10, scale=0, nullable=false)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=100, nullable=false)
     */
    private $comment;

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
     * @var \Application
     *
     * @ORM\ManyToOne(targetEntity="Application")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_application", referencedColumnName="id_application")
     * })
     */
    private $idApplication;


}

