<?php

namespace fpcm\modules\nkorg\example\events\logs;

final class addToList extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        $this->data[] = (new \fpcm\view\helper\tabItem('logs-module-example'))->setText('Example module')->setUrl(\fpcm\classes\tools::getFullControllerLink('ajax/logs/reload', [
            'log' => 'nkorg-example',
            'key' => $this->getModuleKey()
        ]))->setDataViewId('logs');

        $this->logEvent($this->data);

        return (new \fpcm\module\eventResult())->setData($this->data);
    }

}
