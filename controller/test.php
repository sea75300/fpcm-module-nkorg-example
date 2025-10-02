<?php

namespace fpcm\modules\nkorg\example\controller;

final class test extends \fpcm\controller\abstracts\module\controller {

    protected function getViewPath(): string
    {
        return 'test';
    }

    public function hasAccess()
    {
        return true;
    }

    public function process()
    {
        $obj = new \fpcm\modules\nkorg\example\models\demodataObj();
        
        $this->view->addNoticeMessage('MODULE_NKORGEXAMPLE_DESCRIPTION');
        $this->view->addButton(  (new \fpcm\view\helper\copyButton('exampleCopy'))->setCopyParams($obj, 'demodataObj', $this->getModuleKey()) );
        
        return true;
    }

}