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
                    <li data-tab="#prod-events" class="tab-btn active-btn">ALL CLASS</li>
                    <li data-tab="#prod-cardio" class="tab-btn">MMA</li>
                    <li data-tab="#prod-gross" class="tab-btn">BJJ Gi</li>
                    <li data-tab="#prod-gross" class="tab-btn">BJJ No Gi</li>
                    <li data-tab="#prod-gym" class="tab-btn">BOXING</li>
                    <li data-tab="#prod-power" class="tab-btn">KICKBOXING</li>
                    <li data-tab="#prod-power" class="tab-btn">Ladies ONLY</li>
                    <li data-tab="#prod-power" class="tab-btn">BJJ YOUTH</li>
                    <li data-tab="#prod-power" class="tab-btn">MMA YOUTH</li>
                </ul>

                <!-- Tabs Container -->
                <div class="tabs-content">

                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="prod-events">
                        <div class="content">
                            <div class="table-image">
                                <img src="<?= Url::to(['web/images/class-schadule/table.jpg'])?>" alt="" />
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="prod-cardio">
                        <div class="content">
                            <div class="table-image">
                                <img src="<?= Url::to(['web/images/class-schadule/table.jpg'])?>" alt="" />
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="prod-gross">
                        <div class="content">
                            <div class="table-image">
                                <img src="<?= Url::to(['web/images/class-schadule/table.jpg'])?>" alt="" />
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="prod-gym">
                        <div class="content">
                            <div class="table-image">
                                <img src="<?= Url::to(['web/images/class-schadule/table.jpg'])?>" alt="" />
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="prod-power">
                        <div class="content">
                            <div class="table-image">
                                <img src="<?= Url::to(['web/images/class-schadule/table.jpg'])?>" alt="" />
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

