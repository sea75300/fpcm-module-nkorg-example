<?php

namespace fpcm\modules\nkorg\example\events\view;

final class extendToolbar extends \fpcm\modules\nkorg\example\events\eventBase  {

    final public function extendToolbarSystemdashboard()
    {
        $this->data[] = (new \fpcm\view\helper\linkButton('dashboardExampleTestButton'))
                            ->setText('Google')
                            ->setUrl('https://google.de')
                            ->setTarget('_blank')
                            ->setIcon('external-link-alt');

        return (new \fpcm\module\eventResult())->setData($this->data);
    }

    final public function extendToolbarSystemprofile()
    {
        $this->data[] = (new \fpcm\view\helper\linkButton('profiledExampleTestButton'))
                            ->setText('Nobody-Knows.org')
                            ->setUrl('https://nobody-knows.org/download/fanpress-cm/')
                            ->setTarget('_blank')
                            ->setIcon('book-reader')
                            ->setIconOnly(true);

        return (new \fpcm\module\eventResult())->setData($this->data);
    }

}
