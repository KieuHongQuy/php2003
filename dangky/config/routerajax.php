<?php
    $controller = $_GET['controller']? $_GET['controller'] : "index";
    include_once '../controller/cartajax.php';
    switch($controller){
        case 'index':
            $controllerObject = new indexMain();
			$action = 'indexHome';
            break;
        case 'cartajax':
            $controllerObject = new cartMain();
            $action = 'cartDetail';
            break;
        case 'newCart':
            $controllerObject = new cartMain();
            $action = 'newCart';
            break;
        case 'connect':
            $controllerObject = new cartMain();
            $action = 'cnProduct';
            break;
        case 'delete':
            $controllerObject = new cartMain();
            $action = 'cartDelete';
            break;
        default:
            header('Location: http://'._config_url.'');
            break;
    }
    $data = $controllerObject -> { $action }();
    if($action == 'cnProduct'){
        echo $data;
    }
    if($action == 'newCart'){
        echo json_encode($data);
    }
?>
