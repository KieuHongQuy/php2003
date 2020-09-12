<?php 
	class user{
		private $connect;
		public function __construct(){
			$this->connect = new database();
		}
		public function loginCheck($username){
			$this->connect->query('select * from user where username = "'.$username.'" and quyen=0');
			return $this->connect->fetch_array();
		}
		public function insertlogin($table,$data){
            $this->connect->insertData($table,$data);
		} 
		public function updatelogin($table,$data,$where){
            $this->connect->updateData($table,$data,$where);
			if($this->connect->updateData($table,$data,$where)){
				return true;
			}else{
				return false;
			}
		}  
		public function loginUser($username,$password){
            if($username){
				$data = $this->loginCheck($username);
				if($data){				
					if($data['password'] == MD5($password)){
						$_SESSION['user']['username'] = $data['username'];
						$_SESSION['user']['email'] = $data['email'];
						$_SESSION['user']['hoten'] = $data['hoten'];
						$_SESSION['user']['dienthoai'] = $data['dienthoai'];
						return true;
					}else{
						return false;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		public function getMK($password,$email) {
            if(!empty($_POST)){
                include "./phpMailer/class.phpmailer.php";	
                $body = 'Mật khẩu mới của bạn là: '.$password;
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port =   465;
                $mail->Username   = 'kieuhongquy.itpk@gmail.com';
                $mail->Password   = '0918680255Quy';  
                $mail->SetFrom('kieuhongquy.itpk@gmail.com','quy');
                $mail->AddAddress('kieuhongquy@gmail.com','nguoinhan');
                $mail->Subject    = "[Mật khẩu mới của bạn]";
                $mail->IsHTML(true);
                $mail->CharSet = "utf-8";
                $mail->Body = $body;
                if($mail->Send()) {
                    return true;
                }else{
                    return false;
                }
            }
		}
	}
?>