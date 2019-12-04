<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Concrete\Package\ExamplePackage\Entity\PackageAbstractEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="ApplicationOverrideEntity")
 */
class ApplicationOverrideEntity extends PackageAbstractEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @var int $id
     */
    protected $id;
}
