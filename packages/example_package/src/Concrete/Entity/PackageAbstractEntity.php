<?php

namespace Concrete\Package\ExamplePackage\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class PackageAbstractEntity
{
    /**
     * @ORM\Column(type="integer")
     *
     * @var int $numericField
     */
    protected $numericField;
}
