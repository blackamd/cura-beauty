<?php
use common\helpers\AppHelper;
use yii\helpers\Url;
?>
<!-- Preloder -->
<div id="preloder" class="preloader">
    <div class="loader"></div>
</div>
<!-- Εnd Preloader -->

<!--Page Title-->
<section class="page-title" style="background-image:url('../web/images/background/Boxing (6).jpg')">
    <div class="auto-container">
        <h2>Coaches</h2>
        <ul class="page-breadcrumb">
            <li><a href="<?= Url::to(['site/index'])?>">home</a></li>
            <li>Coaches</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Blog Post Section -->
<section class="blog-post-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Trainers Block -->
            <div class="news-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <a class="overlay-link" href="<?= Url::to(['site/coach-patricia-amanda'])?>"></a>
                    <div class="image">
                        <img src="<?= Url::to(['web/images/trainer/Patricia1.jpg'])?>" alt="" />
                        <div class="content">
                            <h4><a href="<?= Url::to(['site/coach-patricia-amanda'])?>"> Patricia Amanda Furlanetto</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trainers Block -->
            <div class="news-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <a class="overlay-link" href="<?= Url::to(['site/coach-magno-alves'])?>"></a>
                    <div class="image">
                        <img src="<?= Url::to(['web/images/trainer/magno_alves_856_823.jpeg'])?>" alt="" />
                        <div class="content">
                            <h4><a href="<?= Url::to(['site/coach-magno-alves'])?>">Magno Alves</a></h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="lower-text text-center">
            <a href="#" class="view-all">More</a>
        </div>

    </div>
</section>
<!-- End Blog Post Section -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
