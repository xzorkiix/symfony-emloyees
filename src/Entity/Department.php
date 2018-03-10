<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="deportaments")
 */
class Deportament
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="dept_no", length = 4)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @ORM\Column(name="dept_name", type="string", lenght = 40, unique = true)
     */
    private $name;

    
}
