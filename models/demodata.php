<?php

namespace fpcm\modules\nkorg\example\models;

final class demodata
extends \fpcm\model\abstracts\tablelist
implements \fpcm\model\interfaces\gsearchIndex {

    /**
     * Get count query string
     * @return \fpcm\model\dbal\selectParams
     * @since 5.1-dev
     */
    public function getCountQuery(): \fpcm\model\dbal\selectParams
    {
        return $this->getSearchQueryObj()->setItem('\'nkorg_example\' as model, count(id) as count');
    }

    /**
     * Get query string
     * @return \fpcm\model\dbal\selectParams
     * @since 5.1-dev
     */
    public function getSearchQuery(): \fpcm\model\dbal\selectParams
    {
        return $this->getSearchQueryObj()->setItem('\'nkorg_example\' as model, id as oid, text')->setFetchAll(true);
    }

    /**
     * Return link to element link
     * @return string
     * @since 5.1-dev
     */
    public function getElementLink(mixed $id): string
    {
        return './index.php?module=system/logs&rg=6';
    }

    /**
     * Return link icon
     * @return \fpcm\view\helper\icon
     * @since 5.1-dev
     */
    public function getElementIcon(): \fpcm\view\helper\icon
    {
        return new \fpcm\view\helper\icon('bullhorn');
    }

    /**
     * Prepare result text
     * @param string $text
     * @return string
     */
    public function prepareText(string $text): string
    {
        return $text;        
    }
    
    /**
     * Returns selectParams object instance
     * @return \fpcm\model\dbal\selectParams
     * @since 5.1-dev
     */
    private function getSearchQueryObj(): \fpcm\model\dbal\selectParams
    {
        return (new \fpcm\model\dbal\selectParams('module_nkorgexample_tab1'))->setWhere('text LIKE :term or id LIKE :term');
    }

}
