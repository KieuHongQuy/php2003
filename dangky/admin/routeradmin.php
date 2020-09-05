<?php 
    $controller = isset($_GET['controller']) ? addslashes($_GET['controller']) : 'admin';
    $action = isset($_GET['action']) ? addslashes($_GET['action']) : 'login';
    include "./controller/".$controller.".php";
    switch($controller){
        case 'admin':
			$controllerObject = new adminMain();
            break;
        case 'cart':
            $controllerObject = new cartMain();
            break;
        case 'post':
            $controllerObject = new postMain();
            break;
        case 'product':
            $controllerObject = new productMain();
            break;
        default:
			header('Location: http://'._config_url.'');
			break;
    }
        $data = $controllerObject->{ $action }();
?>
<!-- <pre>
<?php var_dump($data['id_cat']);?>
</pre> -->