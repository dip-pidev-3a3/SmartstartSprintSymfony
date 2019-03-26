<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostLike
 *
 * @ORM\Table(name="post_like")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\PostLikeRepository")
 */
class PostLike
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
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
     * PostLike constructor.
     */
    public function __construct()
    {
    }

    /**
     * Set author
     *
     * @param \AppBundle\Entity\FosUser $author
     *
     * @return PostLike
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
    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Blogposts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="post_ID",onDelete="CASCADE")
     * })
     */
    private $post;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set post
     *
     * @param \AppBundle\Entity\Blogposts $post
     *
     * @return PostLike
     */
    public function setPost(\AppBundle\Entity\Blogposts $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\Blogposts
     */
    public function getPost()
    {
        return $this->post;
    }
}

