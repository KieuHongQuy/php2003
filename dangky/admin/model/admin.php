<?php
	class admin{
		private $connect;
		public function __construct(){
			$this->connect = new database();
		}
		public function loginCheck($username){
			$this->connect->query('select * from user where username = "'.$username.'" and quyen=1');
			return $this->connect->fetch_array();
		}
		public function getPage($sum){
			$n = 10;
			if($_GET['page'] < 1){
				$page = 1;
			}else{
				$page = $_GET['page'];
			}
			if($page > 0){
				$a = ($page -1) * $n;
			}else{
				$a = 0;
			}
			$tong = ceil($sum/$n);
			return [
				"page"=>$a,
				"sum"=>$tong
			];
		}
		public function indexCart(){
			if($_GET['keyword'] != ' '){
				$where = "where ma like '%".$_GET['keyword']."%'" ;
			}
			$this->connect->query('select * from orders '.$where.' order by id desc');
			$allProduct = $this->connect->result_array();
			$soluong = $this->getPage(count($allProduct));
			$limit = 'limit '.$soluong['page'].',10';
			$this->connect->query('select * from orders '.$where.'  order by id desc '.$limit.'');
			return [
					'product' => $this->connect->result_array(),
					'page' => $soluong['sum']
			];
			
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