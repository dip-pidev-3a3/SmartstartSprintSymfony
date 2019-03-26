<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opportunity
 *
 * @ORM\Table(name="opportunity", indexes={@ORM\Index(name="id_entreprise", columns={"id_entreprise"})})
 * @ORM\Entity
 */
class Opportunity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_opp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOpp;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="string", length=50, nullable=false)
     */
    private $jobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_category", type="string", length=50, nullable=false)
     */
    private $jobCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="job_description", type="string", length=50, nullable=false)
     */
    private $jobDescription;

    /**
     * @var float
     *
     * @ORM\Column(name="Budget", type="float", precision=10, scale=0, nullable=false)
     */
    private $budget;

    /**
     * @var integer
     *
     * @ORM\Column(name="job_Draft", type="integer", nullable=false)
     */
    private $jobDraft;

    /**
     * @var string
     *
     * @ORM\Column(name="job_Duration", type="string", length=50, nullable=false)
     */
    private $jobDuration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Expiry_date", type="date", nullable=false)
     */
    private $expiryDate;

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
     *   @ORM\JoinColumn(name="id_entreprise", referencedColumnName="id")
     * })
     */
    private $idEntreprise;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Skills", inversedBy="idOpp")
     * @ORM\JoinTable(name="needed_skills",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_opp", referencedColumnName="id_opp")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_skill", referencedColumnName="id_skill")
     *   }
     * )
     */
    private $idSkill;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="FosUser", mappedBy="opportunityid")
     */
    private $freelancerid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSkill = new \Doctrine\Common\Collections\ArrayCollection();
        $this->freelancerid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idOpp
     *
     * @return integer
     */
    public function getIdOpp()
    {
        return $this->idOpp;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     *
     * @return Opportunity
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    
        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set jobCategory
     *
     * @param string $jobCategory
     *
     * @return Opportunity
     */
    public function setJobCategory($jobCategory)
    {
        $this->jobCategory = $jobCategory;
    
        return $this;
    }

    /**
     * Get jobCategory
     *
     * @return string
     */
    public function getJobCategory()
    {
        return $this->jobCategory;
    }

    /**
     * Set jobDescription
     *
     * @param string $jobDescription
     *
     * @return Opportunity
     */
    public function setJobDescription($jobDescription)
    {
        $this->jobDescription = $jobDescription;
    
        return $this;
    }

    /**
     * Get jobDescription
     *
     * @return string
     */
    public function getJobDescription()
    {
        return $this->jobDescription;
    }

    /**
     * Set budget
     *
     * @param float $budget
     *
     * @return Opportunity
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    
        return $this;
    }

    /**
     * Get budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set jobDraft
     *
     * @param integer $jobDraft
     *
     * @return Opportunity
     */
    public function setJobDraft($jobDraft)
    {
        $this->jobDraft = $jobDraft;
    
        return $this;
    }

    /**
     * Get jobDraft
     *
     * @return integer
     */
    public function getJobDraft()
    {
        return $this->jobDraft;
    }

    /**
     * Set jobDuration
     *
     * @param string $jobDuration
     *
     * @return Opportunity
     */
    public function setJobDuration($jobDuration)
    {
        $this->jobDuration = $jobDuration;
    
        return $this;
    }

    /**
     * Get jobDuration
     *
     * @return string
     */
    public function getJobDuration()
    {
        return $this->jobDuration;
    }

    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     *
     * @return Opportunity
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    
        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set addedDate
     *
     * @param \DateTime $addedDate
     *
     * @return Opportunity
     */
    public function setAddedDate($addedDate)
    {
        $this->addedDate = $addedDate;
    
        return $this;
    }

    /**
     * Get addedDate
     *
     * @return \DateTime
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * Set idEntreprise
     *
     * @param \AppBundle\Entity\FosUser $idEntreprise
     *
     * @return Opportunity
     */
    public function setIdEntreprise(\AppBundle\Entity\FosUser $idEntreprise = null)
    {
        $this->idEntreprise = $idEntreprise;
    
        return $this;
    }

    /**
     * Get idEntreprise
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Add idSkill
     *
     * @param \AppBundle\Entity\Skills $idSkill
     *
     * @return Opportunity
     */
    public function addIdSkill(\AppBundle\Entity\Skills $idSkill)
    {
        $this->idSkill[] = $idSkill;
    
        return $this;
    }

    /**
     * Remove idSkill
     *
     * @param \AppBundle\Entity\Skills $idSkill
     */
    public function removeIdSkill(\AppBundle\Entity\Skills $idSkill)
    {
        $this->idSkill->removeElement($idSkill);
    }

    /**
     * Get idSkill
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdSkill()
    {
        return $this->idSkill;
    }

    /**
     * Add freelancerid
     *
     * @param \AppBundle\Entity\FosUser $freelancerid
     *
     * @return Opportunity
     */
    public function addFreelancerid(\AppBundle\Entity\FosUser $freelancerid)
    {
        $this->freelancerid[] = $freelancerid;
    
        return $this;
    }

    /**
     * Remove freelancerid
     *
     * @param \AppBundle\Entity\FosUser $freelancerid
     */
    public function removeFreelancerid(\AppBundle\Entity\FosUser $freelancerid)
    {
        $this->freelancerid->removeElement($freelancerid);
    }

    /**
     * Get freelancerid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFreelancerid()
    {
        return $this->freelancerid;
    }
}
