<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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


}

