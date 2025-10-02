<?php

namespace fpcm\modules\nkorg\example\events;

final class dashboardContainersLoad extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        $this->data[] = '\fpcm\modules\nkorg\example\models\container';
        
        $this->logEvent(__METHOD__);
        $this->logEvent($this->data);
        
        return (new \fpcm\module\eventResult())->setData($this->data);
    }

}
