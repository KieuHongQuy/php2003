<section id="index-main" class="mw-1000" >
    <div class="title-main">
        <ul class="menu-title">
            <li><a href=""><img src="img/home.png" style="vertical-align: top;"></a></li>
            <li><a href="product"><button class="ctg">Giỏ hàng</button></a></li>
        </ul>
    </div>
</section>
<hr style="margin:8px 0px 5px;">
<section id="index-main" class="mw-1000" >
    <div class="title-name">
        Giỏ hàng 
    </div>
    <hr style="margin:8px 0px 5px;">
    <div class="container"> 
        <table id="cart" class="table table-hover table-condensed"> 
            <thead class="fontcart"> 
                <tr> 
                    <th style="width:50%">Tên sản phẩm</th> 
                    <th style="width:13%" class="nonecart">Giá</th> 
                    <th style="width:10%">Số lượng</th> 
                    <th style="width:13%" class="text-center">Thành tiền</th> 
                    <th style="width:19%"> </th> 
                </tr> 
            </thead> 
            <tbody>
                <?php foreach($_SESSION['cart'] as $val){
                    $product = $post -> getProduct($val['id']);
                ?>
                <tr> 
                    <td data-th="Product"> 
                        <div class="row"> 
                            <div class="col-sm-2 hidden-xs hiddenImg"><img src="img/<?=$product['img']?>" alt="<?=$product['ten']?>" class="img-responsive" style="max-width:100%">
                        </div> 
                        <div class="col-sm-10"> 
                            <h5 class="nomargin fontcart"><?=$product['ten']?></h5> 
                        </div> 
                        </div> 
                    </td> 
                    <td data-th="Price" class="gia<?=$val['id']?> fontcart nonecart"><?=number_format($product['gia'],0,',', '.')?></td> 
                    <td data-th="Quantity"><input style="width:80px" class="fontcart cartsl form-control text-center" onblur="cartNew(<?=$val['id']?>,getElementById('soluong<?=$val['id']?>').value)" value="<?=$val['sl']?>" type="number" name="soluong<?=$val['id']?>" data-id="<?=$val['id']?>" id="soluong<?=$val['id']?>">
                    </td> 
                    <td data-th="Subtotal" class="tong<?=$val['id']?> text-center fontcart"><?=number_format($product['gia']*$val['sl'],0,',', '.')?></td> 
                    <td class="actions" data-th="">
                        
                        <button class="btn btn-danger btn-sm" onclick="addCart(<?=$val['id']?>,'0',1,'delete')"><i class="fa fa-trash-o"></i>
                        </button>
                    </td> 
                </tr> 
                <?php } ?>
            </tbody>
            <tfoot> 
                <tr> 
                    <td><a href="" class="fontcart btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td> 
                    <td colspan="1" class="hidden-xs nonecart"> </td> 
                    <td colspan="2" class="hidden-xs text-center fontcart"><strong>Tổng tiền: <span id="cartSum"><?=number_format($data['tong'],0,'.',',')?></span> đ</strong>
                    </td> 
                    <td><a href="thanh-toan" class="btn btn-success btn-block fontcart">Thanh toán <i class="fa fa-angle-right"></i></a>
                    </td> 
                </tr> 
            </tfoot> 
        </table>
    </div>
</section>
