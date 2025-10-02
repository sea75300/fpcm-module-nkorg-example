<?php

namespace fpcm\modules\nkorg\example\models;

final class demodataObj
extends
    \fpcm\model\abstracts\dataset
implements
    \fpcm\model\interfaces\isCopyable {

    public function getId()
    {
        return 1;
    }
    
    /**
     * Creates copy of current article
     * @return int
     * @since 5.2.2-dev
     */
    public function copy(): int
    {
        return 1;
    }

    /**
     * Creates copy of current article
     * @return int
     * @since 5.2.2-dev
     */
    protected function getEventModule() : string
    {
        return '';
    }

}
