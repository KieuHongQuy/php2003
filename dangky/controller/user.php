<?php 
	include './model/user.php';
	class userMain{
        public function logout(){
            unset($_SESSION['user']);
            header('Location: http://'._config_url.'');
        }
		public function login(){
            $user = new user();
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            $login = $user->loginUser($username,$password);
            if($login == true || $_SESSION['user']){
                header('Location: http://'._config_url.'');
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
        public function password(){
            $user = new user();
            if(isset($_SESSION['user'])){
                $id = addslashes($_POST['id']); 
                $data['password']=MD5(addslashes($_POST['password']));
                $where = "id = ".$id;
                $data = $user->updatelogin('user',$data,$where);
                if($data == true){
                    return[
                        'data' => 'Password đổi thành công',
                        'view' => 'password'
                    ];
                }else{
                    return[
                        'view' => 'password'
                    ];
                }
            }else{
                header('Location: http://'._config_url.'');
            }
        }
        public function quenmatkhau(){
            $user = new user();
            if(!empty($_POST)){
                $username = addslashes($_POST['username']);
                $data = $user->loginCheck($username);
                if($data){
                    mt_srand(8);
                    $datapw['password'] = MD5(mt_rand());
                    $where = "id = ".$data['id'];
                    $kt = $user->updatelogin('user',$datapw,$where);
                    if($kt == true){
                        $kt = $user->getMK($datapw,$data['email']);
                        if($kt == true){
                            return[
                                'data' => 'Mật khẩu mới được gửi vào mail của bạn',
                                'view' => 'quenmatkhau'
                            ];
                        }else{
                            return[
                                'data' => 'Gửi mail thất bại',
                                'view' => 'quenmatkhau'
                            ];
                        }
                    }else{
                        return[
                            'data' => 'Tài khoản không tồn tại',
                            'view' => 'quenmatkhau'
                        ];
                    }
                }else{
                    return[
                        'data' => 'Tài khoản không tồn tại',
                        'view' => 'quenmatkhau'
                    ];
                }
            }else{
                return[
                    'view' => 'quenmatkhau'
                ];
            }
        }
        public function dangky(){
            $user = new user();
            if($_SESSION['user']){
                header('Location: http://'._config_url.'');
            }else{
                if(!empty($_POST)){
                    $data['username']=addslashes($_POST['username']);
                    $data['quyen']=0;
                    $kt = $user->loginCheck($data['username']);
                    if($kt){
                        return[
                            'data' => 'Tài khoản đã tồn tại',
                            'view' => 'dangky'
                        ];
                    }else{
                        $data['password']=MD5(addslashes($_POST['password']));
                        $user->insertlogin('user',$data);
                        header('Location: http://'._config_url.'/dang-nhap');
                    }
                }else{
                    return[
                        'view' => 'dangky'
                    ];
                }
            }
        }
        public function update(){
            $user = new user();
            if(isset($_SESSION['user'])){
                $id = addslashes($_POST['id']); 
                $data['hoten']=addslashes($_POST['hoten']);
                $data['email']=addslashes($_POST['email']);
                $data['dienthoai']=addslashes($_POST['dienthoai']);
                $data['gioitinh']=addslashes($_POST['gioitinh']);
                $where = "id = ".$id;
                $user->updatelogin('user',$data,$where);
                header('Location: http://'._config_url.'/thong-tin');
            }else{
                header('Location: http://'._config_url.'/dang-nhap');
            }
		}
        public function thongtin(){
            $user = new user();
            if(isset($_SESSION['user'])){
                $data = $user->loginCheck($_SESSION['user']['username']);
                return [
                    'data' => $data,
                    'view' => 'thongtin',
                ];  
            }else{
                header('Location: http://'._config_url.'/dang-nhap');
            }
            
		}
	}

?>