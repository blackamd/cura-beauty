<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= Url::to(['../frontend/web/images/1.png'])?>" type="image/x-icon"/>
    <link rel="icon" href="<?= Url::to(['../frontend/web/images/1.png'])?>" type="image/x-icon"/>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <?php $this->registerCsrfMetaTags() ?>
    <title>SFCM</title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!-- Main Header-->
<header class="main-header header-style-one">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="outer-container">
            <div class="inner-container clearfix">

                <!-- Logo Box -->
                <div class="logo-box">
<!--                    <div class="logo"><a href="--><?//= Url::to(['site/index'])?><!--"><img src="--><?//= Url::to(['../frontend/web/images/2.png'])?><!--" alt="" title=""></a></div>-->
                </div>

                <!-- Logo -->
                <div class="mobile-logo pull-left">
<!--                    <a href="--><?//= Url::to(['site/index'])?><!--" title=""><img src="--><?//= Url::to(['../frontend/web/images/3.png'])?><!--" alt="" title=""></a>-->
                </div>

                <!-- Header Social Box -->
                <div class="header-social-box clearfix">
                    <a href="https://www.facebook.com/readyfightsystem" class="fa fa-facebook"></a>
                    <a href="https://instagram.com/readyfightsystemegypt?r=nametag" class="fa fa-instagram"></a>
                </div>

                <div class="outer-box clearfix">

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                        <div class="nav-btn"><button class="hidden-bar-opener">Menu</button></div>
                    </div>
                    <!-- / Hidden Nav Toggler -->

                </div>

                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon"><img src="<?= Url::to(['../frontend/web/images/icons/burger.svg'])?>" alt="" /></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="<?= Url::to(['site/index'])?>">Home</a></li>
                                <li><a href="<?= Url::to(['site/about'])?>">About Us</a></li>
<!--                                <li class="dropdown"><a href="#">About Us</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="--><?//= Url::to(['site/about'])?><!--">About Us</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/time-table'])?><!--">Time Table</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/comming-soon'])?><!--">Comming Soon</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/body-builder'])?><!--">Section Page 01</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/body-builder-two'])?><!--">Section Page 02</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
                                <li><a href="<?= Url::to(['site/all-trainers'])?>">Coaches</a></li>
<!--                                <li class="dropdown"><a href="#">Trainers</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="--><?//= Url::to(['site/trainer'])?><!--">Trainer 01</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/trainer-two'])?><!--">Trainer 02</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
                                <li><a href="<?= Url::to(['site/classes'])?>">Classes</a></li>
<!--                                <li class="dropdown"><a href="#">Shop</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="--><?//= Url::to(['site/shop-left'])?><!--">Shop Left Sidebar</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/shop-right'])?><!--">Shop Right Sidebar</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/shop-single'])?><!--">Product Single</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/shopping-cart'])?><!--">Shopping Cart</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/checkout'])?><!--">Checkout</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown"><a href="#">Blog</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="--><?//= Url::to(['site/blog'])?><!--">Our Blog</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/blog-classic'])?><!--">Blog Classic</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/blog-detail'])?><!--">Blog Detail One</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/blog-detail-two'])?><!--">Blog Detail Two</a></li>-->
<!--                                        <li><a href="--><?//= Url::to(['site/not-found'])?><!--">Not Found</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
                                <li><a href="<?= Url::to(['site/contact'])?>">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>

                </div>

            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="<?= Url::to(['site/index'])?>" title=""><img src="<?= Url::to(['../frontend/web/images/3.png'])?>" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo">
                <a href="<?= Url::to(['site/index'])?>" title=""><img src="<?= Url::to(['../frontend/web/images/2.png'])?>" alt="" title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>

    </div>
    <!-- End Mobile Menu -->

</header>
<!-- End Main Header -->

<!-- FullScreen Menu -->
<div class="fullscreen-menu">
    <!--Close Btn-->
    <div class="close-menu"><span>Close</span></div>

    <div class="menu-outer-container">
        <div class="menu-box">
            <nav class="full-menu">
                <ul class="navigation">
                    <li><a href="<?= Url::to(['site/index'])?>">Home</a></li>
                    <li><a href="<?= Url::to(['site/about'])?>">About Us</a></li>
