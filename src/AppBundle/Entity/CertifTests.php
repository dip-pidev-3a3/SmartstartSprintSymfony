<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CertifTests
 *
 * @ORM\Table(name="certif_tests", indexes={@ORM\Index(name="id_freelancer", columns={"id_freelancer"})})
 * @ORM\Entity
 */
class CertifTests
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_certif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCertif;

    /**
     * @var string
     *
     * @ORM\Column(name="name_certif", type="string", length=50, nullable=false)
     */
    private $nameCertif;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_freelancer", referencedColumnName="id")
     * })
     */
    private $idFreelancer;


}

