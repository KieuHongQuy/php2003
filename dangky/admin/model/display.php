<?php
	class display{
		private $connect;
		public function __construct(){
			$this->connect = new database();
		}
		public function displayProduct($table,$data,$where){
            var_dump($table,$data,$where);
			$this->connect->updateData($table,$data,$where);
			return true;
		}
        
	}
?>