<?php 
	$controller = isset($_GET['controller']) ? addslashes($_GET['controller']) : 'index';
	switch($controller){
		case 'index':
			include_once './controller/'.$controller.'.php';
			$controllerObject = new indexMain();
			$action = 'indexHome';
			break;
		case 'all':
			$controller = 'index';
			include_once './controller/'.$controller.'.php';
			$controllerObject = new indexMain();
			$action = 'connect';
			break;
		case 'tim-kiem':
			$controller = 'product';
			include_once './controller/'.$controller.'.php';
			$controllerObject = new productController();
			$action = 'getSearch';
			break;
		case 'cart':
			if(count($_SESSION['cart']) > 0){
				include_once './controller/'.$controller.'.php';
				$controllerObject = new cartMain();
				$action = 'cartView';
			}else{
				header('Location: http://'._config_url.'');
			}
			break;
		case 'thanh-toan':
			if(count($_SESSION['cart']) > 0){
				include_once './controller/cart.php';
				$controllerObject = new cartMain();
				$action = 'cartOrder';
			}else{
				header('Location: http://'._config_url.'');
			}
			break;
		case 'product':
			include_once './controller/'.$controller.'.php';
			$controllerObject = new productController();
			if($_GET['id'] !="" && $_GET['ten'] !=""){
				$action = 'getDetail';
			}else{
				if($_GET['ten'] !=""){
					$action = 'getSub';
				}else{
					if($_GET['iditem'] !="" || $_GET['idcat'] !="" || $_GET['idlist'] !=""){
						$action = 'getProduct';
					}else{
						$action = 'getProduct';
					}
				}
			}
			break;
		default:
			header('Location: http://'._config_url.'');
			break;
	}
	$data = $controllerObject->{ $action }();
?>
