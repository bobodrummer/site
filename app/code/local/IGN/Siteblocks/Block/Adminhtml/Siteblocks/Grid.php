<?php

/**
 * Adminhtml cms blocks grid
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class IGN_Siteblocks_Block_Adminhtml_Siteblocks_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('cmsBlockGrid');
        $this->setDefaultSort('block_identifier');
        $this->setDefaultDir('ASC');
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('siteblocks/block')->getCollection();
        /* @var $collection Mage_Cms_Model_Mysql4_Block_Collection */
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $this->addColumn('title', array(
            'header'    => Mage::helper('siteblocks')->__('Title'),
            'align'     => 'left',
            'index'     => 'title',
        ));

        $this->addColumn('block_status', array(
            'header'    => Mage::helper('siteblocks')->__('Status'),
            'align'     => 'left',
            'index'     => 'block_status',
            'type'      => 'options',
            'options'   => array(
                0 => Mage::helper('siteblocks')->__('Disabled'),
                1 => Mage::helper('siteblocks')->__('Enabled')
    ),
        ));


        $this->addColumn('created_at', array(
            'header'    => Mage::helper('siteblocks')->__('Date'),
            'index'     => 'created_at',
            'type'      => 'date',

        ));


        return parent::_prepareColumns();
    }


    /**
     * Row click url
     *
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('block_id' => $row->getId()));
    }

}
