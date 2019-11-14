<div class="container">
    <div class="row">
        <!-- Single Song Area -->
        <div class="col-12">
            <?php
            $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
            $pdh->query("  set names 'utf8'");
            $id = $_GET['id'];
            $data = $pdh->query("select * from baihat where maBaiHat='$id'");
            $nhac = $data->fetch()
            ?>
            <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                <div class="song-thumbnail">
                    <img src="img/hinhcasi/<?php echo $nhac['Hinhcasi'] ?>" alt="">
                </div>
                <div class="song-play-area">
                    <div class="song-name">
                        <p><?php echo $nhac['tenBaiHat'] ?>
                    </div>
                    <button value="nextbutton" style="width:50px;height:50px;background-color:white;border:0px;border-radius:50%" ><i class="fa fa-fast-forward" aria-hidden="true" style="font-size: 20px;color: blue;"></i></button>
                    <audio id="audio" preload="none" tabindex="0">

                        <source src="audio/nhac/<?php echo $nhac['path'] ?>">
                    </audio>
                </div>
            </div>

        </div>
    </div>

</div>