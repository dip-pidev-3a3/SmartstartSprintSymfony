<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Views
 *
 * @ORM\Table(name="views")
 * @ORM\Entity
 */
class Views
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_view", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idView;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="view_identification", type="integer", nullable=false)
     */
    private $viewIdentification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateView", type="date", nullable=false)
     */
    private $dateview;


}

