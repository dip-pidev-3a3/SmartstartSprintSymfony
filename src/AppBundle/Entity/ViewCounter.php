<?php
/**
 * Created by PhpStorm.
 * User: acmou
 * Date: 4/6/2019
 * Time: 6:24 PM
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


use Tchoulom\ViewCounterBundle\Entity\ViewCounter as BaseViewCounter;

/**
 * ViewCounter.
 *
 * @ORM\Table(name="view_counter", indexes={@ORM\Index(name="article", columns={"article"})})
 * @ORM\Entity()
 */
class ViewCounter extends BaseViewCounter
{

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Blogposts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article", referencedColumnName="post_ID")
     * })
     */
    private $article;

    /**
     * Gets article
     *
     * @return Blogposts
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Sets Article
     *
     * @param Blogposts $article
     *
     * @return $this
     */
    public function setArticle(Blogposts $article)
    {
        $this->article = $article;

        return $this;
    }

}