<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form method="POST" action="index.php?controller=product&action=insertCat" enctype="multipart/form-data">
                        
                            <div class="form-group">
                                <label>Danh mục cấp 1</label>
                                <select id="id_list" class="conso form-control" name="id_list">
                                <option value="0">Danh mục cấp 1</option>
                                    <?php foreach($data['list'] as $val){?>
                                        <option value="<?=$val['id']?>" <?=($val['id'] == $data['data']['id_list'])? 'selected': ""?>><?=$val['ten']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên danh mục cấp 2</label>
                                <input class="form-control" name="ten" value="<?=$data['data']['ten']?>" placeholder="Please Enter Username" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Product Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

        