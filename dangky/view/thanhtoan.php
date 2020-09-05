<?php if($data['data'] != NULL){?>
	<?php if($data['data'] == true){
		unset($_SESSION['cart']);
	?>
		<script>
			window.onload = function(){
				alert("Đơn hàng đã được gửi thành công");
				window.location.href = '';
			}
		</script>
	<?php }else{ ?>
		<script>
			window.onload = function(){
				alert("Đơn hàng gửi không thành công");
			}
		</script>
<?php }
} ?>
<section id="index-main" class="mw-1000" >
    <div class="title-main">
        <ul class="menu-title">
            <li><a href=""><img src="img/home.png" style="vertical-align: top;"></a></li>
            <li><a href="product"><button class="ctg">Thanh toán</button></a></li>
        </ul>
    </div>
</section>
<hr style="margin:8px 0px 5px;">
<section id="index-main" class="mw-1000" >
    <div class="title-name">
        Thanh toán
    </div>
    <hr style="margin:8px 0px 5px;">
	<div class="pdOmail">
		<div class="pdOrder">
			<form method="post" name="frm_order" id="frm-order" action="thanh-toan" enctype="multipart/form-data">
				<div class="order">
					<div class="orderform">
						<div class="order-title">
							<i class="fa fa-info-circle"></i> Thông tin đặt hàng
						</div>
						<div class="order-desc">
							<div class="order-form">
								<div class="row-order-form">
									<label>Họ và tên</label>
									<div class="row-input">
										<input type="text" class="text-order" name="hoten" id="hoten" value="<?=$_SESSION['logging']['hoten']?>" placeholder="Ví dụ: Nguyễn Văn Nam">
										<p class="error-text cl-red"></p>
									</div>
								</div>
								<div class="row-order-form">
									<label>Số điện thoại</label>
									<div class="row-input">
										<input type="text" class="text-order" name="dienthoai" id="dienthoai" value="<?=$_SESSION['logging']['dienthoai']?>" placeholder="Ví dụ: 0986688688">
										<p class="error-text cl-red"></p>
									</div>
								</div>
								<div class="row-order-form">
									<label>Email</label>
									<div class="row-input">
										<input type="text" class="text-order" name="email" id="email" value="<?=$_SESSION['logging']['email']?>" placeholder="Ví dụ: nguyenvana@gmail.com">
										<p class="error-text cl-red"></p>
									</div>
								</div>
								<div class="row-order-form">
									<label>Địa chỉ</label>
									<div class="row-input f-right">
										<input type="text" class="text-order" name="diachi" id="diachi" value="<?=$_SESSION['logging']['diachi']?>" placeholder="Ví dụ: 106 Nguyễn Đình Khơi. Phường 14, Quận Tân Bình">
										<p class="error-text cl-red"></p>
									</div>
								</div>
								<div class="row-order-form">
									<label>Ghi chú</label>
									<div class="row-input">
										<textarea name="ghichu" id="ghichu" class="text-order h-100" placeholder="Lời nhắn chi tiết, ví dụ: mua màu xanh nếu màu đỏ hết hàng, giao hàng trong giờ hành chính ..."></textarea>
									</div>
								</div>
								<div class="orderButton">
									<div class="Obutton" id="btn-order-submit">
										Đồng ý &amp; Tiếp tục <i class="fa fa-caret-right" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="pdOcart">
			<div class="order-title">
			<i class="fa fa-list-ul"></i> Đơn hàng của quý khách (0 sản phẩm)
			</div>
			<div class="order-cart">
			<?php foreach($_SESSION['cart'] as $val){
				$product = $post-> getProduct($val['id']);
			?>
				<div class="row-order">
					<div class="img-order">
						<img src="img/<?=$product['img']?>">
					</div>
					<div class="desc-order">
						<p><?=$product['ten']?></p>
						<p>x&nbsp;<?=$val['sl']?> sản phẩm</p>
					</div>
					<div class="price-order">
						<p class="t-right">
							<?=number_format($product['gia']*$val['sl'],0, ',', '.')?>đ
						</p>
					</div>
				</div>
			<?php }?>
			</div>
			<div class="row-total">
				<p class="totai-row">
					<span class="">Tổng giá trị đơn hàng</span>
					<span class=""><?=number_format($data['tong'],0, ',', '.')?><u>đ</u></span>
				</p>
				<p class="totai-row">
					<span class="">Số tiền phải thanh toán</span>
					<span class=""><?=number_format($data['tong'],0, ',', '.')?><u>đ</u></span>
				</p>
			</div>
		</div>
	</div>
</section>
