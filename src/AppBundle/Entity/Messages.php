<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use FOS\MessageBundle\Entity\Message as BaseMessage;

/**
 * Messages
 *
 * @ORM\Table(name="messages", indexes={@ORM\Index(name="thread", columns={"thread"}), @ORM\Index(name="sender", columns={"sender"}), @ORM\Index(name="metadata", columns={"metadata"})})
 * @ORM\Entity
 */
class Messages extends BaseMessage
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *   targetEntity="AppBundle\Entity\Thread",
     *   inversedBy="messages"
     * )
     * @var \FOS\MessageBundle\Model\ThreadInterface
     */
    protected $thread;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FosUser")
     * @var \FOS\MessageBundle\Model\ParticipantInterface
     */
    protected $sender;

    /**
     * @ORM\OneToMany(
     *   targetEntity="AppBundle\Entity\MessageMetadata",
     *   mappedBy="message",
     *   cascade={"all"}
     * )
     * @var MessageMetadata[]|Collection
     */
    protected $metadata;


    /**
     * Add metadatum
     *
     * @param \AppBundle\Entity\MessageMetadata $metadatum
     *
     * @return Messages
     */
    public function addMetadatum(\AppBundle\Entity\MessageMetadata $metadatum)
    {
        $this->metadata[] = $metadatum;
    
        return $this;
    }

    /**
     * Remove metadatum
     *
     * @param \AppBundle\Entity\MessageMetadata $metadatum
     */
    public function removeMetadatum(\AppBundle\Entity\MessageMetadata $metadatum)
    {
        $this->metadata->removeElement($metadatum);
    }

    /**
     * Get metadata
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
}
