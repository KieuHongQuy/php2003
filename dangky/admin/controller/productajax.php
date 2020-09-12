<?php 
include_once "../model/productajax.php";
    class productMain{
        public function listajax(){
            $product = new productajax();
            $id = addslashes($_GET['id']);
            $data = $product->catId($id);
            return[
                'data' => $data,
                'view' => 'productajax'
            ];
            
        }
        public function xoaimg(){
            $product = new productajax();
            $id = addslashes($_GET['id']);
            $table = addslashes($_GET['table']);
            $product->xoaIamge($table, "id=".$id);
        }
    }
?>