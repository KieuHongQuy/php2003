<script type="text/javascript">
$(document).ready(function(){
$('.timkiem button').click(function(event) {
            var keyword = $('#keyword').val();
			window.location.href="index.php?controller=product&action=allcat&keyword="+keyword;
        });
});      
</script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12" style="align-items: center;justify-content: space-between;display:flex">
                <h1 class="page-header">Danh mục
                    <small>cấp 2</small>
                </h1>
                <a href="index.php?controller=product&action=insertCat" style="background: green;color: #fff;padding: 10px;text-decoration: none;">Thêm mới</a>
            </div>
            <div class="input-group custom-search-form" style="padding:10px">
                <div class="timkiem input-group custom-search-form">
                    <input type="text" id="keyword" class="form-control" placeholder="Search..." value="">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                    </span>
                </div>
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
                    <?php foreach($data['data']['product'] as $key => $value){?>
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
    <?php if(count($data['data']['page']) > 0 && count($data['data']['product']) > 0){?>
            <nav aria-label="Page navigation example">
                <ul class="pagination t-center">
                    <li class="page-item">
                        <a class="page-link" href="index.php?controller=product&action=allcat&page=<?=($_GET['page'] > 1) ? $_GET['page']-1 : '1'?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                <?php for($i = 1;$i < $data['data']['page']+1;$i++){?>
                    <li class="page-item" ><a class="page-link <?=($_GET['page'] == $i)? 'acti': ''?>" href="index.php?controller=product&action=allcat&page=<?=$i?>"><?php echo $i;?></a></li>
                 <?php }?>
                    <li class="page-item">
                        <a class="page-link" href="index.php?controller=product&action=allcat&page=<?=($_GET['page'] >= 1 && $_GET['page'] + 1 <= $data['data']['page']) ? $_GET['page']+ 1 : '1'?>" aria-label="Previous">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                </li>
                </ul>
            </nav>
        <?php }?>
    <!-- /.container-fluid -->
</div>
