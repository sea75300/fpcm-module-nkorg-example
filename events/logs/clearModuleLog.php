<?php

namespace fpcm\modules\nkorg\example\events\logs;

final class clearModuleLog extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        return (new \fpcm\module\eventResult())->setData($this->cleanupLog());
    }

}
