<?php

namespace fpcm\modules\nkorg\example\events;

abstract class eventBase extends \fpcm\module\event {

    protected $path;

    public function run() : \fpcm\module\eventResult
    {
        $this->logEvent(__METHOD__);
        $this->logEvent($this->data);
        return (new \fpcm\module\eventResult())->setData($this->data);
    }

    final public function init()
    {
        $this->path = \fpcm\classes\dirs::getDataDirPath(\fpcm\classes\dirs::DATA_LOGS, 'examplelog.txt');
        return true;
    }

    final protected function logEvent($data)
    {
        return file_put_contents(
            $this->path,
            date(DATE_RFC2822, time()).'<====>'.(is_array($data) || is_object($data) ? print_r($data, true) : $data).'<===================>',
            FILE_APPEND
        );
    }

    final protected function cleanupLog()
    {
        return file_put_contents($this->path, '') !== false ? true : false;
    }

    final protected function getData($search = null)
    {
        $data = file_get_contents($this->path);
        $data = explode('<===================>', $data);

        $items = [];
        foreach ($data as $line) {

            if (!trim($line)) {
                continue;
            }

            $line = explode('<====>', $line);

            if (!trim($line[0])) {
                continue;
            }

            $text = isset($line[1]) ? $line[1] : '-';

            if ( $search !== null && !str_contains($text, $search) ) {
                continue;
            }

            $items[] = [
                'time' => $line[0],
                'text' => $text
            ];
        }

        return $items;
    }

    final protected function getSize()
    {
        return filesize($this->path);
    }

}