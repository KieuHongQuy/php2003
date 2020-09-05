<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12" style="align-items: center;justify-content: space-between;display:flex">
                <h1 class="page-header">Danh sách
                    <small>sản phẩm</small>
                </h1>
                <a href="index.php?controller=product&action=insert" style="background: green;color: #fff;padding: 10px;text-decoration: none;">Thêm mới</a>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Tên</th>
                        <th>Hiển thị</th>
                        <th>Nổi bật</th>
                        <th>Sản phẩm mới</th>
                        <th>Khuyến mãi</th>
                        <th>Bán chạy</th>
                        <th>Chọn</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['data'] as $key => $value){?>
                    <tr class="odd gradeX" align="center">
                        <td><?=$key + 1?></td>
                        <td><img src="../img/<?=$value['img']?>" style="width:100%"></td>
                        <td><?=$value['ten']?></td>
                        <td><a data-val2="product" rel="<?=$value['hienthi']?>" data-val3="hienthi" class="diamondToggle <?=($value['hienthi']==1)?"diamondToggleOff":""?>" data-val0="<?=$value['id']?>"></a></td>
                        <td><a data-val2="product" rel="<?=$value['noibat']?>" data-val3="noibat" class="diamondToggle <?=($value['noibat']==1)?"diamondToggleOff":""?>" data-val0="<?=$value['id']?>"></a></td>
                        <td><a data-val2="product" rel="<?=$value['sanphammoi']?>" data-val3="sanphammoi" class="diamondToggle <?=($value['sanphammoi']==1)?"diamondToggleOff":""?>" data-val0="<?=$value['id']?>"></a></td>
                        <td><a data-val2="product" rel="<?=$value['khuyenmai']?>" data-val3="khuyenmai" class="diamondToggle <?=($value['khuyenmai']==1)?"diamondToggleOff":""?>" data-val0="<?=$value['id']?>"></a></td>
                        <td><a data-val2="product" rel="<?=$value['banchay']?>" data-val3="banchay" class="diamondToggle <?=($value['banchay']==1)?"diamondToggleOff":""?>" data-val0="<?=$value['id']?>"></a></td>
                        <td class="center"><a title="Sửa" href="index.php?controller=product&action=edit&id=<?=$value['id']?>"><i class="fa fa-pencil fa-fw"></i></a></td>
                        <td class="center"><a title="Xóa" style="cursor:pointer" onclick="deleteCart('index.php?controller=product&action=delete&id=<?=$value['id']?>')"><i class="fa fa-trash-o  fa-fw"></i> </a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
