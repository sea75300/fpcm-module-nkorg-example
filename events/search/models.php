<?php

namespace fpcm\modules\nkorg\example\events\search;

final class models extends \fpcm\module\event
{
    public function run() : \fpcm\module\eventResult 
    {
        $this->data['nkorg_example'] = '\\fpcm\\modules\\nkorg\\example\\models\\demodata';        
        return (new \fpcm\module\eventResult())->setData($this->data);
    }

    public function init()
    {
        return true;
    }

}
