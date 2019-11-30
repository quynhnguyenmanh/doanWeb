<?php
if (!isset($_SESSION)) session_start();
//unset($_SESSION['user']);
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
    <section id="home">
        <h2>Home</h2>
    </section>
    <section id="home1">
        <h2>Quản lý file nhạc</h2>
        <p>noi dung </p>
    </section>
    <section id="home2">
        <h2>Home2</h2>
        <p>noi dung </p>
    </section>
    <section id="home3">
        <h2>Quản Lý User</h2><br>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Danh sách các user đã đăng kí</h3>
                                </div>
                                <div class="col col-xs-6 text-right">
                                    <button type="button" class="btn btn-sm btn-primary btn-create">Thêm mới</button>
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
                                    <?php
                                $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
                                $pdh->query("  set names 'utf8'");
                                $data = $pdh->query("select * from users");
                                $nhac = $data->fetchAll();
                                foreach ($nhac as $key => $r)
                                {?>

                                    <tr>
                                        <td align="center">
                                            <a class="btn btn-default" href="edit.php?id=<?php echo $r['id']?>"><em class="fa fa-pencil"></em></a>
                                            <a class="btn btn-danger" href="delete_user.php?id=<?php echo $r['id']?>"><em class="fa fa-trash"></em></a>
                                        </td>
                                        <td class="hidden-xs"><?php echo $r['id'] ?></td>
                                        <td><?php echo $r['ten'] ?></td>
                                        <td><?php echo $r['email'] ?></td>
                                        <td><?php echo $r['taiKhoan'] ?></td>
                                        <td><?php echo $r['matKhau'] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-4">Trang 1 của 5 </div>
                                <div class="col col-xs-8">
                                    <ul class="pagination hidden-xs pull-right">
                                        <li><a href="#">1</a>
                                        </li>
                                        <li><a href="#">2</a>
                                        </li>
                                        <li><a href="#">3</a>
                                        </li>
                                        <li><a href="#">4</a>
                                        </li>
                                        <li><a href="#">5</a>
                                        </li>
                                    </ul>
                                    <ul class="pagination visible-xs pull-right">
                                        <li><a href="#">«</a>
                                        </li>
                                        <li><a href="#">»</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home4">
        <h2>Thông tin Admin</h2>
        <p>noi dung</p>
    </section>
    <section id="home5">
        <h2>Home5</h2>
        <p>noi dung</p>
    </section>
    <script src="js/jquery-1.11.1.min.js"></script>

</body>

</html>