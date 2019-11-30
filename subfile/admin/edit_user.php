<?php
    $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
    $pdh->query("  set names 'utf8'");
    if(isset($_POST['id']))
    {
    $id=$_POST['id'];
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $taikhoan = $_POST['taiKhoan'];
    $matkhau = $_POST['matKhau'];
    $data = $pdh->query("update users set ten='$ten' email='$email' taiKhoan='$taikhoan' matKhau='$matkhau' where id='$id'");
    $update = $data->fetch();
    print_r($update);
    $count=$data->rowCount();
    if($count!=0)
    {   
        $_POST["ten"]=$update['ten'];
        // echo $_SESSION['user'];
    }
    
    }
?>