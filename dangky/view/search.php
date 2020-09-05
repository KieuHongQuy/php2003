<section id="index-main" class="mw-1000" >
    <div class="title-main">
        <ul class="menu-title">
            <li><a href=""><img src="img/home.png" style="vertical-align: top;"></a></li>
            <li><a href="product"><button class="ctg">Tìm kiếm</button></a></li>
            <li><a></a></li>
        </ul>
    </div>
</section>
<hr style="margin:8px 0px 5px;">
<section id="index-main" class="mw-1000" >
    <div class="title-name">
        Tìm kiếm  
    </div>
    <hr style="margin:8px 0px 5px;">
    <div class="pdProduct">
    <?php if(count($data['data']['product']) > 0){
            foreach($data['data']['product'] as $key => $value){?>
                <div class="pdProduct-detail col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <a href="product/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html">
                    <div class="pdDetail-img"><img src="img/<?=$value['img']?>"></div>
                    <div class="pdDetail-name"><?=$value['ten']?></div>
                    <div class="pdDetail-id"><?=$value['masp']?></div>
                    <div class="pdDetail-price"><?=number_format($value['gia'],0,',', '.')?></div>
                    </a>
                </div>
    <?php } 
    }?>
    </div>
    <div>
        <?php if(count($data['data']['page']) > 0){?>
            <nav aria-label="Page navigation example">
                <ul class="pagination t-center">
                    <li class="page-item">
                        <a class="page-link" href="<?=$data['pageURL']?>&page=<?=($data['page'] > 1) ? $data['page']-1 : '1'?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                <?php for($i = 1;$i < $data['data']['page']+1;$i++){?>
                    <li class="page-item"><a class="page-link" href="<?=$data['pageURL']?>&page=<?=$i?>"><?php echo $i;?></a></li>
                 <?php }?>
                    <li class="page-item">
                        <a class="page-link" href="<?=$data['pageURL']?>&page=<?=($data['page'] >= 1 && $data['page'] + 1 <= $data['data']['page']) ? $data['page']+ 1 : '1'?>" aria-label="Previous">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                </li>
                </ul>
            </nav>
        <?php }?>
    </div>
</section>
