<?php 
include_once "./model/post.php";
    class postMain{
        public function edit(){
            $post = new post();
            $gioithieu =  $post->getPost('gioi-thieu');
            $dieukhoan =  $post->getPost('dieu-khoan');
            $chinhsach =  $post->getPost('chinh-sach');
            $tuchoi =  $post->getPost('tu-choi-thu-rac');
            $chamsoc =  $post->getPost('cham-soc-khach-hang');
            $sodo =  $post->getPost('so-do');
            return[
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
            return[
                'view' => 'post'
            ];
        }
    }
?>