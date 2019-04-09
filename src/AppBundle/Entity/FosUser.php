<?php

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Mgilet\NotificationBundle\NotifiableInterface;
use FOS\MessageBundle\Model\ParticipantInterface;

use Doctrine\ORM\Mapping as ORM;



/**
 * FosUser
 *
 * @ORM\Table(name="fos_user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_957A647992FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_957A6479A0D96FBF", columns={"email_canonical"}), @ORM\UniqueConstraint(name="UNIQ_957A6479C05FB297", columns={"confirmation_token"})}, indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 * @Notifiable(name="fos_user")
 */
class FosUser extends BaseUser implements NotifiableInterface,ParticipantInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=true)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Birth_date", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Bio", type="string", length=50, nullable=true)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=50, nullable=true)
     */
    private $location;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Register_Date", type="date", nullable=true)
     */
    private $registerDate;

    /**
     * @var float
     *
     * @ORM\Column(name="Earnings", type="float", precision=10, scale=0, nullable=true)
     */
    private $earnings;

    /**
     * @var float
     *
     * @ORM\Column(name="Expenses", type="float", precision=10, scale=0, nullable=true)
     */
    private $expenses;

    /**
     * @var float
     *
     * @ORM\Column(name="Budget", type="float", precision=10, scale=0, nullable=true)
     */
    private $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="field_company", type="string", length=30, nullable=true)
     */
    private $fieldCompany;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Skills", inversedBy="idFreelancer")
     * @ORM\JoinTable(name="has_skill",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_freelancer", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="Opportunity", inversedBy="freelancerid")
     * @ORM\JoinTable(name="suggestedopps",
     *   joinColumns={
     *     @ORM\JoinColumn(name="freelancerId", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="opportunityId", referencedColumnName="id_opp")
     *   }
     * )
     */
    private $opportunityid;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param \DateTime $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param string $bio
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return \DateTime
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * @param \DateTime $registerDate
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;
    }

    /**
     * @return float
     */
    public function getEarnings()
    {
        return $this->earnings;
    }

    /**
     * @param float $earnings
     */
    public function setEarnings($earnings)
    {
        $this->earnings = $earnings;
    }

    /**
     * @return float
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * @param float $expenses
     */
    public function setExpenses($expenses)
    {
        $this->expenses = $expenses;
    }

    /**
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return string
     */
    public function getFieldCompany()
    {
        return $this->fieldCompany;
    }

    /**
     * @param string $fieldCompany
     */
    public function setFieldCompany($fieldCompany)
    {
        $this->fieldCompany = $fieldCompany;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdSkill()
    {
        return $this->idSkill;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idSkill
     */
    public function setIdSkill($idSkill)
    {
        $this->idSkill = $idSkill;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $opportunityid
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;
    }

    /**
     * Constructor
     */
    public function __construct()
    { parent::__construct();
        $this->idSkill = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunityid = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

