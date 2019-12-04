<?php

namespace Concrete\Package\ExamplePackage\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="PackageEntity")
 */
class PackageEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @var int $id
     */
    protected $id;
}
