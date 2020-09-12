<div class="sidenav">
         <div class="login-main-text">
            <h2><a href="">Trang chủ</a></h2>
            <p><a>Đăng ký</a></p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form id="form-dk" method="post" action="dang-ky">
                  <div class="form-group">
                     <label>Tài khoản</label>
                     <input type="text" id="username" name="username" class="form-control" placeholder="Tài khoản">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="button" id="btn-dk" class="btn btn-black">Đăng ký</button>
                  <a href="dang-nhap"><div class="btn btn-secondary">Đăng nhập</div></a>
               </form>
               <div class="form-group">
                     <label style="color:red;padding:10px 0px;"><?=@$data['data']?></label>
               </div>
            </div>
         </div>
      </div>
      <style>

.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}
.sidenav a{
    color:#fff;
}

.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
      </style>