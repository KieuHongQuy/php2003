<?php 
include_once "./model/cart.php";
    class cartMain{
        public function cartView(){
            $cart = new cart();
            $tong = $cart->getTongtien();
            return[
                'tong' => $tong,
                'view' => 'cart'
            ];
        }
        public function cartOrder(){
            $cart = new cart();
            $tong = $cart->getTongtien();
            if(!empty($_POST)){
                $data = $cart->getThanhtoan();
            }
            return[
                'data' => $data,
                'tong' => $tong,
                'view' => 'thanhtoan'
            ];
        }
    }
?>