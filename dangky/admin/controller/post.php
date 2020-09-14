<?php 
include_once "./model/post.php";
    class postMain{
        public function edit(){
            $post = new post();
            if($_REQUEST['type']=='slider'){
                $slider =  $post->getSlider();
                $logo =  $post->getPost('logo');
                return[
                    'logo' => $logo,
                    'slider' => $slider,
                    'view' => 'post'
                ];
            }else{
                $type = addslashes($_GET['type']);
                $data =  $post->getPost($type);
                return[
                    'data' => $data,
                    'view' => 'post'
                ];
            }
        }
        public function update(){
            $post = new post();
            $type = addslashes($_REQUEST['type']);
            if($_REQUEST['type']=='slider'){
                if($_FILES['img']['name']){
                    $name = $post->images_name($_FILES['img']['name']);
                    $img = $post->upload_image('img','jpg|png|gif|JPG|jpeg|JPEG','../img/',$name);
                    $data["img"]= $img;
                    $post->updatePost('post',$data,'type="logo"');
                }
                if(count($_FILES['files']['name']) > 0){
                    for($i=0;$i<count($_FILES['files']['name']);$i++){
                        if($_FILES['files']['name'][$i]!=''){
                            $file['name'] = $_FILES['files']['name'][$i];
                            $file['type'] = $_FILES['files']['type'][$i];
                            $file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                            $file['error'] = $_FILES['files']['error'][$i];
                            $file['size'] = $_FILES['files']['size'][$i];
                            $file_name =  $post->images_name($_FILES['files']['name'][$i]);
                            $photo =  $post->upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', '../img/',$file_name);
                            $data1['img'] = $photo;
                            $data1['type'] = 'slider';
                            $data1['ten'] = 'slider';
                            $post->insertImage('post',$data1);
                        }
                    }
                }
            }else{
                $data['noidung'] = addslashes($_POST['noidung']);
                $post->updatePost('post',$data,"type='".$type."'");
            }
            header('Location:http://'._config_url.'/index.php?controller=post&action=edit&type='.$type);
        }
    }
?>