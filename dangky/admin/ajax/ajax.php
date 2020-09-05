<?php
	session_start();
    $config_url=$_SERVER["SERVER_NAME"].':8080/dangky/admin';
    @define("_config_url",$config_url);
    include_once "../../config/classdatabase.php";
    include_once "../routerajax.php";
    if($data['view']){
        include_once "../view/".$data['view'].".php";
    }
?>
