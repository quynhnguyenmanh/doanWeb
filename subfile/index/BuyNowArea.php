<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="section-heading style-2">
                <p>See what’s new</p>
                <h2>Buy What’s New</h2>
            </div>
        </div>
    </div>
    <h1>Nhắn Gửi Yêu Thương </h1>
    <div class="row ">
        <?php
        $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
        $pdh->query("  set names 'utf8'");
        $data = $pdh->query("select * from albums limit 0,6");
        $nhac = $data->fetchAll();
        foreach ($nhac as $key => $r) {
            ?>
        <!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 ">
            <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                <div class="album-thumb">
                    <img src="img/bg-img/albums/<?php echo $r['artworkPath'] ?>" alt="">
                    <!-- Album Price -->
                    <div class="album-price">
                        <p>$0.90</p>
                    </div>
                    <!-- Play Icon -->
                    <div class="play-icon">
                        <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                    </div>
                </div>
                <div class="album-info">
                    <a href="#">
                        <h5>Garage Band</h5>
                    </a>
                    <p>Radio Station</p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</div>