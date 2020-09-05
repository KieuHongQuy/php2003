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
                        <form method="POST" action="index.php?controller=product&action=updatelist&id=<?=$data['data']['id']?>" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" value="<?=$data['data']['id']?>" placeholder="Please Enter Username" />
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="ten" value="<?=$data['data']['ten']?>" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="img"><br/>
                                <img src="../img/<?=@$data['data']['img']?>" style="width:150px">
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

        