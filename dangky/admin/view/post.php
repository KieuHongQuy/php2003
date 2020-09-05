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
                        <form method="POST" action="index.php?controller=post&action=update" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Giới thiệu công ty</label>
                                <textarea id="gioithieu"  class="ck_editors" name="gioithieu"><?=@$data['gioithieu']['noidung']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Điều khoản</label>
                                <textarea id="dieukhoan"  class="ck_editors" name="dieukhoan"><?=@$data['dieukhoan']['noidung']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Chính sách xử lý thông tin</label>
                                <textarea id="chinhsach" class="ck_editors" name="chinhsach"><?=@$data['chinhsach']['noidung']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Từ chối thư rác</label>
                                <textarea id="tuchoi" class="ck_editors" name="tuchoi"><?=@$data['tuchoi']['noidung']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Chăm sóc khách hàng</label>
                                <textarea id="chamsoc" class="ck_editors" name="chamsoc"><?=@$data['chamsoc']['noidung']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Sơ đồ</label>
                                <textarea id="sodo" class="ck_editors" name="sodo"><?=@$data['sodo']['noidung']?></textarea>
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

        