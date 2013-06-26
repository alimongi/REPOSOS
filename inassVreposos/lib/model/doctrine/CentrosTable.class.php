<?php

/**
 * CentrosTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CentrosTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object CentrosTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Centros');
    }


public function getListPager($page = 1, $limit = 15 )
    {
        $strSQL = Doctrine_Query::create()
                ->select()
                ->from('centros a')
                ->andWhere('a.deleted_at IS NULL');
        $this->pagerLayout = new sfDoctrinePagerLayout(
                new Doctrine_Pager($strSQL, $page, $limit),
                new Doctrine_Pager_Range_Sliding(array('chunk' => 6)),
                'centros/index?pagina={%page_number}');
        $this->pagerLayout->setTemplate('{link_to}{%page}{/link_to}');
	$this->pagerLayout->setSelectedTemplate('<span>{%page}</span>');
	$this->pagerLayout->setSeparatorTemplate('&nbsp;');
	$this->pager = $this->pagerLayout->getPager();

        return $this->pager->execute(array());
    }

    public function getDisplay($options = array(), $return = false) {
        if ($return)
            return $this->pagerLayout->display($options, $return);
    }

    public function getTotalResult() {
        return $this->pager->getNumResults();
    }

    public function getTotalPages() {
        return $this->pager->getLastPage();
    }

    public function haveToPaginate() {
        return $this->pager->haveToPaginate();
    }




}