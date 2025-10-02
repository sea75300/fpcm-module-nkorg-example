<?php

namespace fpcm\modules\nkorg\example\events\revision;

final class create extends \fpcm\modules\nkorg\example\events\eventBase {

    /**
     *
     * @var \fpcm\model\articles\revision
     */
    protected $data;

    public function run() : \fpcm\module\eventResult 
    {
        $this->data['content'] .= '<br><br>revisioned on '.microtime(true);
        
        $this->logEvent(__METHOD__);
        $this->logEvent($this->data);

        return (new \fpcm\module\eventResult())->setData($this->data);
    }

}