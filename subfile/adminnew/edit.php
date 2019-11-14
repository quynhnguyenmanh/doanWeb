<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Widgets | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!-- external css -->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- php5 shim and Respond.js IE8 support of php5 -->
    <!--[if lt IE 9]>
      <script src="js/php5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-php-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
    <!-- container section start -->
    <section id="container" class="">
        <!--header start-->
        <?php
        include("../../subfile/adminnew/model/index/header.php");
        ?>
        <!--header end-->

        <!--sidebar start-->
        <?php
        include("../../subfile/adminnew/model/index/sidebar.php");
        ?>
        <!--sidebar end-->

        <!--main content start-->

        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="icon_genius"></i> Widgets</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                            <li><i class="icon_genius"></i>Widgets</li>
                    </div>
                    <form action="subfunction/edit_user.php" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="panel panel-default panel-table">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col col-xs-6">
                                                    <h3 class="panel-title">Điền thông tin cần cập nhật</h3>
                                                </div>
                                                <div class="col col-xs-6 text-right">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-striped table-bordered table-list">
                                                <thead>
                                                    <tr>
                                                        <th class="hidden-xs">Mã số</th>
                                                        <th>Họ tên</th>
                                                        <th>Email</th>
                                                        <th>Tài khoản</th>
                                                        <th>Mật Khẩu</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    //unset($_SESSION['user']);
                                                    $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
                                                    $pdh->query("  set names 'utf8'");
                                                    print_r($_GET);
                                                    $id = $_GET['m'];
                                                    $data = $pdh->prepare("select * from users where id= ?");
                                                    $data->execute(array($id));
                                                    $nhac = $data->fetch(PDO::FETCH_ASSOC);
                                                    ?>
                                                    <tr>
                                                        <form action="subfunction/edit_user.php" method="post">
                                                            <input type="submit" value="sua">
                                                            <td><input type="text" name="m" value="<?php echo $nhac['id'] ?>">
                                                            </td>
                                                            <td><input type="text" name="ten" value="<?php echo $nhac['ten'] ?>">
                                                            </td>
                                                            <td><input type="text" name="email" value="<?php echo $nhac['email'] ?>"></td>
                                                            <td><input type="text" name="taiKhoan" value="<?php echo $nhac['taiKhoan'] ?>"></td>
                                                            <td><input type="text" name="matKhau" value="<?php echo $nhac['matKhau'] ?>"></td>
                                                        </form>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <!-- page end-->
            </section>
        </section>

        <!--main content end-->

    </section>
    <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

    <script>
        //knob
        $(".knob").knob();
    </script>

</body>

</html>