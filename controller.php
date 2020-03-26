<?php

// Author: Ryan Hewitt - http://www.mesuva.com.au
namespace Concrete\Package\MsvCodeDisplay;
use Concrete\Core\Package\Package;
use Concrete\Core\Block\BlockType\BlockType;

class Controller extends Package {

    protected $pkgHandle = 'msv_code_display';
    protected $appVersionRequired = '5.7.5.2';
    protected $pkgVersion = '1.0.3';

    public function getPackageDescription() {
        return t("Display syntax highlighted code");
    }

    public function getPackageName() {
        return t("Code Display");
    }

    public function install() {
        $pkg = parent::install();
        BlockType::installBlockType('msv_code_display', $pkg);
    }
}

?>
