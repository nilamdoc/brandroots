<?php
namespace app\controllers;
use lithium\storage\Session;
use app\extensions\action\Functions;
use app\models\Tools;
use app\models\Users;

class MobileController extends \lithium\action\Controller {
	protected function _init(){
		parent::_init();
	}
	public function index(){
		$tools = Tools::find('all');
		return $this->render(array('json' => array("success"=>"Yes",'tools'=>$tools)));		
	}

}
?>