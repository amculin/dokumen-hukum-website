<section id="slider" class="hero p-0 odd">
    <div class="swiper-container full-slider animation slider-h-100 slider-h-auto">
        <div class="swiper-wrapper">
            <?php foreach ($sliders as $key => $val) { ?>
            <div class="swiper-slide slide-center">
                <img src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($val->image_url); ?>" alt="Full Image" class="full-image" data-mask="40" />

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start inner">
                        <div class="left text-left">
                            <h2 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text"><?= $val->title; ?></h2>
                            <p data-aos="zoom-in" data-aos-delay="2400" class="description"><?= $val->caption; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section id="services" class="section-3 odd offers">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                <span class="pre-title m-auto ml-md-0">Layanan Kami</span>
                <h2>Terdepan dalam <span class="featured"><span>Pelayanan</span></span></h2>
                <p>Kami adalah penyedia jasa layanan konsultasi dan pengurusan berkas legalitas dengan anggota tim yang profesional dan terpercaya.</p>
            </div>
            <!-- <div class="col-12 col-md-3 align-self-end">
                <a href="#" class="btn mx-auto mr-md-0 ml-md-auto outline-button">Lihat Semua</a>
            </div> -->
        </div>
        <div class="row justify-content-center items">
            <?php
            foreach ($services as $key => $val) {
                $url = \Yii::$app->urlManager->createAbsoluteUrl(['site/service', 'slug' => $val->slug])
            ?>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-organization"></i>
                        <h4 style="height: 56px; display: block;"><?= $val->title; ?></h4>
                        <p>Mulai dari Rp 2.500.000,00 anda sudah bisa memiliki perusahaan anda sendiri</p>
                        <a href="<?= $url; ?>" class="btn btn-success">Lihat Detail&nbsp;&nbsp;<i class="fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="blog" class="section-4 carousel showcase">
    <div class="overflow-holder">
        <div class="container">
            <div class="row intro">
                <div class="col-12 col-md-9 align-self-center text-left text-md-left">
                    <h2>Artikel <span class="featured"><span>Terbaru</span></span></h2>
                    <!-- <p>Satu minggu sekali kami menulis artikel.</p> -->
                </div>
                <div class="col-12 col-md-3 align-self-end">
                    <a href="<?= \Yii::$app->urlManager->createAbsoluteUrl(['article/index']); ?>" class="btn mx-auto mr-md-0 ml-md-auto primary-button">Lihat Semua</a>
                </div>
            </div>
            <div class="swiper-container mid-slider items" data-perview="3"> 
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="images/article-1-pixabay-cropped.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea Miller</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2 Days Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>Increasing creativity is possible for everyone</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="images/article-2-pixabay-cropped.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Smith</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>9 Days Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>Because market research is part of the business plan</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="images/article-3-pixabay-cropped.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea Miller</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>16 Days Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>Working from home is now a trend</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="images/news-4.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Smith</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>23 Days Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>Tips for having a good relationship at work</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="images/news-5.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>David Cooper</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>30 Days Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>David Cooper tells about the opening of the new office in Baltimore</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="images/news-1.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea Miller</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2 Days Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>Increasing creativity is possible for everyone</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="images/news-2.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Smith</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>9 Days Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>Because market research is part of the business plan</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="images/news-3.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea Miller</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>16 Days Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>Working from home is now a trend</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="images/news-4.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Smith</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>23 Days Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>Tips for having a good relationship at work</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="images/news-5.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>David Cooper</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>30 Days Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>David Cooper tells about the opening of the new office in Baltimore</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  -->