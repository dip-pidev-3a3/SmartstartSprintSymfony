<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Education
 *
 * @ORM\Table(name="education", indexes={@ORM\Index(name="id_freelancer", columns={"id_freelancer"})})
 * @ORM\Entity
 */
class Education
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_edu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEdu;

    /**
     * @var string
     *
     * @ORM\Column(name="edu_name", type="string", length=100, nullable=false)
     */
    private $eduName;

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

