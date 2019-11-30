<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_genius"></i> Widgets</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                    <li><i class="icon_genius"></i>Widgets</li>
            </div>
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
                                        <button type="button" class="btn btn-sm btn-primary btn-create">Thêm
                                            mới</button>
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
                                                <a class="btn btn-default" href="edit.php?id=<?php echo $r['id']?>"><em
                                                        class="fa fa-pencil"></em></a>
                                                <a class="btn btn-danger"
                                                    href="subfunction/delete_user.php?id=<?php echo $r['id']?>"><em
                                                        class="fa fa-trash"></em></a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- page end-->
    </section>
</section>