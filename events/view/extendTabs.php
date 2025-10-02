<?php

namespace fpcm\modules\nkorg\example\events\view;

final class extendTabs extends \fpcm\modules\nkorg\example\events\eventBase  {

    final public function run() : \fpcm\module\eventResult 
    {        
        $this->data->tabs[] = (new \fpcm\view\helper\tabItem(md5(self::class)))
            ->setText('Extend tabs item')
            ->seturl(\fpcm\classes\tools::getFullControllerLink('ajax/logs/reload', [
                'log' => 'nkorg-example',
                'key' => $this->getModuleKey()
            ]))
            ->setDataViewId('logs');

        return (new \fpcm\module\eventResult)->setData($this->data);
    }

}
