<?php 
include_once "./model/post.php";
    class postMain{
        public function edit(){
            $post = new post();
            $slider =  $post->getSlider();
            $logo =  $post->getPost('logo');
            $gioithieu =  $post->getPost('gioi-thieu');
            $dieukhoan =  $post->getPost('dieu-khoan');
            $chinhsach =  $post->getPost('chinh-sach');
            $tuchoi =  $post->getPost('tu-choi-thu-rac');
            $chamsoc =  $post->getPost('cham-soc-khach-hang');
            $sodo =  $post->getPost('so-do');
            return[
                'logo' => $logo,
                'slider' => $slider,
                'gioithieu' => $gioithieu,
                'dieukhoan' => $dieukhoan,
                'chinhsach' => $chinhsach,
                'tuchoi' => $tuchoi,
                'chamsoc' => $chamsoc,
                'sodo' => $sodo,
                'view' => 'post'
            ];
        }
        public function update(){
            $post = new post();
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
            $data['noidung'] = addslashes($_POST['gioithieu']);
            $gioithieu =  $post->updatePost('post',$data,'type="gioi-thieu"');
            $data['noidung'] = addslashes($_POST['dieukhoan']);
            $dieukhoan =  $post->updatePost('post',$data,'type="dieu-khoan"');
            $data['noidung'] = addslashes($_POST['chinhsach']);
            $chinhsach =   $post->updatePost('post',$data,'type="chinh-sach"');
            $data['noidung'] = addslashes($_POST['tuchoi']);
            $tuchoi =  $post->updatePost('post',$data,'type="tu-choi-thu-rac"');
            $data['noidung'] = addslashes($_POST['chamsoc']);
            $chamsoc =   $post->updatePost('post',$data,'type="cham-soc-khach-hang"');
            $data['noidung'] = addslashes($_POST['sodo']);
            $sodo =  $chamsoc =   $post->updatePost('post',$data,'type="so-do"');
            header('Location:http://'._config_url.'/index.php?controller=post&action=edit');
        }
    }
?>