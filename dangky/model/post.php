<?php
    class post{
        private $conn;
        public function __construct(){
            $this->conn = new database();
        }
        public function getPost($post){
            $this->conn->query('select * from post where type="'.$post.'"');
            return $this->conn->fetch_array();
        }
        public function getProduct($id){
            $this->conn->query('select * from product where id="'.$id.'"');
            return $this->conn->fetch_array();
        }
        public function getSlider(){
            $this->conn->query('select * from post where type="slider"');
            return $this->conn->result_array();
        }
        public function getMenu(){
            $this->conn->query('select list.tenkhongdau as tkdlist,cat.tenkhongdau as tkdcat,item.tenkhongdau as tkditem,list.id as id_list,list.ten as tenlist , cat.ten as tencat ,cat.id as id_cat ,item.id as id_item,item.ten as tenitem from product_list as list left join product_cat as cat on list.id = cat.id_list left join product_item as item on list.id = item.id_list');
            return $this->conn->result_array();
        }
    }
?>