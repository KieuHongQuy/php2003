<?php 
	include './model/indexMain.php';
	class indexMain{
		public function indexHome(){
			$model = new index();
			$data = $model ->getKhuyenmai('san-pham-khuyen-mai'); 
			$datamain = $model ->getAll(); 
			$thongtin = $model ->getPost('thong-tin'); 
			$notice = $model ->getPosts('notice');
			$mxh = $model ->getPost('mxh');
			$bgtintuc =$model ->getPost('bg-tintuc');
			$bgcart = $model ->getPost('bg-cart');
			return [
				'data' => $data,
				'datamain' => $datamain,
				'thongtin' => $thongtin,
				'notice' => $notice,
				'mxh' => $mxh,
				'bgtintuc' => $bgtintuc,
				'bgcart' => $bgcart,
				'view' => 'index',
				];
		}
		public function connect(){
			$model = new index();
			$ten = addslashes($_GET['ten']);
			$data = $model ->getPost($ten); 
			return [
				'data' => $data,
				'view' => 'connect',
				];
		}
		public function error(){
			return 'xin chao error';
		}
	}

?>