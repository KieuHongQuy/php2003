<?php
    class post{
        private $conn;
        public function __construct(){
            $this->conn = new database();
        }
        public function getPost($post){
            $this->conn->query('select * from post where type="'.$post.'"');
            return $this->conn->fetch_array();
        }
        public function getProduct($id){
            $this->conn->query('select * from product where id="'.$id.'"');
            return $this->conn->fetch_array();
        }
        public function getSlider(){
            $this->conn->query('select * from post where type="slider"');
            return $this->conn->result_array();
        }
        public function getMenu(){
            $this->conn->query('select list.tenkhongdau as tkdlist,cat.tenkhongdau as tkdcat,item.tenkhongdau as tkditem,list.id as id_list,list.ten as tenlist , cat.ten as tencat ,cat.id as id_cat ,item.id as id_item,item.ten as tenitem from product_list as list left join product_cat as cat on list.id = cat.id_list left join product_item as item on list.id = item.id_list');
            return $this->conn->result_array();
        }
        public function updatePost($table,$data,$where){
            $this->conn->updateData($table,$data,$where);
            return true;
        }
        public function insertImage($table,$data){
            
            $this->conn->insertData($table,$data);
            
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