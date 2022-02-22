<?php
use common\helpers\AppHelper;
use yii\helpers\Url;
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        <?php
            if(isset($name)){ ?>
                $('#all-classes').removeClass("active-tab");
                $('#<?=$name?>').addClass("active-tab");
                $('#btn-all-classes').removeClass("active-btn");
                $('#btn-<?=$name?>').addClass("active-btn");
            <?php }
        ?>
    });
</script>
<!-- Preloder -->
<div id="preloder" class="preloader">
    <div class="loader"></div>
</div>
<!-- Εnd Preloader -->

<!--Page Title-->
<section class="page-title" style="background-image:url('../web/images/background/Boxing (10).jpg')">
    <div class="auto-container">
        <h2>Classes</h2>
        <ul class="page-breadcrumb">
            <li><a href="<?= Url::to(['site/index'])?>">home</a></li>
            <li>Classes</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Timing Section -->
<section class="timing-section">
    <div class="auto-container">

        <!-- Timing Info Tabs -->
        <div class="timing-info-tabs">
            <!-- Timing Tabs -->
            <div class="timing-tabs tabs-box">
                <!--Tab Btns-->
                <ul class="tab-btns tab-buttons clearfix">
                    <li data-tab="#all-classes" id="btn-all-classes" class="tab-btn active-btn">ALL CLASS</li>
                    <li data-tab="#mma" id="btn-mma" class="tab-btn">MMA</li>
                    <li data-tab="#bjj-gi" id="btn-all-classes" class="tab-btn">BJJ Gi</li>
                    <li data-tab="#bjj-no-gi" id="btn-bjj-gi" class="tab-btn">BJJ No Gi</li>
                    <li data-tab="#boxing" id="btn-boxing" class="tab-btn">BOXING</li>
                    <li data-tab="#kick-boxing" id="btn-kick-boxing" class="tab-btn">KICKBOXING</li>
                    <li data-tab="#ladies-only" id="btn-ladies-only" class="tab-btn">Ladies ONLY</li>
                    <li data-tab="#bjj-youth" id="btn-bjj-youth" class="tab-btn">BJJ YOUTH</li>
                    <li data-tab="#mma-youth" id="btn-mma-youth" class="tab-btn">MMA YOUTH</li>
                </ul>

                <!-- Tabs Container -->
                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="all-classes">
                        <div class="content">
                            <div class="table-image">
<!--                                <img src="--><?//= Url::to(['web/images/class-schadule/table.jpg'])?><!--" alt="" />-->
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="mma">
                        <div class="content">
                            <div class="table-image">
<!--                                <img src="--><?//= Url::to(['web/images/class-schadule/table.jpg'])?><!--" alt="" />-->
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="bjj-gi">
                        <div class="content">
                            <div class="table-image">
<!--                                <img src="--><?//= Url::to(['web/images/class-schadule/table.jpg'])?><!--" alt="" />-->
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="bjj-no-gi">
                        <div class="content">
                            <div class="table-image">
<!--                                <img src="--><?//= Url::to(['web/images/class-schadule/table.jpg'])?><!--" alt="" />-->
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="boxing">
                        <div class="content">
                            <div class="table-image">
<!--                                <img src="--><?//= Url::to(['web/images/class-schadule/table.jpg'])?><!--" alt="" />-->
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="kick-boxing">
                        <div class="content">
                            <div class="table-image">
<!--                                <img src="--><?//= Url::to(['web/images/class-schadule/table.jpg'])?><!--" alt="" />-->
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="ladies-only">
                        <div class="content">
                            <div class="table-image">
<!--                                <img src="--><?//= Url::to(['web/images/class-schadule/table.jpg'])?><!--" alt="" />-->
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="bjj-youth">
                        <div class="content">
                            <div class="table-image">
<!--                                <img src="--><?//= Url::to(['web/images/class-schadule/table.jpg'])?><!--" alt="" />-->
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="mma-youth">
                        <div class="content">
                            <div class="table-image">
<!--                                <img src="--><?//= Url::to(['web/images/class-schadule/table.jpg'])?><!--" alt="" />-->
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Timing Section -->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

