<?php
    $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
    $pdh->query("  set names 'utf8'");
    if(isset($_GET['id']))
    {
    $id=$_GET['id'];
    $data = $pdh->query("delete from users where id='$id'");
    $del = $data->fetch();
    header('location: theme_admin.php');
    }
?>