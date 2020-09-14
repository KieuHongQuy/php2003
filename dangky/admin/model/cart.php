<?php
	class cart{
		private $connect;
		public function __construct(){
			$this->connect = new database();
		}
		public function detailOrder($id){
			$this->connect->query('select * from orders where id = "'.$id.'"');
			return $this->connect->fetch_array();
		}
        public function detailCart($id){
			$this->connect->query('select * from cart where id_order = "'.$id.'"');
			return $this->connect->result_array();
        }
        public function updateOrder($table,$data,$where){
            $this->connect->updateData($table,$data,$where);
			return true;
		} 
		public function deleteOrder($table,$id){
            $this->connect->deleteData($table,$id);
			return true;
        } 
	}
?>