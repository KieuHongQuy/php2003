<nav id="menu-mobile" class="mm-menu mm-offcanvas">
    <ul>
        <li>
            <a>Danh mục sản phẩm</a>
            <ul>
            <?php foreach($dsmenu as $key =>$value){?>
                <li>
                    <a href="product/<?=$value['tendm1']['tenkhongdau']?>"><?=$value['tendm1']['ten']?></a>
                    <?php if(count($dsmenu[$key]['danhmuc2'])){?>
                        <ul>
                        <?php foreach($dsmenu[$key]['danhmuc2'] as $keysub => $valuesub){?>   
                            <li><a href="product/<?=$value['tendm1']['tenkhongdau']?>/<?=$valuesub['tenkhongdau']?>"><?=$valuesub['ten']?></a>          
                                <?php if(count($dsmenu[$key]['danhmuc3'][$keysub])){?>
                                    <ul>
                                        <?php foreach($dsmenu[$key]['danhmuc3'][$keysub] as $keysup => $valuesup){?>
                                            <li><a href="product/<?=$value['tendm1']['tenkhongdau']?>/<?=$valuesub['tenkhongdau']?>/<?=$valuesup['tenkhongdau']?>"><?=$valuesup['ten']?></a></li>
                                        <?php }?>
                                    </ul>
                                <?php }?>    
                            </li>
                         <?php }?>
                        </ul>                    
                    <?php }?>
                </li>
            <?php }?>
        </ul>
        </li>
        <li><a href="product/san-pham-ban-chay.html">Sản phẩm bán chạy</a></li>
        <li><a href="product/san-pham-moi.html">Sản phẩm mới</a></li>
        <li><a href="product/khuyen-mai.html">Khuyến mãi hot</a></li>
    </ul>
</nav>
