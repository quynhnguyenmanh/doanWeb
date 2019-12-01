<?php
//unset($_SESSION['user']);
$pdh = new PDO("mysql:host=localhost; dbname=db_nhac", 'root', '');
$pdh->query("  set names 'utf8'");
$ma = isset($_POST['m'])?$_POST['m']:'';
$ten = isset($_POST['t'])?$_POST['t']:'';
$email = isset($_POST['e'])?$_POST['e']:'';
$taikhoan = isset($_POST['tk'])?$_POST['tk']:'';
$matkhau = isset($_POST['mk'])?$_POST['mk']:'';
$sql="insert into users(ten,email,taiKhoan,matKhau) values(?,?,?,?)";
$arr = array($ma, $ten, $email, $taikhoan, $matkhau);
$data = $pdh->prepare($sql);
$data->execute($arr);                                             
?>