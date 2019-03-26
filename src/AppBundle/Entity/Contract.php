<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 *
 * @ORM\Table(name="contract", indexes={@ORM\Index(name="id_application", columns={"id_application"})})
 * @ORM\Entity(repositoryClass="ContractBundle\Repository\ContractRepository")
 */
class Contract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contract", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContract;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=30, nullable=true)
     */
    private $paymentMethod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish_date", type="date", nullable=true)
     */
    private $finishDate;

    /**
     * @var float
     *
     * @ORM\Column(name="sum", type="float", precision=10, scale=0, nullable=true)
     */
    private $sum;

    /**
     * @var integer
     *
     * @ORM\Column(name="prio", type="integer", nullable=true)
     */
    private $prio;

    /**
     * @var \Application
     *
     * @ORM\ManyToOne(targetEntity="Application")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_application", referencedColumnName="id_application")
     * })
     */
    private $idApplication;

    /**
     * Get idContract
     *
     * @return integer
     */
    public function getIdContract()
    {
        return $this->idContract;
    }

    /**
     * Set paymentMethod
     *
     * @param string $paymentMethod
     *
     * @return Contract
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Contract
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set finishDate
     *
     * @param \DateTime $finishDate
     *
     * @return Contract
     */
    public function setFinishDate($finishDate)
    {
        $this->finishDate = $finishDate;

        return $this;
    }

    /**
     * Get finishDate
     *
     * @return \DateTime
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }

    /**
     * Set sum
     *
     * @param float $sum
     *
     * @return Contract
     */
    public function setSum($sum)
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * Get sum
     *
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Set prio
     *
     * @param integer $prio
     *
     * @return Contract
     */
    public function setPrio($prio)
    {
        $this->prio = $prio;

        return $this;
    }

    /**
     * Get prio
     *
     * @return integer
     */
    public function getPrio()
    {
        return $this->prio;
    }

    /**
     * Set idApplication
     *
     * @param \AppBundle\Entity\Application $idApplication
     *
     * @return Contract
     */
    public function setIdApplication(\AppBundle\Entity\Application $idApplication = null)
    {
        $this->idApplication = $idApplication;

        return $this;
    }

    /**
     * Get idApplication
     *
     * @return \AppBundle\Entity\Application
     */
    public function getIdApplication()
    {
        return $this->idApplication;
    }


}

