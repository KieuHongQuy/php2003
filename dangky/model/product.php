<?php 
	class product{
		private $connect;
		public function __construct(){
			$this->connect = new database();
		}
		public function getPage($page,$n,$sum){
			if($page > 0){
				$a = ($page -1) * $n;
			}else{
				$a = 0;
			}
			$tong = ceil($sum/$n);
			return [
				"page"=>$a,
				"sum"=>$tong
			];
		}
		public function getAllProduct($tenlist,$tencat,$page,$n) {
			if($tenlist != ''){
				$this->connect->query('select * from product_list where tenkhongdau ="'.$tenlist.'"');
				$list = $this->connect->fetch_array();
				$where = ($list['id']) ? "where id_list=".$list['id'] : "";
				if($tencat != '' && $list){
					$this->connect->query('select * from product_cat where id_list='.$list['id'].' and tenkhongdau="'.$tencat.'"');
					$cat = $this->connect->fetch_array();
					$where.=  ($cat) ?' and id_cat='.$cat['id'] : ($where="");
				}
				$this->connect->query('select * from product '.$where.'');
				$allProduct = $this->connect->result_array();
				$soluong = $this->getPage($page,$n,count($allProduct));
				$limit = 'limit '.$soluong['page'].','.$n;
				$this->connect->query('select * from product '.$where.' '.$limit.'');
				$product = $this->connect->result_array();
				return [
					'product' => $product,
					'list' => $list,
					'cat' => $cat,
					'page' => $soluong['sum'],
				];
			}else{
				$this->connect->query('select * from product '.$where.'');
				$allProduct = $this->connect->result_array();
				$soluong = $this->getPage($page,$n,count($allProduct));
				$limit = 'limit '.$soluong['page'].','.$n;
				$this->connect->query('select * from product '.$limit.'');
				$product = $this->connect->result_array();
				return [
					'product' => $product,
					'page' => $soluong['sum'],
				];
			}
			
		}
		public function getProductDetail($ten,$id) {
			$this->connect->query('select * from product where id="'.$id.'" and tenkhongdau="'.$ten.'"');
			$product = $this->connect->fetch_array();
			$this->connect->query('select * from product_img where id_product='.$id.'');
			$imgList = $this->connect->result_array();
			if($product['id_list']){
				$this->connect->query('select * from product_list where id ="'.$product['id_list'].'"');
				$list = $this->connect->fetch_array();
			}
			if($product['id_cat']){
				$this->connect->query('select * from product_cat where id ="'.$product['id_cat'].'"');
				$cat = $this->connect->fetch_array();
			}
			return [
				'imgList' => $imgList,
				'product' => $product,
				'list' => $list,
				'cat' => $cat,
			];
		}
		public function getProductSub($ten,$page,$n) {
			if($ten != ""){
				if($ten == 'san-pham-ban-chay'){
					$name = 'Sản phẩm bán chạy';
					$where = 'where banchay = 1';
				}else{
					if($ten == 'san-pham-moi'){
						$name = 'Sản phẩm mới';
						$where = 'where sanphammoi = 1';
					}else{
						if($ten == 'khuyen-mai'){
							$name = 'Sản phẩm khuyến mãi';
							$where = ' where khuyenmai = 1';
						}else{
							$where = "";
						}
					}
				}
			}else{
				$where = "";
			}
			$this->connect->query('select * from product '.$where.'');
			$allProduct = $this->connect->result_array();
			$soluong = $this->getPage($page,$n,count($allProduct));
			$limit = 'limit '.$soluong['page'].','.$n;
			$this->connect->query('select * from product '.$where.' '.$limit.'');
			$product = $this->connect->result_array();
			return [
				'product' => $product,
				'name' => $name,
				'page' => $soluong['sum'],
			];
		}
		public function getProductSearch($ten,$page,$n) {
			$where = ($ten != "") ? 'where ten like "%'.$ten.'%"':''; 
			$this->connect->query('select * from product '.$where.'');
			$allProduct = $this->connect->result_array();
			$soluong = $this->getPage($page,$n,count($allProduct));
			$limit = 'limit '.$soluong['page'].','.$n;
			$this->connect->query('select * from product '.$where.' '.$limit.'');
			$product = $this->connect->result_array();
			return [
				'product' => $product,
				'page' => $soluong['sum'],
			];
		}
	}
?>