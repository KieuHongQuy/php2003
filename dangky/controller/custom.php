<?php
    include './model/post.php';
    $post = new post();
    $logo = $post-> getPost('logo');
    $bocongthuong = $post-> getPost('bo-cong-thuong');
    $thongfooter = $post-> getPost('thong-footer');
    $giohang = $post->getPost('giohang');
    $icon = $post->getPost('icon');
    $sukien = $post->getPost('su-kien');
    $donhang = $post->getPost('don-hang');
    $sanpham = $post->getPost('san-pham-yeu-thich');
    $slider = $post->getSlider();
    $ds = $post->getMenu();
    $dsmenu = [];
    foreach($ds as $key=>$value){
        if(!isset($dsmenu[$ds[$key]['id_list']])){
            $dsmenu[$ds[$key]['id_list']]["tendm1"]['ten'] =  $ds[$key]['tenlist'];
            $dsmenu[$ds[$key]['id_list']]["tendm1"]['tenkhongdau'] =  $ds[$key]['tkdlist'];
        }
        if(!isset($dsmenu[$ds[$key]['id_list']]["danhmuc2"][$ds[$key]['id_cat']])){
            $dsmenu[$ds[$key]['id_list']]["danhmuc2"][$ds[$key]['id_cat']]['ten'] =  $ds[$key]['tencat'];
            $dsmenu[$ds[$key]['id_list']]["danhmuc2"][$ds[$key]['id_cat']]['tenkhongdau'] =  $ds[$key]['tkdcat'];
            
        }
    }  
?>