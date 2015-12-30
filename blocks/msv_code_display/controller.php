<?php

namespace Concrete\Package\MsvCodeDisplay\Block\MsvCodeDisplay;

use \Concrete\Core\Block\BlockController;
use \Symfony\Component\HttpFoundation\Session\Session;
use Core;
use Page;
use Loader;

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

        // re-write any internal page urls to pretty urls
        if ($this->description) {
            $navhelper = Core::make("helper/navigation");
            $match = "|(" . preg_quote(BASE_URL) . ")/index.php\?cID=([0-9]+)|";
            $description = preg_replace_callback($match, function ($matches) use ($navhelper) {
                $cID = $matches[2];
                if ($cID > 0) {
                    $c = Page::getByID($cID, 'ACTIVE');
                    return $navhelper->getLinkToCollection($c);
                }
            }, $this->description);

            $this->set('description', $description);
        }
    }

    public function add()
    {
        $this->edit();

        $session = new Session();
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


    public function registerViewAssets()
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

        $session = new Session();
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
        $args['description'] = trim($args['description']);

        parent::save($args);
    }

}
