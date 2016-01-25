<?php

namespace Concrete\Package\MsvCodeDisplay\Block\MsvCodeDisplay;

use Concrete\Core\Block\BlockController;
use Symfony\Component\HttpFoundation\Session\Session;
use Concrete\Core\Editor\LinkAbstractor;
use Core;

class Controller extends BlockController
{
    protected $btTable = 'btMsvCodeDisplay';
    protected $btInterfaceWidth = "650";
    protected $btWrapperClass = 'ccm-ui';
    protected $btInterfaceHeight = "500";
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btDefaultSet = 'basic';

    public $content = "";

    public function getBlockTypeDescription()
    {
        return t("For displaying code snippets on a page");
    }

    public function getBlockTypeName()
    {
        return t("Code Display");
    }

    public function view()
    {
        $this->set('unique_identifier', Core::make('helper/validation/identifier')->getString(18));

        if ($this->description) {
            $this->set('description',  LinkAbstractor::translateFrom($this->description));
        }
    }

    public function add()
    {
        $this->edit();

        $session  =Core::make('app')->make('session');
        $this->set('lastFontSize', $session->get('msv_code_display.lastFontSize'));
        $this->set('lastLanguage', $session->get('msv_code_display.lastLanguage'));
        $this->set('lastTheme', $session->get('msv_code_display.lastTheme'));
        $this->set('lastShowLineNumbers', $session->get('msv_code_display.lastShowLineNumbers'));
        $this->set('lastlineWrapping', $session->get('msv_code_display.lastlineWrapping'));

    }

    public function edit()
    {
        $this->requireAsset('ace');
    }

    public function registerViewAssets($outputContent = '')
    {
        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('ace');
    }

    public function getSearchableContent()
    {
        return $this->title . ' ' . $this->description;
    }

    public function save($args)
    {

        $session = Core::make('app')->make('session');
        $session->set('msv_code_display.lastFontSize', $this->post('fontSize'));
        $session->set('msv_code_display.lastLanguage', $this->post('language'));
        $session->set('msv_code_display.lastTheme', $this->post('theme'));
        $session->set('msv_code_display.lastShowLineNumbers', $this->post('showLineNumbers'));
        $session->set('msv_code_display.lastlineWrapping', $this->post('lineWrapping'));

        $args['showLineNumbers'] = $args['showLineNumbers'] ? 1 : 0;
        $args['showInvisibles'] = $args['showInvisibles'] ? 1 : 0;
        $args['lineWrapping'] = $args['lineWrapping'] ? 1 : 0;
        $args['content'] = isset($args['content']) ? base64_decode($args['content']) : '';
        $args['title'] = trim($args['title']);
        $args['fontSize'] = max($args['fontSize'], 2);
        $args['maximumLines'] = max($args['maximumLines'], 0);
        $args['description'] = LinkAbstractor::translateTo($args['description']);

        parent::save($args);
    }
}
