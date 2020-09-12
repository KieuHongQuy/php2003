<hr/ style="margin-bottom:5px;">
<section id="menu" class="mw-1000">
    <div class="menu-main">
        <ul>
            <li class="toggle-menu"><a>Danh mục sản phẩm <img src="img/total_ctg_img.png"></a></li>
            <li><a href="product/san-pham-ban-chay.html">Sản phẩm bán chạy</a></li>
            <li><a href="product/san-pham-moi.html">Sản phẩm mới</a></li>
            <li><a href="product/khuyen-mai.html">Khuyến mãi hot</a></li>
        </ul>
        <div class="menu-sub">
            <ul>
                <?php foreach($dsmenu as $key =>$value){?>
                    <li>
                        <a href="product/<?=$value['tendm1']['tenkhongdau']?>"><?=$value['tendm1']['ten']?></a>
                        <?php if(count($dsmenu[$key]['danhmuc2'])){?>
                            <ul>
                            <?php foreach($dsmenu[$key]['danhmuc2'] as $keysub => $valuesub){?>                                
                                <li><a href="product/<?=$value['tendm1']['tenkhongdau']?>/<?=$valuesub['tenkhongdau']?>"><?=$valuesub['ten']?></a></li>
                            <?php }?> 
                            </ul>                      
                        <?php }?>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="menu-but">
        <a href="#menu-mobile" title="">
            <div class="expand-alias"><span></span></div> Menu
        </a>
    </div>
    <div class="menu-form">
        <form id="form-search" class="form-search" method="get" action="tim-kiem">
            <input type="text" name="name" id="name">
            <button type="button" class="search-button"></button>
        </form>
    </div>
</section>
<hr style="margin:5px 0px;border: 1px solid;">
