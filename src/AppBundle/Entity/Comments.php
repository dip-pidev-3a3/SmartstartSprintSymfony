<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="comment_author", columns={"comment_author"}), @ORM\Index(name="comment_post_ID", columns={"comment_post_ID"})})
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\CommentsRepository")
 */
class Comments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comment_ID", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="datetime", nullable=true)
     */
    private $commentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_content", type="text", length=65535, nullable=false)
     */
    private $commentContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_approved", type="integer", nullable=true)
     */
    private $commentApproved;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comment_author", referencedColumnName="id")
     * })
     */
    private $commentAuthor;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Blogposts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comment_post_ID", referencedColumnName="post_ID",onDelete="CASCADE")
     * })
     */
    private $commentPost;
    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Blogposts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comment_post_ID", referencedColumnName="post_ID",onDelete="CASCADE")
     * })
     */
    private $commentPostId;

    /**
     * @return int
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * @param int $commentId
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;
    }

    /**
     * @return \DateTime
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * @param \DateTime $commentDate
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;
    }

    /**
     * @return string
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * @param string $commentContent
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;
    }

    /**
     * @return int
     */
    public function isCommentApproved()
    {
        return $this->commentApproved;
    }

    /**
     * @param int $commentApproved
     */
    public function setCommentApproved($commentApproved)
    {
        $this->commentApproved = $commentApproved;
    }

    /**
     * @return \FosUser
     */
    public function getCommentAuthor()
    {
        return $this->commentAuthor;
    }

    /**
     * @param \FosUser $commentAuthor
     */
    public function setCommentAuthor($commentAuthor)
    {
        $this->commentAuthor = $commentAuthor;
    }

    /**
     * @return \Blogposts
     */
    public function getCommentPost()
    {
        return $this->commentPost;
    }

    /**
     * @param \Blogposts $commentPost
     */
    public function setCommentPost($commentPost)
    {
        $this->commentPost = $commentPost;
    }



    /**
     * Get commentApproved
     *
     * @return integer
     */
    public function getCommentApproved()
    {
        return $this->commentApproved;
    }

    /**
     * Set commentPostId
     *
     * @param \AppBundle\Entity\Blogposts commentPostId
     *
     * @return Comments
     */
    public function setCommentPostId(\AppBundle\Entity\Blogposts $commentPostId = null)
    {
        $this->commentPostId = $commentPostId;

        return $this;
    }

    /**
     * Get commentPostId
     *
     * @return \AppBundle\Entity\Blogposts
     */
    public function getCommentPostId()
    {
        return $this->commentPostId;
    }
}
