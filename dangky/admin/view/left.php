<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Admin PHP 2020</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> <?=$_SESSION['username']?></a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="index.php?controller=admin&action=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="index.php?controller=admin&action=index" class="<?=($_GET['controller'] == 'admin' || $_GET['controller'] == 'cart')? 'action':''?>"><i class="fa fa-dashboard fa-fw"></i> Đơn hàng</a>
                </li>
                <li>
                    <a class="<?=($_GET['controller'] == 'product')? 'action':''?>" href="#"><i class="<?=($_GET['controller'] == 'product')? 'action':''?> fa fa-cube fa-fw"></i> Sản phẩm<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="<?=($_GET['controller'] == 'product' && $_GET['action']=='alllist')? 'action':''?>" href="index.php?controller=product&action=alllist">Danh mục sản phẩm 1</a>
                        </li>
                        <li>
                            <a class="<?=($_GET['controller'] == 'product' && $_GET['action']=='allcat')? 'action':''?>" href="index.php?controller=product&action=allcat">Danh mục sản phẩm 2</a>
                        </li>
                        <li>
                            <a class="<?=($_GET['controller'] == 'product' && $_GET['action']=='allitem')? 'action':''?>" href="index.php?controller=product&action=allitem">Danh mục sản phẩm 3</a>
                        </li>
                        <li>
                            <a class="<?=($_GET['controller'] == 'product' && $_GET['action']=='allproduct')? 'action':''?>" href="index.php?controller=product&action=allproduct"> Danh sách sản phẩm</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a class="<?=($_GET['controller'] == 'post')? 'action':''?>" href="index.php?controller=post&action=edit"><i class="fa fa-cube fa-fw"></i> Thông tin công ty<span class="fa arrow"></span></a>
                    <!-- /.nav-second-level -->
                </li>
               <!-- <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">List User</a>
                        </li>
                        <li>
                            <a href="#">Add User</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
    </nav>
