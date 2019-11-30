<?php
if (!isset($_SESSION)) session_start();
//unset($_SESSION['user']);
$pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
$pdh->query("  set names 'utf8'");
$id=$_GET['id'];
$data = $pdh->query("select * from users where id=$id");
$nhac = $data->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="theme.css">
    <link rel="stylesheet" href="themeAd.css">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <p><?php echo "Hi admin, " .$_SESSION['username']?></p>
        
    </nav>

    <input type="checkbox" name="" checked="">
    <span class="icon"></span>
    <ul>
        <li><a href="#home">Home<i class="fa fa-home" aria-hidden="true" id="H"></i></a></li>
        <li><a href="#home1">Quản lý file nhạc<i class="fa fa-music" aria-hidden="true" id="M"></i></a></li>
        <li><a href="#home2">Quản lý sự kiện<i class="fa fa-calendar-o" aria-hidden="true" id="E"></i></a></li>
        <li><a href="#home3">Quản Lý User<i class="fa fa-users" aria-hidden="true" id="U"></i></a></li>
        <li><a href="#home4">Thông tin user</a></li>
        <li><a href="#home5">Home5</a></li>
    </ul>
    <section id="home3">
        <h2>Quản Lý User</h2><br>
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
                                    <button type="button" class="btn btn-sm btn-primary btn-create" href="edit_user.php">Cập nhật</button>
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
                                foreach ($nhac as $key => $r)
                                {?>
                                    <tr>
                                        <td class="hidden-xs"><?php echo $r['id'] ?></td>
                                        <td><input type="text" name="ten" value="<?php echo $r['ten']?>"></td>
                                        <td><input type="text" name="email" value="<?php echo $r['email']?>"></td>
                                        <td><input type="text" name="taiKhoan"value="<?php echo $r['taiKhoan']?>"></td>
                                        <td><input type="text" name="matKhau"value="<?php echo $r['matKhau']?>"></td>
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
    </section>
    <script src="js/jquery-1.11.1.min.js"></script>

</body>

</html>