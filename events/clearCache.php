<?php

namespace fpcm\modules\nkorg\example\events;

final class clearCache extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        $this->logEvent(__METHOD__);
        $this->logEvent($this->data);
        return (new \fpcm\module\eventResult())->setData($this->data);
    }
}
