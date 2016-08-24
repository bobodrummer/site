<?php
class IGN_Siteblocks_Adminhtml_SiteblocksController extends Mage_Adminhtml_Controller_Action{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('siteblocks/adminhtml_siteblocks'));
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $id = $this->getRequest()->getParam('block_id');
        Mage::register('siteblocks_block', Mage::getModel('siteblocks/block')->load($id));
        $blockObject = (array) Mage::getSingleton('adminhtml/session')->getBlockObject(true);
        if (count($blockObject)){
            Mage::registry('siteblocks_block')->setData($blockObject);
        }
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('siteblocks/adminhtml_siteblocks_edit'));
        $this->renderLayout();
    }
    public function saveAction()
    {
        try{
            $id = $this->getRequest()->getParam('block_id');
            $block = Mage::getModel('siteblocks/block')->load($id);
            $blockObject = (array) Mage::getSingleton('adminhtml/session')->getBlockObject(true);
            if (count($blockObject)){
                Mage::registry('siteblocks_block')->setData($blockObject);
            }
             /*$block->setTitle($this->getRequest()->getParam('title'))
            ->setContent($this->getRequest()->getParam('content'))
            ->setBlockStatus($this->getRequest()->getParam('block_status'))
            ->save();*/
             $block->setData($this->getRequest()->getParam())->save();

             if(!$block->getId()){
                   Mage::getSingleton('adminhtml/session')->addError('Can not save');
             }
    } catch (Exception $e){
        Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            Mage::getSingleton('adminhtml/session')->setBlockObject($block->getData());
        }
        Mage::getSingleton('adminhtml/session')->addSuccess('Block was saved successfully!');

        $this->_redirect('*/*/'.$this->getRequest()->getParam('back','index'),array('block_id'=>$block->getId()));
    }

}
