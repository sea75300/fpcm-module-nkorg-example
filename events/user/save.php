<?php

namespace fpcm\modules\nkorg\example\events\user;

final class save extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        $this->data['usrinfo'] = $this->data['usrinfo'].' '. microtime(true).' '.$this->getModuleKey().' '. get_class($this);
        return (new \fpcm\module\eventResult())->setData($this->data);
    }

}
