<?php
                $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
                $pdh->query("  set names 'utf8'");
                $id=$_GET['id'];
                $data = $pdh->query("select * from hinhcasi where id='$id'");
                $nhac = $data->fetch();
?>
<div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="adds">
                        <a href="#"><img src="img/hinhnennhac/<?php echo $nhac['hinhcasi']?>" alt="" ></a>
                    </div>
                </div>
            </div>
        </div>