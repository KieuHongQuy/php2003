<?php 
include_once "./model/user.php";
    class userMain{
        public function alluser(){
            $user = new user();
            $data = $user->allds();
            return[
                'data' => $data,
                'view' => 'user'
            ];
        }
        public function delete(){
            $user = new user();
            $id = addslashes($_GET['id']);   
            $data = $user->deleteuser('user',"id=".$id);
            header('Location:http://'._config_url.'/index.php?controller=user&action=alluser');
        }
    }
?>