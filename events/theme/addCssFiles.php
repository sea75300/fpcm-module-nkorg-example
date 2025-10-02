<?php

namespace fpcm\modules\nkorg\example\events\theme;

final class addCssFiles extends \fpcm\modules\nkorg\example\events\eventBase  {

    public function run() : \fpcm\module\eventResult 
    {
        $this->data[] = \fpcm\classes\dirs::getDataUrl(
            \fpcm\classes\dirs::DATA_MODULES,
            str_replace('\\', '/', $this->getModuleKey()).'/templates/excample.css'
        );
        
        $this->logEvent(__METHOD__);
        $this->logEvent($this->data);
        
        return (new \fpcm\module\eventResult())->setData($this->data);
    }

}