<!--                    <li class="dropdown"><a href="#">About Us</a>-->
<!--                        <ul>-->
<!--                            <li><a href="--><?//= Url::to(['site/about'])?><!--">About Us</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/time-table'])?><!--">Time Table</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/comming-soon'])?><!--">Comming Soon</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/body-builder'])?><!--">Section Page 01</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/body-builder-two'])?><!--">Section Page 02</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                    <li><a href="<?= Url::to(['site/all-trainers'])?>">Coaches</a></li>
<!--                    <li class="dropdown"><a href="#">Trainers</a>-->
<!--                        <ul>-->
<!--                            <li><a href="--><?//= Url::to(['site/trainer'])?><!--">Trainer 01</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/trainer-two'])?><!--">Trainer 02</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                    <li><a href="<?= Url::to(['site/classes'])?>">Classes</a></li>
<!--                    <li class="dropdown"><a href="#">Shop</a>-->
<!--                        <ul>-->
<!--                            <li><a href="--><?//= Url::to(['site/shop-left'])?><!--">Shop Left Sidebar</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/shop-right'])?><!--">Shop Right Sidebar</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/shop-single'])?><!--">Product Single</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/shopping-cart'])?><!--">Shopping Cart</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/checkout'])?><!--">Checkout</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="dropdown"><a href="#">Blog</a>-->
<!--                        <ul>-->
<!--                            <li><a href="--><?//= Url::to(['site/blog'])?><!--">Our Blog</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/blog-classic'])?><!--">Blog Classic</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/blog-detail'])?><!--">Blog Detail One</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/blog-detail-two'])?><!--">Blog Detail Two</a></li>-->
<!--                            <li><a href="--><?//= Url::to(['site/not-found'])?><!--">Not Found</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                    <li><a href="<?= Url::to(['site/contact'])?>">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- End FullScreen Menu -->

<?= $content ?>

<!-- Main Footer -->
<footer class="main-footer" style="background-image:url(../web/images/background/2.jpg)">
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="<?= Url::to(['site/index'])?>"><img src="<?= Url::to(['../frontend/web/images/3.png'])?>" alt="" /></a>
                                </div>
                                <!-- Footer Mobile Logo -->
                                <div class="footer-mobile-logo">
                                    <a href="<?= Url::to(['site/index'])?>"><img src="<?= Url::to(['../frontend/web/images/2.png'])?>" alt="" title=""></a>
                                </div>
                                <ul class="info-list">
                                    <li><span>Head Office: USA</span>8033 Biscayne Blvd Miami Beach, Florida</li>
                                    <li><span>Phone:</span>
                                        <a href="tel:+1 8637973785">+1 8637973785</a>
                                    </li>
                                    <li><span>Egypt Address:</span>Street 216, Victory College, Degla, Maadi District, Cairo</li>
                                    <li><span>Phone:</span>
                                        <a href="tel:+201011009009">+20 1011009009</a>
                                    </li>
                                    <li><span>Working Hours:</span>Sunday-Saturday: 08:00 - 24:00</li>
                                    <li><span>Email:</span><a href="mailto:oss@readyfightsystem.com">oss@readyfightsystem.com</a></li>
                                    <li class="social-links"><span>Our Socials:</span>
                                        <a href="https://www.facebook.com/readyfightsystem" class="fa fa-facebook"></a>
                                        <a href="https://instagram.com/readyfightsystemegypt?r=nametag" class="fa fa-instagram"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <h6>BLOG POSTS</h6>
                                <div class="widget-content">

                                    <div class="post">
                                        <div class="thumb"><a href="<?= Url::to(['site/article-marcos'])?>"><img src="<?= Url::to(['../frontend/web/images/background/marcos1.jpg'])?>" alt=""></a></div>
                                        <h5><a href="<?= Url::to(['site/article-marcos'])?>">RFS “ Ready Fight System ” Founder</a></h5>
                                        <span class="date">January 25, 2022</span>
                                    </div>

                                    <div class="post">
                                        <div class="thumb"><a href="<?= Url::to(['site/article-what-is-jiu-jitsu'])?>"><img src="<?= Url::to(['../frontend/web/images/background/BJJ 4.jpg'])?>" alt=""></a></div>
                                        <h5><a href="<?= Url::to(['site/article-what-is-jiu-jitsu'])?>">What is Jiu-Jitsu ?</a></h5>
                                        <span class="date">February 03, 2022</span>
                                    </div>

                                    <div class="post">
                                        <div class="thumb"><a href="<?= Url::to(['site/article-jiu-jitsu-benefit'])?>"><img src="<?= Url::to(['../frontend/web/images/background/jiu-jutsu2.png'])?>" alt=""></a></div>
                                        <h5><a href="<?= Url::to(['site/article-jiu-jitsu-benefit'])?>">Jiu-Jitsu Benefits</a></h5>
                                        <span class="date">February 06, 2022</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <?php
                //https://graph.instagram.com/me/media?fields=id,media_type,media_url&access_token=IGQVJYckd0RElzYTExSlFHUy12LVE0LUhCYUJ3NWtTMTczSHZAPTkdCNkhydVR5cS1IN3dRYnd1UGVtM2ptNVBhUUdXMGRDU3JIU2xPYTZA5eTZATTFdiSmUtQ3ZAxUUQ2Mi1JVUNYeVZAsNW9pUTZATcnRnNwZDZD
                function rudr_instagram_api_curl_connect( $api_url ){
                    $connection_c = curl_init(); // initializing
                    curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
                    curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
                    curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
                    $json_return = curl_exec( $connection_c ); // connect and get json data
                    curl_close( $connection_c ); // close connection
                    return json_decode( $json_return ); // decode and return
                }
                $access_token = 'IGQVJYckd0RElzYTExSlFHUy12LVE0LUhCYUJ3NWtTMTczSHZAPTkdCNkhydVR5cS1IN3dRYnd1UGVtM2ptNVBhUUdXMGRDU3JIU2xPYTZA5eTZATTFdiSmUtQ3ZAxUUQ2Mi1JVUNYeVZAsNW9pUTZATcnRnNwZDZD';
                $user_search = rudr_instagram_api_curl_connect("https://graph.instagram.com/me/media?fields=id,media_type,media_url&access_token=" . $access_token);
                ?>
                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h6>Instagram</h6>
                                <div class="widget-content">

                                    <div class="images-outer clearfix">
                                        <?php
                                            $limit = 9;
                                            $counter = 1;
                                            foreach ($user_search->data as $post) {
                                                if ($counter <= 9){
                                                    $counter++; ?>
                                                    <figure class="image-box"><a href="<?=$post->media_url?>" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="<?=$post->media_url?>" alt="" width="80px" height="80px"></a></figure>
                                            <?php
                                                }else{
                                                    break;
                                                }
                                            }
                                        ?>
