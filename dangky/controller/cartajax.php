<?php 
    include '../model/cartajax.php';
    class cartMain{
        public function cartDetail(){
            $cart = new cart();
            $id = addslashes($_GET['id']);
            $sl = addslashes($_GET['sl']);
            $cart -> addCart($id,$sl);
        }
        public function newCart(){
            $cart = new cart();
            $id = addslashes($_GET['id']);
            $sl = addslashes($_GET['sl']);
            $cart -> addCart($id,$sl);
            $data = $cart -> newProduct($id);
            $tongtien = $cart -> getTongtien();
            return[
                'tong'=> number_format($data['gia'] * $sl,0,',','.'),
                'tongtien' => number_format($tongtien,0,',','.'),
            ];
        }
        public function cnProduct(){
            $cart = new cart();
            $id = addslashes($_GET['id']);
            $vt = addslashes($_GET['vt']);
            $data = $cart->ndProduct($id,$vt);
            return $data[$vt];
        }
        public function cartDelete(){
            $cart = new cart();
            $id = addslashes($_GET['id']);
            $cart -> deleteCart($id);
        }
    }
?>