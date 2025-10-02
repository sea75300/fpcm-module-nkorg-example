<?php

namespace fpcm\modules\nkorg\example\events\modules;

class configure extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        return (new \fpcm\module\eventResult())->setData([
            'var1' => mt_rand(0, 10),
            'var2' => array_fill(0, 10, mt_rand(11, 20)),
            'var3' => __METHOD__
        ]);
    }

}
