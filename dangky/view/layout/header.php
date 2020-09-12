<header id="header" class="mw-1000">
    <div class="header-top">
        <span class="htop-font">
        <?=(!isset($_SESSION['user']))? "<a href='dang-nhap'>Đăng nhập</a></span> | <span class='htop-font'><a href='dang-ky'>Gia nhập thành viên</a></span> <span class='htop-font'> | <a href=''>My Page</a> | </span>" : "<a href='dang-xuat'>Đăng Xuất</a></span> | <span class='htop-font'><a href='thong-tin'>Chào Bạn</a></span> <span class='htop-font'> | <a href='mat-khau'>Đổi password</a> | </span>"?><span class="htop-font"><a href="cham-soc-khach-hang.html">Chăm sóc khách hàng</a></span>
    </div>
    <div class="header-bottom">
        <div class="hbottom-left">
            <ul>
                <li><img src="<?=$sukien['img']?>"></li>
                <li class="border-img rpnone4" ><img src="img/top_icon_line.png"></li>
                <li class="rpnone4"><img src="<?=$icon['img']?>"></li>
            </ul>
        </div>
        <div class="hbottom-main">
            <a href=""><img src="<?=$logo['img']?>"></a>
        </div>
        <div class="hbottom-right">
            <ul>
                <li>
                    <a href="cart">
                        <img src="<?=$giohang['img']?>">
                        <span class="s-cart"><?=count($_SESSION['cart'])?></span>
                    </a>
                </li>
                <li class="border-img rpnone4" ><img src="img/top_icon_line.png"></li>
                <li class="rpnone">
                    <a>
                        <img src="<?=$sanpham['img']?>">
                        <span class="s-product">0</span> 
                    </a>
                </li>
                <li class="border-img rpnone" ><img src="img/top_icon_line.png"></li>
                <li class="rpnone4"><img src="<?=$donhang['img']?>"></li>
        </div>
    </div>
</header>
