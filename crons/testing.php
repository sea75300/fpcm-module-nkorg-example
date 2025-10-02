<?php

namespace fpcm\modules\nkorg\example\crons;

final class testing extends \fpcm\model\abstracts\cron {

    public function run() {
        fpcmLogSystem(__METHOD__.' is running');
        return true;
    }

}