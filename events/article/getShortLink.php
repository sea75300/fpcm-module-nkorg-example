<?php

namespace fpcm\modules\nkorg\example\events\article;

final class getShortLink extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        $this->data['url'] = 'This short link was remove by events '. get_class($this).' in '.$this->getModuleKey();
        return (new \fpcm\module\eventResult())->setData($this->data);
    }

}
