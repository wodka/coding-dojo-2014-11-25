<?php

namespace CD\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Coach {
    /**
     * @ORM\Column("int")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;

    /**
     * @var Train
     * @ORM\ManyToOne(targetEntity="Train", inversedBy="coaches")
     */
    private $train;
}
