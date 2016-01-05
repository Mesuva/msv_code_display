<?php

// Author: Ryan Hewitt - http://www.mesuva.com.au
namespace Concrete\Package\MsvCodeDisplay;
use Package;
use BlockType;

class Controller extends Package {

    protected $pkgHandle = 'msv_code_display';
    protected $appVersionRequired = '5.7.5.2';
    protected $pkgVersion = '0.9.2';

    public function getPackageDescription() {
        return t("Display syntax highlighted code");
    }

    public function getPackageName() {
        return t("Code Display");
    }

    public function install() {
        $pkg = parent::install();
        BlockType::installBlockTypeFromPackage('msv_code_display', $pkg);
    }
}

?>