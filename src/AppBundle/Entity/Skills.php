<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skills
 *
 * @ORM\Table(name="skills")
 * @ORM\Entity
 */
class Skills
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_skill", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSkill;

    /**
     * @var string
     *
     * @ORM\Column(name="name_skill", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nameSkill;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="FosUser", mappedBy="idSkill")
     */
    private $idFreelancer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Opportunity", mappedBy="idSkill")
     */
    private $idOpp;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFreelancer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idOpp = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

