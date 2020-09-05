<hr/>
<footer id="footer">
    <div class="footer-top mw-1000">
        <ul>
            <li><a href="gioi-thieu.html">Giới thiệu công ty</a></li>
            <li><a href="dieu-khoan.html">Điều khoản</a></li>
            <li><a href="chinh-sach.html">Chính sách xử lý thông tin</a></li>
            <li><a href="tu-choi-thu-rac.html">Từ chối thư rác</a></li>
            <li><a href="cham-soc-khach-hang.html">Chăm sóc khách hàng</a></li>
            <li><a href="so-do.html" class="footer-border">Sơ đồ</a></li>
        </ul>
    </div>
    <hr/>
    <div class="footer-bottom mw-1000">
        <div><img src="/<?=_dangky?>/<?=$thongfooter['img']?>"></div>
        <div class="footer-content"><?php 
            $array = explode("\r\n", $thongfooter['mota']);
			echo implode("<br/>",$array);?></div>
        <div><img src="/<?=_dangky?>/<?=$bocongthuong['img']?>"></div>
    </div>
</footer>