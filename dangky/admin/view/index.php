<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Đơn hàng</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Họ Tên</th>
                        <th>Trạng thái</th>
                        <th>Chọn</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['data'] as $key => $value){?>
                    <tr class="odd gradeX" align="center">
                        <td><?=$key + 1?></td>
                        <td><?=$value['ma']?></td>
                        <td><?=$value['hoten']?></td>
                        <td><?=($value['tinhtrang']==0)? 'Đơn hàng mới':'Đã xác nhận'?></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="index.php?controller=cart&action=edit&id=<?=$value['id']?>"> Cập nhật</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i> <a style="cursor:pointer" onclick="deleteCart('index.php?controller=cart&action=delete&id=<?=$value['id']?>')"> Xóa</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
