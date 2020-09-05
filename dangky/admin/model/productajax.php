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
		public function itemId($id,$idcat){
			$this->connect->query('select * from product_item where id_list= '.$id.' and id_cat ='.$idcat);
			return $this->connect->result_array();
		}
	}
?>