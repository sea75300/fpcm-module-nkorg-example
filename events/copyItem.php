<?php

namespace fpcm\modules\nkorg\example\events;

final class copyItem extends \fpcm\module\event
{

    /**
     * 
     * @var \fpcm\model\theme\notifications
     */
    protected $data;


    public function run() : \fpcm\module\eventResult 
    {
        fpcmLogSystem(sprintf("%s\n\n%s", __METHOD__, var_export($this->data, true)));

        return (new \fpcm\module\eventResult())->setData([
            'result' => false,
            'message' => new \fpcm\view\message('Copy event execution was successful, even tho this message is displayed!', \fpcm\view\message::TYPE_NEUTRAL),
            'destination' => '',
            'callback' => ''
        ]);
    }

    public function init()
    {
        return true;
    }

}
