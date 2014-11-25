<?php

namespace CD\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Train {
    /**
     * @ORM\Column("int")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;

    /**
     * @var Coach[]
     * @ORM\OneToMany(targetEntity="Coach", mappedBy="train")
     */
    private $coaches;
}
