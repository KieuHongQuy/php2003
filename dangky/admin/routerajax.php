<?php
    $controller = $_GET['controller']? $_GET['controller'] : "index";
    include_once '../controller/'.$controller.'.php';
    switch($controller){
        case 'display':
            $controllerObject = new displayMain();
            $action = 'hienthi';
            break;
        case 'productajax':
            $controllerObject = new productMain();
            $action = $_GET['action'];
            break;
        default:
            header('Location: http://'._config_url.'');
            break;
    }
    $data = $controllerObject -> { $action }();
?>