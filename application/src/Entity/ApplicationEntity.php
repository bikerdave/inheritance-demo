<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ApplicationEntity")
 */
class ApplicationEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @var int $id
     */
    protected $id;
}
