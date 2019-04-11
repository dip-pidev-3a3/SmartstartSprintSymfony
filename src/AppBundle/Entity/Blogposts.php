<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\NotifiableInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Tchoulom\ViewCounterBundle\Model\ViewCountable;
use AppBundle\Entity\ViewCounter;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Blogposts
 *
 * @ORM\Table(name="blogposts", indexes={@ORM\Index(name="Author_id", columns={"Author_id"})})
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\BlogPostsRepository")
 * @Notifiable(name="blogposts")
 */
class Blogposts implements NotifiableInterface,ViewCountable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="post_ID", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $postId;

    /**
     * @ORM\OneToMany(targetEntity="ViewCounter", mappedBy="article")
     *
     */
    protected $viewCounters;

    /**
     * @ORM\Column(name="views", type="integer", nullable=true)
     */
    protected $views = 0;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->viewCounters = new ArrayCollection();
    }

    /**
     * Sets $views
     *
     * @param integer $views
     *
     * @return $this
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Gets $views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Get $viewCounters
     *
     * @return Collection
     */
    public function getViewCounters()
    {
        return $this->viewCounters;
    }

    /**
     * Add $viewCounter
     *
     * @param ViewCounter $viewCounter
     *
     * @return $this
     */
    public function addViewCounter(ViewCounter $viewCounter)
    {
        $this->viewCounters[] = $viewCounter;

        return $this;
    }

    /**
     * Remove $viewCounter
     *
     * @param ViewCounter $viewCounter
     */
    public function removeViewCounter(ViewCounter $viewCounter)
    {
        $this->viewCounters->removeElement($viewCounter);
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date", type="date", nullable=false)
     */
    private $postDate;

    /**
     * @var string
     *
     * @ORM\Column(name="post_content", type="text", nullable=false)
     */
    private $postContent;

    /**
     * @var string
     *
     * @ORM\Column(name="post_status", type="string", length=20, nullable=false)
     */
    private $postStatus = 'draft';

    /**
     * @var string
     *
     * @ORM\Column(name="post_type", type="string", length=100, nullable=false)
     */
    private $postType;



    /**
     * @var integer
     *
     * @ORM\Column(name="post_comment_count", type="integer", nullable=true)
     */
    private $postCommentCount = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="post_likes_count", type="integer", nullable=true)
     */
    private $postLikesCount;

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
     * @var string
     *
     * @ORM\Column(name="article_title", type="text", length=65535, nullable=false)
     */
    private $articleTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="article_content", type="text", nullable=true)
     */
    private $articleContent;

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
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload an image.")
     * @Assert\Image()
     * @ORM\Column(name="image",type="string",length=255)
     */
    private $image;

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }



    /**
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    /**
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * @param \DateTime $postDate
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    }

    /**
     * @return string
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * @param string $postContent
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;
    }

    /**
     * @return string
     */
    public function getPostStatus()
    {
        return $this->postStatus;
    }

    /**
     * @param string $postStatus
     */
    public function setPostStatus($postStatus)
    {
        $this->postStatus = $postStatus;
    }

    /**
     * @return string
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * @param string $postType
     */
    public function setPostType($postType)
    {
        $this->postType = $postType;
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
     * @return string
     */
    public function getArticleTitle()
    {
        return $this->articleTitle;
    }

    /**
     * @param string $articleTitle
     */
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = $articleTitle;
    }

    /**
     * @return string
     */
    public function getArticleContent()
    {
        return $this->articleContent;
    }

    /**
     * @param string $articleContent
     */
    public function setArticleContent($articleContent)
    {
        $this->articleContent = $articleContent;
    }
    /**
     * Set author
     *
     * @param \AppBundle\Entity\FosUser $author
     *
     * @return Blogposts
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
