<?php if($data['connect'] != NULL){?>
    <script>
        window.onload = function(){
            alert("<?=$data['connect']?>");
            window.location.href = 'index.php?controller=cart&action=edit&id=<?=$data['detail']['id']?>';
        }
    </script>
<?php }?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chi tiết đơn hàng
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7">
                <form action="index.php?controller=cart&action=update&id=<?=$data['detail']['id']?>" method="POST">
                    <input type="hidden" name="id" value="<?=$data['detail']['id']?>" />
                    <div class="form-group">
                        <label>Mã Đơn hàng</label>
                        <input disabled class="form-control" name="ma" value="<?=$data['detail']['ma']?>"/>
                    </div>
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input class="form-control" name="hoten" value="<?=$data['detail']['hoten']?>" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" value="<?=$data['detail']['email']?>" />
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input class="form-control" name="dienthoai" value="<?=$data['detail']['dienthoai']?>" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="diachi" value="<?=$data['detail']['diachi']?>" />
                    </div>
                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" rows="3" name="ghichu"><?=$data['detail']['ghichu']?></textarea>
                  </div>
                    <div class="form-group">
                        <label>Tình trạng</label>
                        <select class="form-control" name="tinhtrang">
                            <option value="0" <?=($data['detail']['tinhtrang']==0)? "selected":""?>>Đơn hàng mới</option>
                            <option value="1" <?=($data['detail']['tinhtrang']==1)? "selected":""?>>Đã xác nhận</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Cập nhật</button>
                <form>
            </div>
        </div>
    </div>
</div>
</div>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Đơn hàng</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <?php if(count($data['data']) < 0){?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sum = 0 ;
                        foreach($data['data'] as $key => $value){
                        $product = $post->getProduct($value['id_product']);
                        $sum = $sum + ($product['gia'] * $value['soluong']);
                    ?>
                    <tr class="odd gradeX" align="center">
                        <td><?=$key + 1?></td>
                        <td><?=$product['ten']?></td>
                        <td><?=$product['gia']?></td>
                        <td><?=$value['soluong']?></td>
                        <td><?=$product['gia'] * $value['soluong']?></td>
                    </tr>
                    <?php }?>
                    <tr>
                        <td colspan="3" style="text-align:right">Tổng tiền</td>
                        <td colspan="2" style="text-align:right"><?=$sum?> VNĐ</td>
                    </tr>
                </tbody>
            </table>
            <?php }?>
        </div>
        <!-- /.row -->
    </div>
</div>
