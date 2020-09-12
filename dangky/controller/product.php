<?php 
	include './model/product.php';
	class productController{
		public $phantrang = 8;
		public function getProduct(){
			$model = new product();
			$idlist = (isset($_GET['idlist']))? addslashes($_GET['idlist']) : "";
			$idcat = (isset($_GET['idcat']))? addslashes($_GET['idcat']) : "";
			$page = explode("=",$_GET['page']);
			$pageURL = explode("&page=", $_SERVER["REQUEST_URI"]);
			$data = $model ->getAllProduct($idlist,$idcat,$page['1'],$this->phantrang); 
			return [
				'data' => $data,
				'page' => $page['1'],
				'pageURL' => $pageURL[0],
				'view' => 'product'
			];
		}
		public function getSub(){
			$model = new product();
			$ten = (isset($_GET['ten']))? addslashes($_GET['ten']) : "";
			$page = explode("=",$_GET['page']);
			$pageURL = explode("&page=", $_SERVER["REQUEST_URI"]);
			$data = $model ->getProductSub($ten,$page['1'],$this->phantrang); 
			return [
				'data' => $data,
				'page' => $page['1'],
				'pageURL' => $pageURL[0],
				'view' => 'product'
 			];
		}
		public function getDetail(){
			$model = new product();
			$ten = (isset($_GET['ten']))? addslashes($_GET['ten']) : "";
			$id = (isset($_GET['id']))? addslashes($_GET['id']) : "";
			$data = $model ->getProductDetail($ten,$id); 
			if(!isset($data['product'])){
				header('Location: http://'._config_url.'');
			}else{
				return [
					'data' => $data,
					'view' => 'productDetail'
				];
			}
		}
		public function getSearch(){
			$model = new product();
			$name = (isset($_GET['name']))? addslashes($_GET['name']) : "";
			$page = explode("=",$_GET['page']);
			$pageURL = explode("&page=", $_SERVER["REQUEST_URI"]);
			$data = $model -> getProductSearch($name,$page['1'],$this->phantrang); 
			return [
				'data' => $data,
				'page' => $page['1'],
				'pageURL' => $pageURL[0],
				'view' => 'search'
 			];
		}
	}

?>