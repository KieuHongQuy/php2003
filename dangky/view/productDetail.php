<link href="plugins/magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="plugins/magiczoomplus/magiczoomplus.js" type="text/javascript"></script>
<section id="index-main" class="mw-1000" >
    <div class="title-main">
        <ul class="menu-title">
            <li><a href=""><img src="img/home.png" style="vertical-align: top;"></a></li>
            <li><a href="product"><button class="ctg">Sản phẩm</button></a></li>
            <?php
				echo (count($data['data']['list']))? '<li><a href="product/'.$data['data']['list']['tenkhongdau'].'"><button class="ctg">'.$data['data']['list']['ten'].'</button></a></li>' : "";
                echo (count($data['data']['cat'])) ? '<li><a href="product/'.$data['data']['list']['tenkhongdau'].'/'.$data['data']['cat']['tenkhongdau'].'"><button class="ctg">'.$data['data']['cat']['ten'].'</button></a></li>': "";
            ?>
            <li><a></a></li>
        </ul>
    </div>
</section>
<hr style="margin:8px 0px 5px;">
<section id="index-main" class="mw-1000" >
    <div class="pdetail-title">
        <div class="pdetail-title-name">
            <p><?=$data['data']['product']['ten']?></p>
            <p><?=$data['data']['product']['masp']?></p>
        </div>
        <div class="pdetail-title-sub">
            <div class="pdetail-border">
                <p>Phản hồi trực tiếp</p>
                <p><img src="img/star_00n.png"></p>
            </div>
            <div class="pdetail-border">
                <p>Nổi bật</p>
                <p><img src="img/ico_heart.png"> 1</p>
            </div>
            <div class="pdetail-pd">               
                <p><img src="img/btn_sns.png"></p>
            </div>
        </div>
    </div>
    <div class="pdetail-main">
        <div class="pdetail-main-left">
            <?php if(count($data['data']['imgList'])>0){ ?>
            <div class="images_list">
                <div class="slickDetail">
                    <div>
                        <div class="item_img">
                            <a data-zoom-id="Zoom-1" href="http://<?=$config_url?>/img/<?=$data['data']['product']['img']?>"  data-image="http://<?=$config_url?>/img/<?=$data['data']['product']['img']?>">
                                <img src="http://<?=$config_url?>/img/<?=$data['data']['product']['img']?>" alt="<?=$data['data']['product']['ten']?>">
                            </a>
                        </div>
                    </div>
                    <?php foreach($data['data']['imgList'] as $val) { ?>
                    <div>
                        <div class="item_img">
                            <a data-zoom-id="Zoom-1" href="http://<?=$config_url?>/img/<?=$val['img']?>"  data-image="http://<?=$config_url?>/img/<?=$val['img']?>">
                                <img src="http://<?=$config_url?>/img/<?=$val['img']?>" alt="<?=$data['data']['product']['ten']?>">
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <div class="images_galley t-center">
                <a href="img/<?=$data['data']['product']['img']?>"
                class="MagicZoom" id="Zoom-1" data-options="variableZoom: true;expand: off; hint: always; ">
                    <img src="img/<?=$data['data']['product']['img']?>">
                </a>
            </div>
        </div>
        <div class="pdetail-main-right">
            <div class="pdetail-right-top">
                <span class="right-top-text">Giá bán:</span>
                <span class="right-top-price">
                    <?=number_format($data['data']['product']['gia'],0,'.',',')?> <span>đ</span>
                </span>
            </div>
            <div class="pdetail-right-bottom">
                <span class="right-top-sl">Số lượng:</span> 
                <input type="text" name="soluong" value="1" id="soluong" onblur="kiemtraSo()">
                <div class="pdetail-right-num">
                    <span class="plus_giohang"><img src="img/btn_amount_up.png" ></span>
                    <span  class="minus_giohang"><img src="img/btn_amount_down.png"></span>
                    
                </div>
            </div>
            <div>
                <button type="button" class="btn-main" onclick="addCart(<?=$data['data']['product']['id']?>,getElementById('soluong').value,1,'cartajax')">Đặt hàng</button>
            </div>
        </div>
    </div>
    <div class="pdetail-bottom">
        <div class="pdetailb-top">
            <span onclick="connectProduct(<?=$data['data']['product']['id']?>,'noidung',1,'connect')"class="pdt1 pdt-action">Thông tin sản phẩm</span>
            <span onclick="connectProduct(<?=$data['data']['product']['id']?>,'nhanxet',2,'connect')" class="pdt2" >Nhận xét sản phẩm</span>
            <span onclick="connectProduct(<?=$data['data']['product']['id']?>,'qva',3,'connect')" class="pdt3">Q&A</span>
            <span onclick="connectProduct(<?=$data['data']['product']['id']?>,'giaohang',4,'connect')" class="pdt4">Giao hàng/ Trả hàng/ Đổi hàng</span>
        </div>
        <div class="connectPD">
            <?=addslashes($data['data']['product']['noidung'])?>
        </div>
    </div>
</section>
