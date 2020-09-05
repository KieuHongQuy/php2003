<?php
	class cart{
		private $connect;
		public function __construct(){
			$this->connect = new database();
        }
        public function getProduct($id){
            $this->connect->query('select gia from product where id="'.$id.'"');
            return $this->connect->fetch_array();
        }
		public function getTongtien() {
            $tong = 0;
            foreach($_SESSION['cart'] as $val){
                $data = $this->getProduct($val['id']);
                $tong += ($val['sl'] * $data['gia']);
            }
			return $tong;
        }
        public function ChuoiNgauNhien($sokytu){
            $chuoi="ABCDEFGHIJKLMNOPQRSTUVWXYZWabcdefghijklmnopqrstuvwxyzw0123456789";
            for ($i=0; $i < $sokytu; $i++){
                $vitri = mt_rand( 0 ,strlen($chuoi) );
                $giatri= $giatri . substr($chuoi,$vitri,1 );
            }
            return $giatri;
        }
        public function getMahoadon() {
            $kt = true;
            while($kt == true){
                $mahoadon = strtoupper ($this->ChuoiNgauNhien(6));
                $this->connect->query('select * from order where id="'.$mahoadon.'"');
                if($this->connect->fetch_array()){
                    $kt = true;
                }else{
                    $kt = false;
                }
            }
            return $mahoadon;
        }
        public function getThanhtoan() {
            if(!empty($_POST)){
                include_once "./phpMailer/class.phpmailer.php";	
                $mahoadon = $this->getMahoadon();
                $data = [
                    "hoten" => addslashes($_POST['hoten']),
                    "dienthoai" => addslashes($_POST['dienthoai']),
                    "diachi" => addslashes($_POST['diachi']),
                    "email" => addslashes($_POST['email']),
                    "ghichu" => addslashes($_POST['ghichu']),
                    "tinhtrang" => 0,
                    "ma" => $mahoadon,
                ];
                $id = $this->connect->insertData('orders',$data);
                foreach($_SESSION['cart'] as $value){
                    $cart = [
                        "id_order" => $id,
                        "id_product" => $value['id'],
                        "soluong" => $value['sl'],
                    ];
                    var_dump($cart['id_order']);
                    $this->connect->insertData('cart',$cart);
                }
                $body = 'Đơn hàng của bạn đã được gửi thành công';
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port =   465;
                $mail->Username   = 'kieuhongquy.itpk@gmail.com';
                $mail->Password   = '0918680255Quy';  
                $mail->SetFrom('kieuhongquy.itpk@gmail.com','quy');
                $mail->AddAddress('abc@gmail.com','nguoinhan');
                $mail->Subject    = "[Đơn hàng]";
                $mail->IsHTML(true);
                $mail->CharSet = "utf-8";
                
                $mail->Body = $body;
                if($mail->Send()) {
                    return true;
                }else{
                    return false;
                }
            }
		}
	}
?>