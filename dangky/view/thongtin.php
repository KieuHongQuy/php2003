<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Thông tin cá nhân</h2>
                    <form id="form-thongtin" method="POST" action='update-form'>
                    <input class="input--style-1" type="hidden"  name="id" value="<?=$data['data']['id']?>">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Họ tên" name="hoten" value="<?=$data['data']['hoten']?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" id="email" type="text" placeholder="Email" name="email" value="<?=$data['data']['email']?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" id="dienthoai" type="text" placeholder="Điện thoại" name="dienthoai" value="<?=$data['data']['dienthoai']?>">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gioitinh">
                                    <option value="1" <?=($data['data']['gioitinh'] == 1)? "selected": ""?>>Nam</option>
                                    <option value="2" <?=($data['data']['gioitinh'] == 2)? "selected": ""?>>Nữ</option>
                                    <option value="3" <?=($data['data']['gioitinh'] == 3)? "selected": ""?>>Khác</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button id="btn-thongtin" class="btn btn--radius btn--green" type="button">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>