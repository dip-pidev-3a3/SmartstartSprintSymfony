<?php
/**
 * Created by PhpStorm.
 * User: acmou
 * Date: 3/26/2019
 * Time: 3:41 PM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BlogProfits
 *
 * @ORM\Table(name="BlogProfits", indexes={@ORM\Index(name="Author_id", columns={"Author_id"})})
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\BlogProfitsRepository")
 *
 */
class BlogProfits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $Id;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Start_date", type="date", nullable=false)
     */
    private $StartDate;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="End_date", type="date", nullable=false)
     */
    private $EndDate;

    /**
     * BlogProfits constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param \DateTime $StartDate
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param \DateTime $EndDate
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param int $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }
    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Author_id", referencedColumnName="id")
     * })
     */
    private $author;
    /**
     * @var integer
     *
     * @ORM\Column(name="post_comment_count", type="integer", nullable=true)
     */
    private $postCommentCount;
    /**
     * @var integer
     *
     * @ORM\Column(name="post_likes_count", type="integer", nullable=true)
     */
    private $postLikesCount;

    /**
     * @return float
     */
    public function getPayment()
    {
        return $this->Payment;
    }

    /**
     * @param float $Payment
     */
    public function setPayment($Payment)
    {
        $this->Payment = $Payment;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="post_Status", type="integer", nullable=true)
     */
    private $Status;
    /**
     * @var float
     *
     * @ORM\Column(name="post_payment_amount", type="float", nullable=true)
     */
    private $Payment;
    /**
     * @return int
     */
    public function getPostLikesCount()
    {
        return $this->postLikesCount;
    }

    /**
     * @param int $postLikesCount
     */
    public function setPostLikesCount($postLikesCount)
    {
        $this->postLikesCount = $postLikesCount;
    }
    /**
     * @return int
     */
    public function getPostCommentCount()
    {
        return $this->postCommentCount;
    }

    /**
     * @param int $postCommentCount
     */
    public function setPostCommentCount($postCommentCount)
    {
        $this->postCommentCount = $postCommentCount;
    }
    /**
     * Set author
     *
     * @param \AppBundle\Entity\FosUser $author
     *
     * @return BlogProfits
     */
    public function setAuthor(\AppBundle\Entity\FosUser $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getAuthor()
    {
        return $this->author;
    }

}