<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-12" style="align-items: center;justify-content: space-between;display:flex">
                <h1 class="page-header">Danh mục
                    <small>cấp 1</small>
                </h1>
                <a href="index.php?controller=product&action=insertlist" style="background: green;color: #fff;padding: 10px;text-decoration: none;">Thêm mới</a>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Hiển thị</th>
                        <th>Chọn</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['data'] as $key => $value){?>
                    <tr class="odd gradeX" align="center">
                        <td><?=$key + 1?></td>
                        <td><?=$value['ten']?></td>
                        <td><a data-val2="product_list" rel="<?=$value['noibat']?>" data-val3="noibat" class="diamondToggle <?=($value['noibat']==1)?"diamondToggleOff":""?>" data-val0="<?=$value['id']?>"></a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="index.php?controller=product&action=editlist&id=<?=$value['id']?>"> Cập nhật</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i> <a style="cursor:pointer" onclick="deleteCart('index.php?controller=product&action=deleteList&id=<?=$value['id']?>')"> Xóa</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
