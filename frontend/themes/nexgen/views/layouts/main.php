<?php

use common\models\Setting;
use frontend\assets\MainAsset;
use yii\helpers\Html;

MainAsset::register($this);

$favicon = Setting::get('favicon');

$this->beginPage();
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

        <title><?= Html::encode($this->title) ?></title>

        <meta name="description" content="Business, Consulting, Finance, Insurance, Startup and Technology">
        <meta name="subject" content="Business, Consulting, Finance, Insurance, Startup and Technology">
        <meta name="author" content="Codings">

        <link rel="shortcut icon" href="<?php echo $favicon; ?>">
        <link rel="apple-touch-icon" href="<?php echo $favicon; ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $favicon; ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $favicon; ?>">

        <?php $this->head() ?>

        <meta name="theme-color" content="#21333e">

        <style>
            :root {
                --hero-bg-color: #080d10;
                
                --section-1-bg-color: #ffffff;
                --section-2-bg-color: #111117;
                --section-3-bg-color: #000000;
                --section-4-bg-color: #ffffff;
                --section-5-bg-color: #eef4ed;
                --section-6-bg-color: #111117;
                --section-7-bg-color: #ffffff;

                --footer-bg-color: #080d10; --footer-bg-image: url('/assets/images/bg-7.jpg');
            }
        </style>
    </head>

    <body class="home">
    <?php $this->beginBody() ?>
        <div id="preloader" data-timeout="2000" class="odd preloader counter">
            <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
            </div>
        </div>

        <header id="header">
            <nav class="navbar navbar-expand top">
                <div class="container header">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-phone-alt mr-2"></i><?php echo Setting::get('phone_number'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-envelope mr-2"></i><?php echo Setting::get('address'); ?></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-expand navbar-fixed sub">
                <div class="container header">

                    <a class="navbar-brand" href="/">
                        <img src="<?php echo Setting::get('logo'); ?>" alt="NEXGEN">
                    </a>

                    <div class="ml-auto"></div>

                    <ul class="navbar-nav items">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">LAYANAN <i class="icon-arrow-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="layanan/layanan-1" class="nav-link">Layanan 1</a></li>
                                <li class="nav-item"><a href="layanan/layanan-2" class="nav-link">Layanan 2</a></li>
                                <li class="nav-item"><a href="layanan/layanan-3" class="nav-link">Layanan 3</a></li>
                                <li class="nav-item"><a href="layanan/layanan-4" class="nav-link">Layanan 4</a></li>
                                <li class="nav-item"><a href="layanan/layanan-5" class="nav-link">Layanan 5</a></li>
                                <li class="nav-item"><a href="layanan/layanan-6" class="nav-link">Layanan 6</a></li>
                                <li class="nav-item"><a href="layanan/layanan-7" class="nav-link">Layanan 7</a></li>
                                <li class="nav-item"><a href="layanan/layanan-8" class="nav-link">Layanan 8</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">TENTANG KAMI</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">KONTAK KAMI</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">BLOG</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                                <i class="icon-magnifier"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
        <?= $content; ?>

        <footer>
            <section id="footer" class="odd offers">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 footer-left">

                            <a class="navbar-brand" href="/">
                                <span class="brand">
                                    <span class="featured">
                                        <span class="first">NEX</span>
                                    </span>
                                    <span class="last">GEN</span>
                                </span>
                            </a>
                            <p>A Functional HTML Template<br>for Corporate & Business.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +1 (305) 1234-5678
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        hello@example.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="mt-4 btn outline-button smooth-anchor">GET IN TOUCH</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-9 p-0 footer-right">
                            <div class="row items">
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>About</h4>
                                        <a href="#"><i class="icon-arrow-right"></i>The Company</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Institutional</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Social & Events</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Innovation</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Environment</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Technology</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>Services</h4>
                                        <a href="#"><i class="icon-arrow-right"></i>Audit & Assurance</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Financial Advisory</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Analytics M&A</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Middle Marketing</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Legal Consulting</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Regulatory Risk</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>Support</h4>
                                        <a href="#"><i class="icon-arrow-right"></i>Responsibility</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Terms of Use</a>
                                        <a href="#"><i class="icon-arrow-right"></i>About Cookies</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Privacy Policy</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Accessibility</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Information</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Copyright -->
            <section id="copyright" class="p-3 odd copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                            <p>Enjoy the low price. We are tracking any intention of piracy.</p>
                            <!--
                                Suggestion: Replace the text above with a description of your website.
                             -->
                        </div>
                        <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                            <p>© 2021 dokumenhukum.com, crafted by FIT-FAT</p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>

        <!-- Modal [search] -->
        <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <h2>What are you looking for?</h2>
                                        <div class="badges">
                                            <span class="badge"><a href="#">Consulting</a></span>
                                            <span class="badge"><a href="#">Audit</a></span>
                                            <span class="badge"><a href="#">Assurance</a></span>
                                            <span class="badge"><a href="#">Advisory</a></span>
                                            <span class="badge"><a href="#">Financial</a></span>
                                            <span class="badge"><a href="#">Capital Markets</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Enter Keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [sign] -->
        <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form action="/" class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Sign In</h2>
                                        <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">SIGN IN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [register] -->
        <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form action="/" class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Register</h2>
                                        <p>Have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">REGISTER</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [map] -->
        <div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header absolute" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15809.906017494179!2d110.4142924!3d-7.845092949999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57bd3f1591d7%3A0x3ccfa383840b396a!2sTerminal%20Giwangan%20Yogyakarta!5e0!3m2!1sid!2sid!4v1625065715826!5m2!1sid!2sid" width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>