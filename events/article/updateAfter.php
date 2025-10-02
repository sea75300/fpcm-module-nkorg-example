<?php

namespace fpcm\modules\nkorg\example\events\article;

final class updateAfter extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        return (new \fpcm\module\eventResult())->setData(true);
    }

}
