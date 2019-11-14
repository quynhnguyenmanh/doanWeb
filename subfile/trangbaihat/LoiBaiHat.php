<?php
            $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
            $pdh->query("  set names 'utf8'");
            $id = $_GET['id'];
            $data = $pdh->query("select * from baihat where maBaiHat='$id'");
            $nhac = $data->fetch()
?>
<div class="container">
    <div class="row">
        <h5 style="font-size: 40px;margin-top: -5%;text-decoration:underline;font-family:'Times New Roman', Times, serif;">Lời Bài Hát: </h5>

        <pre style="font-size:large;overflow: scroll;height:500px;width:100%">
        <?php echo $nhac['loinhac'] ?>
        </pre>
    </div>

</div>