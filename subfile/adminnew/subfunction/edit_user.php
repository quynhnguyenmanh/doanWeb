<?php
$o = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
$ma =$_POST['m'];
$ten=$_POST['ten'];
$email=$_POST['email'];
$tk=$_POST['taiKhoan'];
$mk=$_POST['matKhau'];
$sql="update users set ten=? taiKhoan=? matKhau=? email=? where id= ? ";
$arr = array($ma,$ten,$email,$tk,$mk);
$stm = $o->prepare($sql);
$stm->execute($arr);
$n = $stm->rowCount();

//header("location:read.php");
?>