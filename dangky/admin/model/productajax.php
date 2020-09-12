<?php
	class productajax{
		private $connect;
		public function __construct(){
			$this->connect = new database();
		}
		public function catId($id){
			$this->connect->query('select * from product_cat where id_list='.$id);
			return $this->connect->result_array();
		}
		public function xoaIamge($table,$id){
			$this->connect->deleteData($table,$id);
		}
	}
?>