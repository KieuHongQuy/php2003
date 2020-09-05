<?php include_once "classdatabase.php"; ?>
<?php 
    if(isset($_POST['submit'])){
        $list = [
            'hoten' => addslashes($_POST['hoten']),
            'dienthoai' => addslashes($_POST['dienthoai']),
            'email' => addslashes($_POST['email']),
            'ngaysinh' => addslashes($_POST['ngaysinh']),
            'sex' => addslashes($_POST['sex'])
        ];
       $data -> query("update user set hoten ='".$login['user']."' where username='".$_SESSION['user']."'");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    
    <form action="thongtin.php" method="POST" role="form">
        <legend>Form title</legend>
        <div class="form-group">
            <label for="">Họ và Tên</label>
            <input type="text" class="form-control" name="hoten" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Điện thoại</label>
            <input type="text" class="form-control" name="dienthoai" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Ngày sinh</label>
            <input type="date" class="form-control" name="ngaysinh" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Giới tính</label>
            <select name="sex">
            <option value="0">Nam</option>
            <option value="1">Nữ</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>