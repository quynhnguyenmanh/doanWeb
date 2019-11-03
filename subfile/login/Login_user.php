<?php
$pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
$pdh->query("  set names 'utf8'");
if(isset($_POST['login']) )
{
    $name=$_POST['user'];
    $pass=$_POST['password'];
    $data = $pdh->query("select * from users where taiKhoan='$name' and matKhau='$pass'");
    $count=$data->fetchColumn();
    if($count!=0)
    {
        $_SESSION['user']=$name;
        echo "Thanh cong";
    }
    else{
       echo"Login Fail";
    }
}
?>