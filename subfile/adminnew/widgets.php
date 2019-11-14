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
                    <form action="" method="get">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="panel panel-default panel-table">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col col-xs-6">
                                                <h3 class="panel-title">Danh sách các user đã đăng kí</h3>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-striped table-bordered table-list">
                                            <thead>
                                                <tr>
                                                    <th><em class="fa fa-cog"></em>
                                                    </th>
                                                    <th class="hidden-xs">Mã số</th>
                                                    <th>Họ tên</th>
                                                    <th>Email</th>
                                                    <th>Tài khoản</th>
                                                    <th>Mật Khẩu</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <a class="btn btn-default" href="create_user.php"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                                <?php
                                $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
                                $pdh->query("set names 'utf8'");
                                $data = $pdh->query("select * from users");
                                $nhac = $data->fetchAll(PDO::FETCH_OBJ);
                                
                                foreach ($nhac as $key => $r)
                                {?>
                                        
                                                <tr>
                                                    <td align="center">
                                                        <a class="btn btn-default"
                                                            href="edit.php?m=<?php echo $r->id?>"><em class="fa fa-pencil"></em></a>
                                                        <a class="btn btn-danger"
                                                            href="subfunction/delete_user.php?id=<?php echo $r->id?>"><em class="fa fa-trash"></em></a>
                                                       
                                                    </td>
                                                    <td class="hidden-xs"><?php echo $r->id;?></td>
                                                    <td><?php echo $r->ten;?></td>
                                                    <td><?php echo $r->email; ?></td>
                                                    <td><?php echo $r->taiKhoan; ?></td>
                                                    <td><?php echo $r->matKhau; ?></td>
                                                </tr>
                                                <?php
                                }
                                ?>

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