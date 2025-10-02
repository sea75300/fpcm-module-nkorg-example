<?php

namespace fpcm\modules\nkorg\example\events\view;

final class extendFields extends \fpcm\modules\nkorg\example\events\eventBase  {

    final public function extendFormSmileysadd()
    {
        $form = $this->data->getData();
        $form->fields[] = (new \fpcm\view\helper\textInput('smiley[example]'))->setText('Example Test')->setValue('ABC')->setIcon('check');
        $this->data->setData($form);

        return (new \fpcm\module\eventResult())->setData($this->data);

    }

}
