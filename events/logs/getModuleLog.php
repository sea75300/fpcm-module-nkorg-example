<?php

namespace fpcm\modules\nkorg\example\events\logs;

final class getModuleLog extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        $this->logEvent($this->params);

        $return = new \fpcm\model\logs\logfileResult(
            $this->getData($this->params[0]),
            null,
            $this->getSize(), 
            function () {
                return [
                    (new \fpcm\components\dataView\column('time', 'LOGS_LIST_TIME', 'fpcm-ui-padding-md-left'))->setSize(2),
                    (new \fpcm\components\dataView\column('text', 'LOGS_LIST_TEXT'))->setSize(10),
                ];
            },
            function($item) {
                return new \fpcm\components\dataView\row([
                    new \fpcm\components\dataView\rowCol('time', $item['time'], 'fpcm-ui-dataview-align-self-start'),
                    new \fpcm\components\dataView\rowCol('text', new \fpcm\view\helper\escape($item['text']), 'pre-box font-monospace'),
                ]);
            });
            
            
        return (new \fpcm\module\eventResult())->setData($return);
    }

}
