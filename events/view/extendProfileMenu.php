<?php

namespace fpcm\modules\nkorg\example\events\view;

final class extendProfileMenu extends \fpcm\modules\nkorg\example\events\eventBase  {

    public function run() : \fpcm\module\eventResult 
    {
        $this->data[] = (new \fpcm\view\helper\linkButton('example'))->setUrl('https://google.de')->setText('Google')->setTarget('_blank');
        return (new \fpcm\module\eventResult())->setData($this->data);
    }

}
