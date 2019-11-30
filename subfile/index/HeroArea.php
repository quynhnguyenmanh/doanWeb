<?php
$pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
$pdh->query("  set names 'utf8'");
$data = $pdh->query("select * from slider limit 0,5");
$nhac = $data->fetchAll();
foreach ($nhac as $key => $r) {
    ?>
<div class="hero-slides owl-carousel">
    <!-- Single Hero Slide -->
    <div class="single-hero-slide d-flex align-items-center justify-content-center">
        <!-- Slide Img -->
        <div class="slide-img bg-img" style="background-image: url(img/anhslider/<?php echo $r['hinh'] ?>);"></div>

        <!-- Slide Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-slides-content text-center">
                        <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                        <h2 data-animation="fadeInUp" data-delay="300ms">Beyond Time <span>Beyond Time</span></h2>
                        <a data-animation="fadeInUp" data-delay="500ms" href="#" class="btn oneMusic-btn mt-50">Discover
                            <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
        ?>
</div>