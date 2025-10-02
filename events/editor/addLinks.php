<?php

namespace fpcm\modules\nkorg\example\events\editor;

final class addLinks extends \fpcm\modules\nkorg\example\events\eventBase {

    public function run() : \fpcm\module\eventResult 
    {
        return (new \fpcm\module\eventResult())->setData([
            [
                'label' => '',
                'value' => ''
            ],
            [
                'label' => 'Google',
                'value' => 'https://google.de'
            ],
            [
                'label' => 'Yahoo',
                'value' => 'https://yahoo.de'
            ],
            [
                'label' => 'Bing',
                'value' => 'https://bing.de'
            ]
        ]);
    }

}
