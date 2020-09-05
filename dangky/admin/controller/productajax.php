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
        public function catajax(){
            $product = new productajax();
            $id = addslashes($_GET['id']);
            $id_cat = addslashes($_GET['id_cat']);
            $datacat = $product->itemId($id,$id_cat);
            return[
                'datacat' => $datacat,
                'view' => 'productajax'
            ];
            
        }
    }
?>