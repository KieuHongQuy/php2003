<?php
	class user{
		private $connect;
		public function __construct(){
			$this->connect = new database();
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
		public function allds(){
            $where = "where quyen=0 ";
            if($_GET['keyword'] != ''){
				$where.= " and username like '%".$_GET['keyword']."%' or hoten like '%".$_GET['keyword']."%'" ;
			}
            $this->connect->query('select * from user '.$where.' order by id desc');
            $allProduct = $this->connect->result_array();
            $soluong = $this->getPage(count($allProduct));
            $limit = 'limit '.$soluong['page'].',10';
            $this->connect->query('select * from user '.$where.'  order by id desc '.$limit.'');
			return [
                'product' => $this->connect->result_array(),
                'page' => $soluong['sum']
            ];
        }
        public function deleteuser($table,$id){
            $this->connect->deleteData($table,$id);
			return true;
		}
	}
?>