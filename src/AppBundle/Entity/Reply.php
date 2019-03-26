<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reply
 *
 * @ORM\Table(name="reply", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_question", columns={"id_question"})})
 * @ORM\Entity
 */
class Reply
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rep", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRep;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reply", type="date", nullable=false)
     */
    private $dateReply;

    /**
     * @var integer
     *
     * @ORM\Column(name="likes", type="integer", nullable=false)
     */
    private $likes;

    /**
     * @var integer
     *
     * @ORM\Column(name="dislikes", type="integer", nullable=false)
     */
    private $dislikes;

    /**
     * @var \Questions
     *
     * @ORM\ManyToOne(targetEntity="Questions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_question", referencedColumnName="id_question")
     * })
     */
    private $idQuestion;

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

