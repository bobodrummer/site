<?php
class IGN_Siteblocks_IndexController extends Mage_Core_Controller_Front_Action {

public function indexAction()
{
$this->loadLayout();
$this->renderLayout();
}
}