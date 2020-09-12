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
                    <h2 class="title">Đổi mật khẩu</h2>
                    <div style="color:red">
                           <?=@$data['data']?>
                    </div>
                    <form id="frm_re_pass" name="frm_re_pass" method="POST" action='mat-khau'>
                    <input class="input--style-1" type="hidden"  name="id" value="<?=$_SESSION['id']?>">
                        <div class="input-group">
                            <input class="input--style-1" id="password" type="password" placeholder="Password" name="password" >
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" id="repass" type="password" placeholder="Nhập lại Password" name="repass" >
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="button" onclick="checkValue()">Cập nhật</button>
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