<?php
	class cart{
		private $connect;
		public function __construct(){
			$this->connect = new database();
		}
		public function addCart($id , $sl) {
			if($_SESSION['cart'][$id]){
				$_SESSION['cart'][$id]['sl']= $sl;
			}else{
				$_SESSION['cart'][$id]['id']= $id;
				$_SESSION['cart'][$id]['sl']= $sl;
			}
		}
		public function deleteCart($id) {
			if($_SESSION['cart'][$id]){
				unset($_SESSION['cart'][$id]);
			}
		}
		public function newProduct($id){
			$this->connect->query('select * from product where  id ='.$id.'');
			return $this->connect->fetch_array();
		}
		public function getProduct($id){
            $this->connect->query('select gia from product where id="'.$id.'"');
            return $this->connect->fetch_array();
        }
		public function getTongtien() {
            $tong = 0;
            foreach($_SESSION['cart'] as $val){
                $data = $this->getProduct($val['id']);
                $tong += ($val['sl'] * $data['gia']);
            }
			return $tong;
        }
		public function ndProduct($id,$vt){
			$this->connect->query('select '.$vt.' from product where  id ='.$id.'');
			return $this->connect->fetch_array();
		}
	}
?>