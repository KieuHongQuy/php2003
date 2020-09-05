<?php 
include_once "./model/cart.php";
    class cartMain{
        public function edit(){
            $cart = new cart();
            $id = addslashes($_GET['id']);
            $detail = $cart->detailOrder($id);
            $data = $cart->detailCart($detail['id']);
                return[
                    'detail' => $detail,
                    'data' => $data,
                    'view' => 'cart_edit'
                ];
            
        }
        public function delete(){
            $cart = new cart();
            $id = addslashes($_GET['id']);
            $data = $cart->deleteOrder('cart',"id_order=".$id);
            $data = $cart->deleteOrder('orders',"id=".$id);
            header('Location:http://'._config_url.'');
        }
        public function update(){
            $cart = new cart();
            $id = addslashes($_POST['id']);
            $dataupdate = [
                "hoten" => addslashes($_POST['hoten']),
                "dienthoai" => addslashes($_POST['dienthoai']),
                "diachi" => addslashes($_POST['diachi']),
                "email" => addslashes($_POST['email']),
                "ghichu" => addslashes($_POST['ghichu']),
                "tinhtrang" => addslashes($_POST['tinhtrang'])
            ];
            $detail = $cart->detailOrder($id);
            $data = $cart->detailCart($detail['id']);
            $where = "id = ".$id;
            $update = $cart->updateOrder("orders",$dataupdate,$where);
            if($update){
                return[
                    'connect' => "Cập nhật thành công",
                    'detail' => $detail,
                    'data' => $data,
                    'view' => 'cart_edit'
                ];
            }else{
                return[
                        'detail' => $detail,
                        'data' => $data,
                        'view' => 'cart_edit'
                ];
            }
        }
    }
?>