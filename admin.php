<?php
$pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
$pdh->query("  set names 'utf8'");
if(isset($_POST['login']) )
{
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $data = $pdh->query("select * from admin where user='$name' and password='$pass'");
    $count=$data->fetchColumn();
    if($count=="1")
    {
        $_SESSION['username']=$name;
        header('location: subfile/admin/index_ad.php');
    }
    else{
       echo"Login Fail";
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style_admin.css">
    <title>Admin</title>
</head>

<body>
    <div class="box">
        <h2>ADMIN</h2>
        <form action="" method="POST">
            <div class="inputBox">
                <input type="text" name="username" required="">
                <label for="">Username</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="">
                <label for="">Password</label>
            </div>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>

</html>