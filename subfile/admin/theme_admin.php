<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="subfile/admin/theme.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Quản Lý User</h1>
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
                                    <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> 
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
                    <div class="panel-footer">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
</body>

</html>