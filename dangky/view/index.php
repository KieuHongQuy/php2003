<?php 
    $dsmain = $data['datamain'] ;
    $dspd = [];
    foreach($dsmain as $key => $value){
        if(!isset($dspd[$dsmain[$key]['id_list']])){
            $dspd[$dsmain[$key]['id_list']]['danhmuc']['tenkhongdau'] = $dsmain[$key]['tenkhong'];
            $dspd[$dsmain[$key]['id_list']]['danhmuc']['ten'] = $dsmain[$key]['tenlist'];
            $dspd[$dsmain[$key]['id_list']]['danhmuc']['img'] = $dsmain[$key]['imglist'];
        }
        if(!isset($dspd[$dsmain[$key]['id_list']]['danhcon'][$dsmain[$key]['id']]) && count($dspd[$dsmain[$key]['id_list']]['danhcon']) < 6){
            $dspd[$dsmain[$key]['id_list']]['danhcon'][$dsmain[$key]['id']]['id'] = $dsmain[$key]['id'];
            $dspd[$dsmain[$key]['id_list']]['danhcon'][$dsmain[$key]['id']]['tenkhongdau'] = $dsmain[$key]['tenkhongdau'];
            $dspd[$dsmain[$key]['id_list']]['danhcon'][$dsmain[$key]['id']]['ten'] = $dsmain[$key]['ten'];
            $dspd[$dsmain[$key]['id_list']]['danhcon'][$dsmain[$key]['id']]['img'] = $dsmain[$key]['img'];
            $dspd[$dsmain[$key]['id_list']]['danhcon'][$dsmain[$key]['id']]['gia'] = $dsmain[$key]['gia'];
        }
    }
?>
<section id="index-main" class="mw-1000" >
    <div class="main-top">
        <div class="maint-title">
            <p><a class="titlepda" href="product/san-pham-ban-chay.html">Sản phẩm bán chạy</a></p>
            <p><a class="titlepdaa" href="product/san-pham-ban-chay.html"><span>Xem thêm</span></a></p>
        </div>
        <div class="slickProductNB">
            <?php foreach($data['data'] as $key => $value){?>
                <div class="slick-width">
                    <a href="product/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html">
                        <img src="img/<?=$value['img']?>">
                        <p class="slick-p">
                            <?=$value['ten']?>
                        </p>
                        <p class="slick-psub">
                            <?=number_format($value['gia'],0,',', '.')?> đ
                        </p>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="title-dm">
        <p>Danh mục sản phẩm</p>
        <p>Bạn có thể xem được sản phẩm đa dang của LOCK</p>
    </div>
    <div class="main-main">
        <?php foreach($dspd as $key => $value){?>
            <div class="product-title"> 
                <span><a href="product/<?=$dspd[$key]['danhmuc']['tenkhongdau']?>"><?=$dspd[$key]['danhmuc']['ten']?></a></span>
                <span><a href="product/<?=$dspd[$key]['danhmuc']['tenkhongdau']?>">Xem thêm</a></span>
            </div>
            <div class="product-main">
                <div class="product-img px-0 col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="product/<?=$dspd[$key]['danhmuc']['tenkhongdau']?>"><img src="img/<?=$dspd[$key]['danhmuc']['img']?>"></a>
                </div>
     
                <div class="product-sp px-0 col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <?php if(count($dspd[$key]['danhcon']) > 0){?>
                    <?php foreach($dspd[$key]['danhcon'] as $sub => $value){?>
                        <div class="product col-xs-12 col-sm-4 col-md-4 col-lg-4">
                           <a href="product/<?=$dspd[$key]['danhcon'][$sub]['tenkhongdau']?>-<?=$dspd[$key]['danhcon'][$sub]['id']?>.html"> <img src="/<?=_dangky?>/img/<?=$dspd[$key]['danhcon'][$sub]['img']?>">
                            <p class="product-name"><?=$dspd[$key]['danhcon'][$sub]['ten']?></p>
                            <p><?=number_format($dspd[$key]['danhcon'][$sub]['gia'],0,'.',',')?> đ</p>
                            </a>
                        </div>
                    <?php }?>
                <?php }?>
                </div>
            </div>
        <?php }?>
    </div>
    <hr/ style="margin-top:25px;border: 2px solid #000;">
    <div class="main-bottom">
        <div class="mainb-main">
            <div class="mainb-left"><?=$data['thongtin']['noidung']?></div>
            <div><img src="<?=$data['thongtin']['img']?>"></div>
        </div>
        <div class="mainb-main">
            <div><img src="<?=$data['mxh']['img']?>"></div>
            <div class="mainbm-title"><?=$data['mxh']['ten']?></div>
            <div class="mainbm-align"><img src="img/mainSns.png"></div>
        </div>
        <div class="mainb-main">
            <div><img src="<?=$data['bgcart']['img']?>"></div>
            <div class="mainbm-bottom"><img src="<?=$data['bgtintuc']['img']?>"></div>
            <div class="mainbm-title">
                <div class="mainbt-title">
                    <span>Notice</span>
                    <span>Xem thêm</span>
                </div>
                <div class="mainb-menu">
                    <ul>
                    <?php foreach($data['notice'] as $key => $value){?>
                        <li><?=$data['notice'][$key]['ten']?></li>
                    <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>