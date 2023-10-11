<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider animation slider-h-50 slider-h-auto swiper-container-initialized
        swiper-container-horizontal">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center swiper-slide-active" style="width: 1903px;">

                <!-- Media -->
                <img src="images/our-meeting.jpg" alt="Full Image" class="full-image" data-mask="80">

                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">

                        <!-- Content -->
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb"
                            class="aos-init aos-animate">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 title effect-static-text">About Us</h1>
                    </div>
                </div>
            </div>

        </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</section>

<section id="about" class="section-1 highlights team image-right">
    <div class="container">
        <div class="row">
            <div class="col-12 align-self-top text">
                <div class="row intro m-0">
                    <div class="col-12 p-0">
                        <h2>
                            <span>
                                <span class="featured"><?= explode(' ', $data->title)[0]; ?></span>
                                <?= explode(' ', $data->title)[1]; ?>
                            </span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0 pr-md-5">
                        <?= $data->content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
