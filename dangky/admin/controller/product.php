<?php 
include_once "./model/product.php";
    class productMain{
        public function alllist(){
            $product = new product();
            $data = $product->listProduct();
            return[
                'data' => $data,
                'view' => 'product_list'
            ];
        }
        public function editlist(){
            $product = new product();
            $id = addslashes($_GET['id']);
            $data = $product->editProductList('product_list',"id=".$id);
            return[
                'data' => $data,
                'view' => 'list_detail'
            ];
        }
        public function editCat(){
            $product = new product();
            $id = addslashes($_GET['id']);
            $data = $product->editProductList('product_cat',"id=".$id);
            $list = $product->listProduct();
            return[
                'data' => $data,
                'list' => $list,
                'view' => 'cat_detail'
            ];
        }
        public function editItem(){
            $product = new product();
            $id = addslashes($_GET['id']);
            $data = $product->editProductList('product_item',"id=".$id);
            $list = $product->listProduct();
            if($data['id_list']){
                $id_cat = $product->catId($data['id_list']);
            }
            return[
                'data' => $data,
                'list' => $list,
                'id_cat' => $id_cat,
                'view' => 'item_detail'
            ];
        }
        public function insertlist(){
            $product = new product();
            if(!empty($_POST)){
                if($_FILES['img']['name']){
                    $name = $product->images_name($_FILES['img']['name']);
                    $img = $product->upload_image('img','jpg|png|gif|JPG|jpeg|JPEG','../img/',$name);
                    $dataupdate["img"]= $img;
                }
                $dataupdate['ten']=addslashes($_POST['ten']);
                $dataupdate["tenkhongdau"] = $product->changeTitle(addslashes($_POST['ten']));
                $update = $product->inserProduct("product_list",$dataupdate);
                header('Location:http://'._config_url.'/index.php?controller=product&action=editlist&id='.$update);
            }else{
                return[
                    'view' => 'list_insert'
                ];
            }
        }
        public function insertCat(){
            $product = new product();
            if(!empty($_POST)){
                $dataupdate['id_list']=addslashes($_POST['id_list']);
                $dataupdate['ten']=addslashes($_POST['ten']);
                $dataupdate["tenkhongdau"] = $product->changeTitle(addslashes($_POST['ten']));
                $update = $product->inserProduct("product_cat",$dataupdate);
                header('Location:http://'._config_url.'/index.php?controller=product&action=editCat&id='.$update);
            }else{
                $list = $product->listProduct();
                return[
                    'list' => $list,
                    'view' => 'cat_insert'
                ];
            }
        }
        public function insertItem(){
            $product = new product();
            if(!empty($_POST)){
                $dataupdate['id_list']=addslashes($_POST['id_list']);
                $dataupdate['id_cat']=addslashes($_POST['id_cat']);
                $dataupdate['ten']=addslashes($_POST['ten']);
                $dataupdate["tenkhongdau"] = $product->changeTitle(addslashes($_POST['ten']));
                $update = $product->inserProduct("product_item",$dataupdate);
                header('Location:http://'._config_url.'/index.php?controller=product&action=editItem&id='.$update);
            }else{
                $list = $product->listProduct();
                return[
                    'list' => $list,
                    'view' => 'item_insert'
                ];
            }
        }
        public function insert(){
            $product = new product();
            if(!empty($_POST)){
            $dataupdate = [];
            if($_FILES['img']['name']){
                $name = $product->images_name($_FILES['img']['name']);
                $img = $product->upload_image('img','jpg|png|gif|JPG|jpeg|JPEG','../img/',$name);
                $dataupdate["img"]= $img;
            }
            $dataupdate['ten']=addslashes($_POST['ten']);
            $dataupdate["id_list"] = addslashes($_POST['id_list']);
            $dataupdate["id_cat"] = addslashes($_POST['id_cat']);
            $dataupdate["id_item"] = addslashes($_POST['id_item']);
            $dataupdate["gia"] = addslashes($_POST['gia']);
            $dataupdate["mota"] = addslashes($_POST['mota']);
            $dataupdate["noidung"] = addslashes($_POST['noidung']);
            $dataupdate["nhanxet"] = addslashes($_POST['nhanxet']);
            $dataupdate["qva"] = addslashes($_POST['qva']);
            $dataupdate["giaohang"] = addslashes($_POST['giaohang']);
            $dataupdate["tenkhongdau"] = $product->changeTitle(addslashes($_POST['ten']));
            $id = $product->inserProduct("product",$dataupdate);
            if($id){
                for($i=0;$i<count($_FILES['files']['name']);$i++){
	            	if($_FILES['files']['name'][$i]!=''){
                        $file['name'] = $_FILES['files']['name'][$i];
						$file['type'] = $_FILES['files']['type'][$i];
						$file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
						$file['error'] = $_FILES['files']['error'][$i];
						$file['size'] = $_FILES['files']['size'][$i];
					    $file_name =  $product->images_name($_FILES['files']['name'][$i]);
						$photo =  $product->upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', '../img/',$file_name);
                        $data1['stt'] = (int)$_POST['stthinh'][$i];
                        $data1['img'] = $photo;
						$data1['id_product'] = $id;
						$product->insertImage('product_img',$data1);
					}
                }
                header('Location:http://'._config_url.'/index.php?controller=product&action=edit&id='.$id); 
            }
            }else{
                $list = $product->listProduct();
                return[
                    'list' => $list,
                    'view' => 'product_insert'
                ];
            }
        }
        public function updatelist(){
            $product = new product();
            $id = addslashes($_POST['id']);      
            if($_FILES['img']['name']){
                $name = $product->images_name($_FILES['img']['name']);
                $img = $product->upload_image('img','jpg|png|gif|JPG|jpeg|JPEG','../img/',$name);
                $dataupdate["img"]= $img;
            }
            $dataupdate['ten']=addslashes($_POST['ten']);
            $dataupdate["tenkhongdau"] = $product->changeTitle(addslashes($_POST['ten']));
            $where = "id = ".$id;
            $update = $product->updateProduct("product_list",$dataupdate,$where);
            $data = $product->editProduct('product_list',"id=".$id);
            return[
                'data' => $data,
                'view' => 'list_detail'
            ];
        }
        public function updateCat(){
            $product = new product();
            $id = addslashes($_POST['id']); 
            $dataupdate['ten']=addslashes($_POST['ten']);
            $dataupdate["tenkhongdau"] = $product->changeTitle(addslashes($_POST['ten']));
            $dataupdate["id_list"] = addslashes($_POST['id_list']);
            $where = "id = ".$id;
            $update = $product->updateProduct("product_cat",$dataupdate,$where);
            $data = $product->editProduct('product_cat',"id=".$id);
            $list = $product->listProduct();
            return[
                'data' => $data,
                'list' => $list,
                'view' => 'cat_detail'
            ];
        }
        public function updateItem(){
            $product = new product();
            $id = addslashes($_POST['id']); 
            $dataupdate['ten']=addslashes($_POST['ten']);
            $dataupdate["tenkhongdau"] = $product->changeTitle(addslashes($_POST['ten']));
            $dataupdate["id_list"] = addslashes($_POST['id_list']);
            $dataupdate["id_cat"] = addslashes($_POST['id_cat']);
            $where = "id = ".$id;
            $update = $product->updateProduct("product_cat",$dataupdate,$where);
            $data = $product->editProduct('product_cat',"id=".$id);
            $list = $product->listProduct();
            if($data['id_list']){
                $id_cat = $product->catId($data['id_list']);
            }
            return[
                'data' => $data,
                'list' => $list,
                'id_cat' => $id_cat,
                'view' => 'item_detail'
            ];
        }
        public function allcat(){
            $product = new product();
            $data = $product->catProduct();
            return[
                'data' => $data,
                'view' => 'product_cat'
            ];
        }
        public function allitem(){
            $product = new product();
            $data = $product->itemProduct();
            return[
                'data' => $data,
                'view' => 'product_item'
            ];
        }
        public function allproduct(){
            $product = new product();
            $data = $product->allProduct();
            return[
                    'data' => $data,
                    'view' => 'product'
            ];
            
        }
        public function edit(){
            $product = new product();
            $id = addslashes($_GET['id']);
            $data = $product->editProduct('product',"id=".$id);
            if($data['id_list']){
                $id_cat = $product->catId($data['id_list']);
            }
            if($data['id_list'] && $data['id_cat']){
                $id_item = $product->itemId($data['id_list'],$data['id_cat']);
            }
            $ds_photo = $product->editImage("id_product=".$_GET['id']);
            $list = $product->listProduct();
            if($data){
                return[
                    'data' => $data,
                    'id_cat' => $id_cat,
                    'id_item' => $id_item,
                    'ds_photo' => $ds_photo,
                    'list' => $list,
                    'view' => 'product_edit'
                ];
            }else{
                header('Location:http://'._config_url.'');
            }
        }
        public function update(){
            $product = new product();
            $dataupdate = [];
            $id = addslashes($_POST['id']);
            if($_FILES['img']['name']){
                $name = $product->images_name($_FILES['img']['name']);
                $img = $product->upload_image('img','jpg|png|gif|JPG|jpeg|JPEG','../img/',$name);
                $dataupdate["img"]= $img;
            }
            $dataupdate['ten']=addslashes($_POST['ten']);
            $dataupdate["id_list"] = addslashes($_POST['id_list']);
            $dataupdate["id_cat"] = addslashes($_POST['id_cat']);
            $dataupdate["id_item"] = addslashes($_POST['id_item']);
            $dataupdate["gia"] = addslashes($_POST['gia']);
            $dataupdate["mota"] = addslashes($_POST['mota']);
            $dataupdate["noidung"] = addslashes($_POST['noidung']);
            $dataupdate["nhanxet"] = addslashes($_POST['nhanxet']);
            $dataupdate["qva"] = addslashes($_POST['qva']);
            $dataupdate["giaohang"] = addslashes($_POST['giaohang']);
            $dataupdate["tenkhongdau"] = $product->changeTitle(addslashes($_POST['ten']));
            $where = "id = ".$id;
            $update = $product->updateProduct("product",$dataupdate,$where);
            if($update == true){
                for($i=0;$i<count($_FILES['files']['name']);$i++){
	            	if($_FILES['files']['name'][$i]!=''){
                        $file['name'] = $_FILES['files']['name'][$i];
						$file['type'] = $_FILES['files']['type'][$i];
						$file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
						$file['error'] = $_FILES['files']['error'][$i];
						$file['size'] = $_FILES['files']['size'][$i];
					    $file_name =  $product->images_name($_FILES['files']['name'][$i]);
						$photo =  $product->upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', '../img/',$file_name);
                        $data1['stt'] = (int)$_POST['stthinh'][$i];
                        $data1['img'] = $photo;
						$data1['id_product'] = $id;
						$product->insertImage('product_img',$data1);
					}
				}
            }
            $data = $product->editProduct('product',"id=".$id);
            if($update){
                return[
                    'data' => $data,
                    'view' => 'product_edit'
                ];
            }else{
                return[
                    'data' => $data,
                    'view' => 'product_edit'
                ];
            }
        }
        public function deleteList(){
            $product = new product();
            $id = addslashes($_GET['id']);
            $data = $product->deleteProduct('product_list',"id=".$id);
            header('Location:http://'._config_url.'/index.php?controller=product&action=alllist');
        }
        public function deleteCat(){
            $product = new product();
            $id = addslashes($_GET['id']);
            $data = $product->deleteProduct('product_cat',"id=".$id);
            header('Location:http://'._config_url.'/index.php?controller=product&action=allcat');
        }
        public function deleteItem(){
            $product = new product();
            $id = addslashes($_GET['id']);
            $data = $product->deleteProduct('product_item',"id=".$id);
            header('Location:http://'._config_url.'/index.php?controller=product&action=allitem');
        }
        public function delete(){
            $product = new product();
            $id = addslashes($_GET['id']);   
            $data = $product->deleteProduct('product',"id=".$id);
            header('Location:http://'._config_url.'/index.php?controller=product&action=allproduct');
        }
    }
?>