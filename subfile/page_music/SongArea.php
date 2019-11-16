<div class="container">
            <div class="row">
                <!-- Single Song Area -->
                <div class="col-12">
                <?php
                $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
                $pdh->query("  set names 'utf8'");
                $id=$_GET['id'];
                $data = $pdh->query("select * from baihat where maAlbum='$id'");
                $nhac = $data->fetchAll();
                foreach ($nhac as $key => $r) 
                { ?>
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/nennhac.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p><?php echo $r['tenBaiHat']?>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/nhac/<?php echo $r['path']?>">
                            </audio>
                        </div>
                    </div>
                    <?php }
                ?>
                </div>
            </div>
           
        </div>