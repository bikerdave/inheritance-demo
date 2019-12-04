<?php

namespace Concrete\Package\ExamplePackage;

use Concrete\Core\Package\Package;

class Controller extends Package
{
    /** @var string $appVersionRequired */
    protected $appVersionRequired = '8.5.0';

    /** @var string $pkgHandle */
    protected $pkgHandle = 'example_package';

    /** @var string $pkgVersion */
    protected $pkgVersion = '1.0.0';

    /**
     * @return string
     */
    public function getPackageName()
    {
        return t('Example Package');
    }

    /**
     * @return string
     */
    public function getPackageDescription()
    {
        return t('');
    }

    /**
     * @return void
     */
    public function install()
    {
        parent::install();
    }

    /**
     * @return void
     */
    public function upgrade()
    {
        parent::upgrade();
    }
}
