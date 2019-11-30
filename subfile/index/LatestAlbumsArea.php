<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-heading style-2">
                <p>CÁC THỂ LOẠI</p>
                <h2>TOP 100</h2>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
            <div class="ablums-text text-center mb-70">
                <p>TOP 100 là danh sách 100 bài hát hot nhất thuộc các thể loại nhạc được nghe nhiều nhất trên Website. Danh sách bài hát này được hệ thống tự động đề xuất dựa trên lượt nghe, lượt share, lượt comment v.v của từng bài hát trên tất cả các nền tảng (Web, Mobile web, App). Top 100 sẽ được cập nhật hằng tuần dựa trên các chỉ số có được từ tuần đó. </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="albums-slideshow owl-carousel">
                <?php
                $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
                $pdh->query("  set names 'utf8'");
                $data = $pdh->query("select * from albums join casi on albums.maCaSi=casi.maCaSi limit 0,7");
                $nhac = $data->fetchAll();
                foreach ($nhac as $key => $r) { ?>
                    <!-- Single Album -->
                    <div class="single-album">
                        <img src="img/bg-img/albums/<?php echo $r['artworkPath'] ?>" alt="">
                        <div class="album-info">
                            <a href="page_music.php?id=<?php echo $r['maAlbum']?>">
                                <h5> <?php echo $r['tenAlbum'] ?></h5>
                                <p><?php echo $r['tenCaSi'] ?></p>
                            </a>
                            
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</div>