<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages", indexes={@ORM\Index(name="message_from", columns={"message_from"}), @ORM\Index(name="message_to", columns={"message_to"})})
 * @ORM\Entity
 */
class Messages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255, nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="attachement", type="integer", nullable=true)
     */
    private $attachement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_message", type="date", nullable=false)
     */
    private $dateMessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="viewed", type="integer", nullable=false)
     */
    private $viewed;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="message_from", referencedColumnName="id")
     * })
     */
    private $messageFrom;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="message_to", referencedColumnName="id")
     * })
     */
    private $messageTo;


}

