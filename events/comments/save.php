<?php

namespace fpcm\modules\nkorg\example\events\comments;

final class save extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        $this->data['name'] = $this->data['name'].' '. microtime(true).' '.$this->getModuleKey().' '. get_class($this);
        return (new \fpcm\module\eventResult())->setData($this->data);
    }

}
