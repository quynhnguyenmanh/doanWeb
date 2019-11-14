<?php
 $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
 $pdh->query("  set names 'utf8'");
 $id=$_GET['id'];
 $data = $pdh->query("select * from baihat join casi on baihat.maCaSi=casi.maCaSi where maBaiHat=$id");
 $nhac = $data->fetch();
?>
<div class="bradcumbContent">
            <h2><?php echo $nhac['tenBaiHat'] ?></h2><br>
            <p style="font-size: 20px;"><?php echo $nhac['tenCaSi'] ?></p>
        </div>