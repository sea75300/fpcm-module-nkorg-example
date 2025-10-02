<?php

namespace fpcm\modules\nkorg\example\events;

final class ajaxRefresh extends \fpcm\module\event
{

    /**
     * 
     * @var \fpcm\model\theme\notifications
     */
    protected $data;


    public function run() : \fpcm\module\eventResult 
    {
        $notification = new \fpcm\model\theme\notificationItem( ( new \fpcm\view\helper\icon('bell') )->setText(__METHOD__) );
        $this->data->addNotification($notification);        

        return (new \fpcm\module\eventResult())->setData($this->data);
    }

    public function init()
    {
        return true;
    }

}
