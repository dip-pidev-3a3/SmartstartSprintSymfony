<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table(name="application", indexes={@ORM\Index(name="id_opportunity", columns={"id_opportunity"}), @ORM\Index(name="id_freelancer", columns={"id_freelancer"})})
 * @ORM\Entity(repositoryClass="ApplicationBundle\Repository\ApplicationRepository")
 */
class Application
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_application", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idApplication;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=30, nullable=false)
     */
    private $state;

    /**
     * @var \Opportunity
     *
     * @ORM\ManyToOne(targetEntity="Opportunity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_opportunity", referencedColumnName="id_opp")
     * })
     */
    private $idOpportunity;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_freelancer", referencedColumnName="id")
     * })
     */
    private $idFreelancer;

    /**
     * Application constructor.
     */


    /**
     * Get idApplication
     *
     * @return integer
     */
    public function getIdApplication()
    {
        return $this->idApplication;
    }



    /**
     * Set state
     *
     * @param string $state
     *
     * @return Application
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set idOpportunity
     *
     * @param \AppBundle\Entity\Opportunity $idOpportunity
     *
     * @return Application
     */
    public function setIdOpportunity(\AppBundle\Entity\Opportunity $idOpportunity=null )
    {
        $this->idOpportunity = $idOpportunity;

     return $this;
    }
    


    /**
     * Get idOpportunity
     *
     * @return \AppBundle\Entity\Opportunity
     */
    public function getIdOpportunity()
    {
        return $this->idOpportunity;
    }

    /**
     * Set idFreelancer
     *
     * @param \AppBundle\Entity\FosUser $idFreelancer
     *
     * @return Application
     */
    public function setIdFreelancer(\AppBundle\Entity\FosUser $idFreelancer=null )
    {
        $this->idFreelancer = $idFreelancer;
    
    return $this;
    }

    /**
     * Get idFreelancer
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getIdFreelancer()
    {
        return $this->idFreelancer;
    }
    public function __toString()
    {
        return (string) $this->getIdOpportunity()->getJobTitle();
    }


}
