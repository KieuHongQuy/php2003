<?php
	class index{
		private $connect;
		public function __construct(){
			$this->connect = new database();
		}
		public function getKhuyenmai() {
			$this->connect->query('select * from product where khuyenmai=1');
			return $this->connect->result_array();
		}
		public function getAll() {
			$this->connect->query('select list.tenkhongdau as tenkhong,list.img as imglist,list.id as id_list,list.ten as tenlist , product.id as id, product.ten ,product.gia ,product.img,product.tenkhongdau  from product_list as list inner join product on list.id = product.id_list where list.noibat = 1');
			return $this->connect->result_array();
		}
		public function getPost($post) {
			$this->connect->query('select * from post where type="'.$post.'"');
			return $this->connect->fetch_array();
		}
		public function getPosts($post) {
			$this->connect->query('select * from post where type="'.$post.'"');
			return $this->connect->result_array();
		}
	}
?>