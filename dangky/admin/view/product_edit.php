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
                        <form method="POST" action="index.php?controller=product&action=update&id=<?=$data['data']['id']?>" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" value="<?=$data['data']['id']?>" placeholder="Please Enter Username" />
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="ten" value="<?=$data['data']['ten']?>" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Danh mục cấp 1</label>
                                <select id="id_list" class="conso form-control" name="id_list">
                                <option value="0">Danh mục cấp 1</option>
                                    <?php foreach($data['list'] as $val){?>
                                        <option value="<?=$val['id']?>" <?=($val['id'] == $data['data']['id_list'])? 'selected': ""?>><?=$val['ten']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="formx">
                            <div class="form-group">
                                <label>Danh mục cấp 2</label>
                                <select id="id_cat" class="conso form-control" name="id_cat" onchange="onchangecat()">
                                    <option value="0">Danh mục cấp 2</option>
                                    <?php foreach($data['id_cat'] as $val){?>
                                        <option value="<?=$val['id']?>" <?=($val['id']==$data['data']['id_cat'])? 'selected': ""?>><?=$val['ten']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group" id="id_item">
                                <label>Danh mục cấp 3</label>
                                <select id="id_item" class="conso form-control" name="id_item">
                                    <option value="0">Danh mục cấp 3</option>
                                    <?php foreach($data['id_item'] as $val){?>
                                        <option value="<?=$val['id']?>" <?=($val['id']==$data['data']['id_item'])? 'selected': ""?>><?=$val['ten']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="conso form-control" name="gia" value="<?=@$data['data']['gia']?>">
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="img"><br/>
                                <img src="../img/<?=@$data['data']['img']?>" style="width:150px">
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows='3' name="mota"><?=@$data['data']['mota']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Thông tin sản phẩm</label>
                                <textarea title="Nhập nội dung" id="noidung"  class="ck_editors" name="noidung"><?=@$data['data']['noidung']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nhận xét sản phẩm</label>
                                <textarea id="nhanxet" class="ck_editors" name="nhanxet"><?=@$data['data']['nhanxet']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Q & A</label>
                                <textarea id="qva" class="ck_editors" name="qva"><?=@$data['data']['qva']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Giao hàng/ Trả hàng/ Đổi hàng</label>
                                <textarea title="Nhập nội dung" id="giaohang"  class="ck_editors" name="giaohang"><?=@$data['data']['giaohang']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Product Status</label>
                                <label class="radio-inline">
                                    <input name="submit" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
                                </label>
                            </div>
                            <div class="form-group">
                            <a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif">
                                <div class="jFiler jFiler-theme-dragdropbox"><div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Upload files here</h3></div><span class="jFiler-input-choose-btn btn-custom blue-light">Browse Files</span></div></div></div>
                            </a>
                                <div class="imgitem">
                                <?php if(count($data['ds_photo'])!=0){?>
                                        <?php for($i=0;$i<count($data['ds_photo']);$i++){?>
                                        <div class="item_trich">
                                            <img class="img_trich" src="../img/<?=$data['ds_photo'][$i]['img']?>" />
                                            <input type="text" rel="<?=$$data['ds_photo'][$i]['id']?>" value="<?=$data['ds_photo'][$i]['stt']?>" class="update_stt tipS" />
                                            <a class="delete_images icon-jfi-trash jFiler-item-trash-action" title="<?=$data['ds_photo'][$i]['id']?>" style="color:#FF0000"></a>
                                        </div>
                                        <?php } ?>
                                <?php }?>
                                </div>
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

        