<?php
	class product{
		private $connect;
		public function __construct(){
			$this->connect = new database();
		}
		public function getPage($sum){
			$n = 10;
			if($_GET['page'] < 1){
				$page = 1;
			}else{
				$page = $_GET['page'];
			}
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
		public function dsList(){
			$this->connect->query('select * from product_list order by id desc');
			return [
					'product' => $this->connect->result_array(),
			];
		}
		public function listProduct(){
			if($_GET['keyword'] != ''){
				$where = "where ten like '%".$_GET['keyword']."%'" ;
			}
			$this->connect->query('select * from product_list '.$where.' order by id desc');
			$allProduct = $this->connect->result_array();
			$soluong = $this->getPage(count($allProduct));
			$limit = 'limit '.$soluong['page'].',10';
			$this->connect->query('select * from product_list '.$where.'  order by id desc '.$limit.'');
			return [
					'product' => $this->connect->result_array(),
					'page' => $soluong['sum']
			];
		}
		public function editProductList($table,$where){
			$this->connect->query('select * from '.$table.' where 1=1 and '.$where.'');
			return $this->connect->fetch_array();
		}  
		public function catId($id){
			$this->connect->query('select * from product_cat where id_list='.$id);
			return $this->connect->result_array();
		}
		public function catProduct(){
			if($_GET['keyword'] != ''){
				$where = "where ten like '%".$_GET['keyword']."%'" ;
			}
			$this->connect->query('select * from product_cat '.$where.' order by id desc');
			$allProduct = $this->connect->result_array();
			$soluong = $this->getPage(count($allProduct));
			$limit = 'limit '.$soluong['page'].',10';
			$this->connect->query('select * from product_cat '.$where.'  order by id desc '.$limit.'');
			return [
					'product' => $this->connect->result_array(),
					'page' => $soluong['sum']
			];
		}
        public function allProduct(){
			$where = "where 1=1";
			if($_GET['keyword'] != ''){
				$where.= " and ten like '%".$_GET['keyword']."%' or masp like '%".$_GET['keyword']."%'" ;
			}
			if($_GET['id_list'] != ''){
				$where.= " and id_list=".$_GET['id_list'] ;
			}
			if($_GET['id_cat'] != ''){
				$where.= " and id_cat=".$_GET['id_cat'] ;
			}
			$this->connect->query('select * from product '.$where.' order by id desc');
			$allProduct = $this->connect->result_array();
			$soluong = $this->getPage(count($allProduct));
			$limit = 'limit '.$soluong['page'].',10';
			$this->connect->query('select * from product '.$where.'  order by id desc '.$limit.'');
			return [
					'product' => $this->connect->result_array(),
					'page' => $soluong['sum']
			];
		}
		public function deleteProduct($table,$id){
            $this->connect->deleteData($table,$id);
			return true;
		}
		public function editProduct($table,$where){
            $this->connect->query('select * from '.$table.' where 1=1 and '.$where.'');
			return $this->connect->fetch_array();
		}  
		public function editImage($where){
			$this->connect->query('select * from product_img where 1=1 and '.$where.'');
			return $this->connect->result_array();
		}  
		public function updateProduct($table,$data,$where){
            $this->connect->updateData($table,$data,$where);
			if($this->connect->updateData($table,$data,$where)){
				return true;
			}else{
				return false;
			}
		}  
		public function insertImage($table,$data){
            $this->connect->insertData($table,$data);
		}  
		public function inserProduct($table,$data){
			return $this->connect->insertData($table,$data);
		}
		public function stripUnicode($str){
			if(!$str) return false;
			 $unicode = array(
			   'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
			   'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			   'd'=>'đ',
			   'D'=>'Đ',
			   'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
				   'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
				   'i'=>'í|ì|ỉ|ĩ|ị',
				   'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
			   'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
				   'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			   'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
				   'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			   'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			   'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
			 );
			 foreach($unicode as $khongdau=>$codau) {
				   $arr=explode("|",$codau);
				   $str = str_replace($arr,$khongdau,$str);
			 }
		  return $str;
		  }
		public function changeTitle($str)
		{
			$str = $this->stripUnicode($str);
			$str = mb_convert_case($str,MB_CASE_LOWER,'utf-8');
			$str = trim($str);
			$str=preg_replace('/[^a-zA-Z0-9\ ]/','',$str);
			$str = str_replace("  "," ",$str);
			$str = str_replace(" ","-",$str);
			return $str;
		}
		public function images_name($tenhinh)
		{
			$rand=rand(10,9999);
			$ten_anh=explode(".",$tenhinh);
			$result = $this->changeTitle($ten_anh[0])."-".$rand;
			return $result;
		}
		function upload_photos($file, $extension, $folder, $newname=''){
			if(isset($file) && !$file['error']){
		
				$ext = end(explode('.',$file['name']));
				$name = basename($file['name'], '.'.$ext);
				//alert('Chỉ hỗ trợ upload file dạng '.$ext);
				if(strpos($extension, $ext)===false){
					alert('Chỉ hỗ trợ upload file dạng '.$ext.'-////-'.$extension);
					return false; // không hỗ trợ
				}
		
				if($newname=='' && file_exists($folder.$file['name']))
					for($i=0; $i<100; $i++){
						if(!file_exists($folder.$name.$i.'.'.$ext)){
							$file['name'] = $name.$i.'.'.$ext;
							break;
						}
					}
				else{
					$file['name'] = $newname.'.'.$ext;
				}
		
				if (!copy($file["tmp_name"], $folder.$file['name']))	{
					if ( !move_uploaded_file($file["tmp_name"], $folder.$file['name']))	{
						return false;
					}
				}
				return $file['name'];
			}
			return false;
		}
		public function upload_image($file, $extension, $folder, $newname=''){
			if(isset($_FILES[$file]) && !$_FILES[$file]['error']){
		
				$ext = end(explode('.',$_FILES[$file]['name']));
				$name = basename($_FILES[$file]['name'], '.'.$ext);
		
				if(strpos($extension, $ext)===false){
					alert('Chỉ hỗ trợ upload file dạng '.$extension);
					return false; // không hỗ trợ
				}
		
				if($newname=='' && file_exists($folder.$_FILES[$file]['name']))
					for($i=0; $i<100; $i++){
						if(!file_exists($folder.$name.$i.'.'.$ext)){
							$_FILES[$file]['name'] = $name.$i.'.'.$ext;
							break;
						}
					}
				else{
					$_FILES[$file]['name'] = $newname.'.'.$ext;
				}
		
				if (!copy($_FILES[$file]["tmp_name"], $folder.$_FILES[$file]['name']))	{
					if ( !move_uploaded_file($_FILES[$file]["tmp_name"], $folder.$_FILES[$file]['name']))	{
						return false;
					}
				}
				return $_FILES[$file]['name'];
			}
			return false;
		}
	}
?>