<!--                                        <figure class="image-box"><a href="--><?//= Url::to(['../frontend/web/images/instagram/1.jpg'])?><!--" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="--><?//= Url::to(['../frontend/web/images/instagram/thumb/footer-gallery-thumb-1.jpg'])?><!--" alt=""></a></figure>-->
<!--                                        <figure class="image-box"><a href="--><?//= Url::to(['../frontend/web/images/instagram/2.jpg'])?><!--" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="--><?//= Url::to(['../frontend/web/images/instagram/thumb/footer-gallery-thumb-2.jpg'])?><!--" alt=""></a></figure>-->
<!--                                        <figure class="image-box"><a href="--><?//= Url::to(['../frontend/web/images/instagram/3.jpg'])?><!--" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="--><?//= Url::to(['../frontend/web/images/instagram/thumb/footer-gallery-thumb-3.jpg'])?><!--" alt=""></a></figure>-->
<!--                                        <figure class="image-box"><a href="--><?//= Url::to(['../frontend/web/images/instagram/4.jpg'])?><!--" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="--><?//= Url::to(['../frontend/web/images/instagram/thumb/footer-gallery-thumb-4.jpg'])?><!--" alt=""></a></figure>-->
<!--                                        <figure class="image-box"><a href="--><?//= Url::to(['../frontend/web/images/instagram/5.jpg'])?><!--" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="--><?//= Url::to(['../frontend/web/images/instagram/thumb/footer-gallery-thumb-5.jpg'])?><!--" alt=""></a></figure>-->
<!--                                        <figure class="image-box"><a href="--><?//= Url::to(['../frontend/web/images/instagram/6.jpg'])?><!--" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="--><?//= Url::to(['../frontend/web/images/instagram/thumb/footer-gallery-thumb-6.jpg'])?><!--" alt=""></a></figure>-->
<!--                                        <figure class="image-box"><a href="--><?//= Url::to(['../frontend/web/images/instagram/7.jpg'])?><!--" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="--><?//= Url::to(['../frontend/web/images/instagram/thumb/footer-gallery-thumb-7.jpg'])?><!--" alt=""></a></figure>-->
<!--                                        <figure class="image-box"><a href="--><?//= Url::to(['../frontend/web/images/instagram/8.jpg'])?><!--" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="--><?//= Url::to(['../frontend/web/images/instagram/thumb/footer-gallery-thumb-8.jpg'])?><!--" alt=""></a></figure>-->
<!--                                        <figure class="image-box"><a href="--><?//= Url::to(['../frontend/web/images/instagram/9.jpg'])?><!--" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="--><?//= Url::to(['../frontend/web/images/instagram/thumb/footer-gallery-thumb-9.jpg'])?><!--" alt=""></a></figure>-->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h6>Newsletter</h6>
                                <div class="text">RFS – fitness health center where your body gets its shape! Start training now to stay fit and healthy all year round!</div>
                                <!-- Newsletter Form -->
                                <div class="newsletter-form">
                                    <form method="post" action="<?= Url::to(['site/contact'])?>">
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Email" required="">
                                            <button type="submit" class="theme-btn submit-btn"><span><img src="<?= Url::to(['../frontend/web/images/icons/message-icon.png'])?>" alt="" /></span></button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="copyright">Provided BY GYM TOUR. 2022</div>
        </div>

    </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
