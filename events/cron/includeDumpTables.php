<?php

namespace fpcm\modules\nkorg\example\events\cron;

final class includeDumpTables extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        $this->data[] = \fpcm\classes\loader::getObject('\fpcm\classes\database')->getTablePrefixed('module_nkorgexample_tab1');
        $this->data[] = \fpcm\classes\loader::getObject('\fpcm\classes\database')->getTablePrefixed('module_nkorgexample_tab2');
        
        $this->logEvent(__METHOD__);
        $this->logEvent($this->data);

        return (new \fpcm\module\eventResult())->setData($this->data);
    }

}
