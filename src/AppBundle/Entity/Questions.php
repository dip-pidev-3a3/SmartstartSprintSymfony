<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Questions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_question", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=50, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=256, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added_date", type="date", nullable=false)
     */
    private $addedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="answered", type="date", nullable=true)
     */
    private $answered;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=256, nullable=false)
     */
    private $subject;

    /**
     * @var integer
     *
     * @ORM\Column(name="Vues", type="integer", nullable=false)
     */
    private $vues;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;


}

