<?php
	class admin{
		private $connect;
		public function __construct(){
			$this->connect = new database();
		}
		public function loginCheck($username){
			$this->connect->query('select * from user where username = "'.$username.'"');
			return $this->connect->fetch_array();
		}
		public function indexCart(){
			$this->connect->query('select * from orders');
			return $this->connect->result_array();
			
		}
        public function loginUser($username,$password){
            if($username){
				$data = $this->loginCheck($username);
				if($data){				
					if($data['password'] == MD5($password)){
						$_SESSION['username'] = $data['username'];
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
	}
?>