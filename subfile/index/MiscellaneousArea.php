<div class="container">
    <div class="row">
        <!-- ***** Weeks Top ***** -->
        <div class="col-12 col-lg-4">
            <div class="weeks-top-area mb-100">
                <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                    <p>See what’s new</p>
                    <h2>This week’s top</h2>
                </div>

                <!-- Single Top Item -->
                <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/wt1.jpg" alt="">
                    </div>
                    <div class="content-">
                        <h6>Sam Smith</h6>
                        <p>Underground</p>
                    </div>
                </div>

                <!-- Single Top Item -->
                <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="150ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/wt2.jpg" alt="">
                    </div>
                    <div class="content-">
                        <h6>Power Play</h6>
                        <p>In my mind</p>
                    </div>
                </div>

                <!-- Single Top Item -->
                <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="200ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/wt3.jpg" alt="">
                    </div>
                    <div class="content-">
                        <h6>Cristinne Smith</h6>
                        <p>My Music</p>
                    </div>
                </div>

                <!-- Single Top Item -->
                <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="250ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/wt4.jpg" alt="">
                    </div>
                    <div class="content-">
                        <h6>The Music Band</h6>
                        <p>Underground</p>
                    </div>
                </div>

                <!-- Single Top Item -->
                <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="300ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/wt5.jpg" alt="">
                    </div>
                    <div class="content-">
                        <h6>Creative Lyrics</h6>
                        <p>Songs and stuff</p>
                    </div>
                </div>

                <!-- Single Top Item -->
                <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="350ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/wt6.jpg" alt="">
                    </div>
                    <div class="content-">
                        <h6>The Culture</h6>
                        <p>Pop Songs</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- ***** New Hits Songs ***** -->
        <div class="col-12 col-lg-4">
            <div class="new-hits-area mb-100">
                <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                    <p>See what’s new</p>
                    <h2>New Hits</h2>
                </div>

                <!-- Single Top Item -->
                <?php
                $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
                $pdh->query("  set names 'utf8'");
                $data = $pdh->query("select * from baihat join casi on baihat.maCaSi=casi.maCaSi limit 0,6");
                $nhac = $data->fetchAll();
                foreach ($nhac as $key => $r) { ?>
                <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                    data-wow-delay="100ms">
                    <div class="first-part d-flex align-items-center">
                        <div class="thumbnail">
                            <img src="img/hinhcasi/<?php echo $r['Hinhcasi'] ?>" alt="">
                        </div>
                        <div class="content-">
                            <h6><?php echo $r['tenBaiHat'] ?></h6>
                            <p><?php echo $r['tenCaSi'] ?></p>
                        </div>
                    </div>
                    <audio preload="auto" controls>
                        <source src="audio/nhac/<?php echo $r['path'] ?>">
                    </audio>
                </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- ***** Popular Artists ***** -->
        <div class="col-12 col-lg-4">
            <div class="popular-artists-area mb-100">
                <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                    <p>See what’s new</p>
                    <h2>Popular Artist</h2>
                </div>

                <!-- Single Artist -->
                <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/pa1.jpg" alt="">
                    </div>
                    <div class="content-">
                        <p>Sam Smith</p>
                    </div>
                </div>

                <!-- Single Artist -->
                <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/pa2.jpg" alt="">
                    </div>
                    <div class="content-">
                        <p>William Parker</p>
                    </div>
                </div>

                <!-- Single Artist -->
                <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/pa3.jpg" alt="">
                    </div>
                    <div class="content-">
                        <p>Jessica Walsh</p>
                    </div>
                </div>

                <!-- Single Artist -->
                <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="250ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/pa4.jpg" alt="">
                    </div>
                    <div class="content-">
                        <p>Tha Stoves</p>
                    </div>
                </div>

                <!-- Single Artist -->
                <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/pa5.jpg" alt="">
                    </div>
                    <div class="content-">
                        <p>DJ Ajay</p>
                    </div>
                </div>

                <!-- Single Artist -->
                <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="350ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/pa6.jpg" alt="">
                    </div>
                    <div class="content-">
                        <p>Radio Vibez</p>
                    </div>
                </div>

                <!-- Single Artist -->
                <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="400ms">
                    <div class="thumbnail">
                        <img src="img/bg-img/pa7.jpg" alt="">
                    </div>
                    <div class="content-">
                        <p>Music 4u</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>