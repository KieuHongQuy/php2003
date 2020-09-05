<?php 
include_once "./model/admin.php";
    class adminMain{
        public function login(){
            $admin = new admin();
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            $login = $admin->loginUser($username,$password);
            if($login == true || $_SESSION['username']){
                header('Location: http://'._config_url.'/index.php?controller=admin&action=index');
            }else{
                if(isset($_POST['submit'])){
                    return[
                        'data' => 'Tài khoản hoặc password không đúng',
                        'view' => 'login'
                    ];
                }else{
                    return[
                        'view' => 'login'
                    ];
                }
            }
        }
        public function logout(){
            unset($_SESSION['username']);
            header('Location: http://'._config_url.'/index.php?controller=admin&action=login');
            return[
                'view' => 'login'
            ];
        }
        public function index(){
            $admin = new admin();
            $data = $admin->indexCart();
            return[
                'data' => $data,
                'view' => 'index'
            ];
        }
    }
?>