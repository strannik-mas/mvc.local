<?php
class IndexController implements IController {
	public function indexAction() {
		$fc = FrontController::getInstance();
		//���������
		//$params = $fc->getParams();
		$view = new View();
		$view->name = "Guest";
		//$view->name = $params['name'];
		$result = $view->render('../views/index.php');
		
		$fc->setBody($result);
	}
}
