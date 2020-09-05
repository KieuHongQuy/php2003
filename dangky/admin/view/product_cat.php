<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12" style="align-items: center;justify-content: space-between;display:flex">
                <h1 class="page-header">Danh mục
                    <small>cấp 2</small>
                </h1>
                <a href="index.php?controller=product&action=insertCat" style="background: green;color: #fff;padding: 10px;text-decoration: none;">Thêm mới</a>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên</th>
                        
                        <th>Chọn</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['data'] as $key => $value){?>
                    <tr class="odd gradeX" align="center">
                        <td><?=$key + 1?></td>
                        <td><?=$value['ten']?></td>
                        
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="index.php?controller=product&action=editCat&id=<?=$value['id']?>"> Cập nhật</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i> <a style="cursor:pointer" onclick="deleteCart('index.php?controller=product&action=deleteCat&id=<?=$value['id']?>')"> Xóa</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
