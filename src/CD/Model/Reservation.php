<?php

namespace CD\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Reservation {
    /**
     * @ORM\Column("int")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;
}
