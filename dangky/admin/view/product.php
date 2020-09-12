<script type="text/javascript">
$(document).ready(function(){
$('.timkiem button').click(function(event) {
            var keyword = $('#keyword').val();
			window.location.href="index.php?controller=product&action=allproduct&keyword="+keyword;
        });
});   
function select_list(){
    var a=document.getElementById("id_list");
    window.location ="index.php?controller=product&action=allproduct&id_list="+a.value;
    return true;
}
function select_cat(){
    var a=document.getElementById("id_list");
    var b=document.getElementById("id_cat");
    window.location ="index.php?controller=product&action=allproduct&id_list="+a.value+"&id_cat="+b.value;
    return true;
}   
</script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12" style="align-items: center;justify-content: space-between;display:flex">
                <h1 class="page-header">Danh sách
                    <small>sản phẩm</small>
                </h1>
                <a href="index.php?controller=product&action=insert" style="background: green;color: #fff;padding: 10px;text-decoration: none;">Thêm mới</a>
                
            </div>
            <div class="input-group custom-search-form" style="padding:10px;display:flex">
                <div class="timkiem input-group custom-search-form">
                    <input type="text" id="keyword" class="form-control" placeholder="Search..." value="">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                    </span>
                </div>
                <div class="form-group" style="padding:0px 10px">
                        <select id="id_list" class="conso form-control" name="id_list" onchange="select_list()">
                        <option value="0">Danh mục cấp 1</option>
                            <?php foreach($data['list'] as $val){?>
                                <option value="<?=$val['id']?>" <?=($val['id'] == $_REQUEST['id_list'])? 'selected': ""?>><?=$val['ten']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="id_cat" class="conso form-control" name="id_cat" onchange="select_cat()">
                            <option value="0">Danh mục cấp 2</option>
                            <?php foreach($data['id_cat'] as $val){?>
                                <option value="<?=$val['id']?>" <?=($val['id']==$_REQUEST['id_cat'])? 'selected': ""?>><?=$val['ten']?></option>
                            <?php }?>
                        </select>
                    </div>
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
                    <?php foreach($data['data']['product'] as $key => $value){?>
                    <tr class="odd gradeX" align="center">
                        <td><?=$key + 1?></td>
                        <td><img src="../img/<?=$value['img']?>" style="width:100%"></td>
                        <td><a style="color:#000" href="http://<?=_config_tc?>/product/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html"><?=$value['ten']?></a></td>
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
    <?php if(count($data['data']['page']) > 0 && count($data['data']['product']) > 0){?>
            <nav aria-label="Page navigation example">
                <ul class="pagination t-center">
                    <li class="page-item">
                        <a class="page-link" href="index.php?controller=product&action=allproduct&page=<?=($_GET['page'] > 1) ? $_GET['page']-1 : '1'?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                <?php for($i = 1;$i < $data['data']['page']+1;$i++){?>
                    <li class="page-item" ><a class="page-link <?=($_GET['page'] == $i)? 'acti': ''?>" href="index.php?controller=product&action=allproduct&page=<?=$i?>"><?php echo $i;?></a></li>
                 <?php }?>
                    <li class="page-item">
                        <a class="page-link" href="index.php?controller=product&action=allproduct&page=<?=($_GET['page'] >= 1 && $_GET['page'] + 1 <= $data['data']['page']) ? $_GET['page']+ 1 : '1'?>" aria-label="Previous">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                </li>
                </ul>
            </nav>
        <?php }?>
    <!-- /.container-fluid -->
</div>
