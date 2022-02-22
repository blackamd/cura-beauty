<?php

use common\helpers\AppHelper;
use yii\helpers\Url;


?>


<div class="page-wrapper">

    <!-- Preloder -->
    <div id="preloder" class="preloader">
        <div class="loader"></div>
    </div>
    <!-- Εnd Preloader -->

	<!-- Banner Section -->
    <section class="banner-section">
		<div class="main-slider-carousel owl-carousel owl-theme">
            
<!--			<div class="slide">-->
<!--				<div class="image-layer" style="background-image:url('../web/images/background/Functional Training (1).jpg')"></div>-->
<!--				<div class="auto-container">-->
<!--					<div class="content-boxed">-->
<!--						<div class="inner-boxed">-->
<!--							<h1>READY FIGHT SYSTEM <span>INTEGRITY & DISCIPLINE</span></h1>-->
<!--							<div class="text">RFS – fitness health center where your body gets its shape! <br> Start training now to stay fit and healthy all year round!</div>-->
<!--							<div class="btns-box">-->
<!--								<div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S FIGHT</span></div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				-->
<!--			</div>-->
			
			<div class="slide">
				<div class="image-layer" style="background-image:url('../web/images/background/Boxing (10).jpg')"></div>
				<div class="auto-container">
					<!-- Content Boxed -->
					<div class="content-boxed">
						<div class="inner-boxed">
							<h1>READY FIGHT SYSTEM <span>INTEGRITY & DISCIPLINE</span></h1>
<!--							<div class="text">RFS – fitness health center where your body gets its shape! <br> Start training now to stay fit and healthy all year round!</div>-->
							<div class="btns-box">
								<div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S FIGHT</span></div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="slide">
				<div class="image-layer" style="background-image:url('../web/images/background/Kickboxing 1 (2).jpg')"></div>
				<div class="auto-container">
					<!-- Content Boxed -->
					<div class="content-boxed">
						<div class="inner-boxed">
							<h1>READY FIGHT SYSTEM <span>INTEGRITY & DISCIPLINE</span></h1>
<!--							<div class="text">RFS – fitness health center where your body gets its shape! <br> Start training now to stay fit and healthy all year round!</div>-->
							<div class="btns-box">
								<div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S FIGHT</span></div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="slide">
				<div class="image-layer" style="background-image:url('../web/images/background/MMA 2.jpg')"></div>
				<div class="auto-container">
					<!-- Content Boxed -->
					<div class="content-boxed">
						<div class="inner-boxed">
							<h1>READY FIGHT SYSTEM <span>INTEGRITY & DISCIPLINE</span></h1>
<!--							<div class="text">RFS – fitness health center where your body gets its shape! <br> Start training now to stay fit and healthy all year round!</div>-->
							<div class="btns-box">
								<div class="theme-btn purchase-box-btn btn-style-one"><span class="txt">LET’S FIGHT</span></div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		
		</div>
		
		<!--Scroll Dwwn Btn-->
        <div class="mouse-btn-down scroll-to-target" data-target=".testimonial-section">
            <span class="icon"><img src="<?= Url::to(['web/images/icons/scroll.png'])?>" alt="" /></span>
		</div>
		
	</section>
	<!-- End Banner Section -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<div class="inner-container">
				<span class="quote-left flaticon-quote-3"></span>
				<span class="quote-right flaticon-quote-4"></span>
					
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="text">IF YOU WANT TO BE A CHAMPION, YOU      NEED TO TRAIN LIKE ONE</div>
					</div>
				</div>
					
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- Services Section -->
	<section class="services-section">
		<div class="outer-container">
			<div class="clearfix">
                <!-- Service Block -->
                <div class="service-block col-lg-2 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="<?= Url::to(['site/classes','name'=>'mma'])?>" class="overlay-link"></a>
                            <img src="<?= Url::to(['web/images/background/MMA.jpg'])?>" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/classes','name'=>'mma'])?>">MMA</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Service Block -->
                <div class="service-block col-lg-2 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="<?= Url::to(['site/classes','name'=>'bjj-gi'])?>" class="overlay-link"></a>
                            <img src="<?= Url::to(['web/images/background/BJJ 10.jpg'])?>" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/classes','name'=>'bjj-gi'])?>">BJJ</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-2 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="<?= Url::to(['site/classes','name'=>'boxing'])?>" class="overlay-link"></a>
                            <img src="<?= Url::to(['web/images/background/Boxing (15).jpg'])?>" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/classes','name'=>'boxing'])?>">BOXING</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-2 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="<?= Url::to(['site/classes','name'=>'kick-boxing'])?>" class="overlay-link"></a>
                            <img src="<?= Url::to(['web/images/background/Kickboxing 1 (5).jpg'])?>" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/classes','name'=>'kick-boxing'])?>">KICK BOXING</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

				<!-- Service Block -->
				<div class="service-block col-lg-2 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="<?= Url::to(['site/classes','name'=>'ladies-only'])?>" class="overlay-link"></a>
							<img src="<?= Url::to(['web/images/background/Kickboxing 1 (4).jpg'])?>" alt="" />
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h4><a href="<?= Url::to(['site/classes','name'=>'ladies-only'])?>">Ladies Only</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                <!-- Service Block -->
                <div class="service-block col-lg-2 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="<?= Url::to(['site/classes','name'=>'bjj-youth'])?>" class="overlay-link"></a>
                            <img src="<?= Url::to(['web/images/background/Youth Program 5.jpg'])?>" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/classes','name'=>'bjj-youth'])?>">Youth Program</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				

				

				
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- We Are Section -->
	<section class="we-are-section">
		<div class="auto-container">
			<div class="sec-title centered">
				<h2><span>WHO</span> We Are</h2>
				<div class="text">A world class centre of excellence in Jiu-Jitsu / MMA<br> and identify talented students who will be coached to the highest International standards.</div>
			</div>
			
			<!--Video Box-->
			<div class="video-box">
				<figure class="video-image">
					<img src="<?= Url::to(['web/images/background/Ladies only (5).jpg'])?>" alt="">
				</figure>
				<a href="https://www.youtube.com/watch?v=pndPbpHLpos" class="lightbox-image overlay-box"><span><img src="<?= Url::to(['web/images/icons/play-icon.png'])?>" alt="" /><i class="ripple"></i></span></a>
			</div>
			
			<!-- Button Box -->
			<div class="button-box text-center">
				<div class="heme-btn btn-style-one purchase-box-btn"><span class="txt">FREE PASS</span></div>
			</div>
			
		</div>
	</section>
	<!-- End We Are Section -->
	
	<!-- Counter Section -->
	<section class="counter-section">
		<div class="auto-container">
			<div class="sec-title centered">
				<h2><span>why</span> choose us</h2>
				<div class="text">As we drive and support the growth of Jiu-jitsu / MMA in Egypt by providing the opportunity for students to participate and develop at elite levels, we will Constantly Pursue the highest standards in teaching, learning methodology and philosophy that results in a positive impact on Student’s behavior and personality.</div>
			</div>
			
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="12">0</span>
								</div>
								<div class="counter-title">Training Programs</div>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box alternate">
									<span class="count-text" data-speed="5000" data-stop="17">0</span>
								</div>
								<div class="counter-title">Years Experience</div>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="5000" data-stop="5000">0</span>
								</div>
								<div class="counter-title">Worldwide Members</div>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3500" data-stop="60">0</span>
								</div>
								<div class="counter-title">Worldwide coaches</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</section>
	<!-- End Counter Section -->

	<!-- Coaches Section -->
	<section class="coaches-section">
		<div class="auto-container">
			<div class="sec-title centered">
				<h2><span>Our</span> Coaches</h2>
				<div class="text">World class coaches do much more than just provide technical and tactical expertise. They are adept at developing self-sufficient athletes through an acute awareness of the perceived needs of an athlete, and designing a complete training structure around the athlete from A to Z.</div>
			</div>
		</div>
		<div class="four-item-carousel owl-carousel owl-theme">
			<div class="coach-block">
				<div class="inner-box">
					<div class="image">
						<img src="<?= Url::to(['web/images/trainer/Patricia2_1.jpg'])?>" alt="" />
						<!-- Overlay Box -->
						<div class="overlay-box">
							<a href="<?= Url::to(['site/coach-patricia-amanda'])?>" class="overlay-link"></a>
							<div class="overlay-inner">
								<div class="content">
									<h4><a href="<?= Url::to(['site/coach-patricia-amanda'])?>">Patricia</a></h4>
								</div>
							</div>
						</div>
						<!-- Overlay Box Two -->
						<div class="overlay-box-two">
							<a href="<?= Url::to(['site/coach-patricia-amanda'])?>" class="overlay-link-two"></a>
							<div class="content">
								<h5><a href="<?= Url::to(['site/coach-patricia-amanda'])?>">PATRICIA<br>AMANDA</a></h5>
								<div class="text">WEIGHTLIFTING & BODYBUILDING - Brazilian jiu-jitsu.</div>
								<!-- Social Box -->
<!--								<div class="social-box">-->
<!--									<a href="https://www.facebook.com/readyfightsystem" class="fa fa-facebook"></a>-->
<!--									<a href="#" class="fa fa-twitter"></a>-->
<!--									<a href="https://instagram.com/readyfightsystemegypt?r=nametag" class="fa fa-instagram"></a>-->
<!--								</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="coach-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="<?= Url::to(['web/images/trainer/trainer-magno_alves.jpeg'])?>" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <a href="<?= Url::to(['site/coach-magno-alves'])?>" class="overlay-link"></a>
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="<?= Url::to(['site/coach-magno-alves'])?>">MAGNO</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <a href="<?= Url::to(['site/coach-magno-alves'])?>" class="overlay-link-two"></a>
                            <div class="content">
                                <h5><a href="<?= Url::to(['site/coach-magno-alves'])?>">MAGNO <br> ALVES</a></h5>
                                <div class="text">Fight Coach. Brazilian Jiu Jitsu - Glappling - Mix Martial Arts - Boxing.</div>
                                <!-- Social Box -->
<!--                                <div class="social-box">-->
<!--                                    <a href="https://www.facebook.com/readyfightsystem" class="fa fa-facebook"></a>-->
<!--                                    <a href="#" class="fa fa-twitter"></a>-->
<!--                                    <a href="https://instagram.com/readyfightsystemegypt?r=nametag" class="fa fa-instagram"></a>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coach-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="<?= Url::to(['web/images/background/black.jpg'])?>" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <a href="<?= Url::to(['site/all-trainers'])?>" class="overlay-link"></a>
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="<?= Url::to(['site/all-trainers'])?>">Coming Soon</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <a href="<?= Url::to(['site/all-trainers'])?>" class="overlay-link-two"></a>
                            <div class="content">
                                <h5><a href="<?= Url::to(['site/all-trainers'])?>">Coming <br> Soon</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coach-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="<?= Url::to(['web/images/background/black.jpg'])?>" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <a href="<?= Url::to(['site/all-trainers'])?>" class="overlay-link"></a>
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="<?= Url::to(['site/all-trainers'])?>">Coming Soon</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <a href="<?= Url::to(['site/all-trainers'])?>" class="overlay-link-two"></a>
                            <div class="content">
                                <h5><a href="<?= Url::to(['site/all-trainers'])?>">Coming <br> Soon</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>
	<!-- End Coaches Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2><span>LATEST</span><br>BLOG POSTS</h2>
<!--                <div class="text">Member of Brazilian Army national team -JUDO Member of the International Olympic Committee Member of Asian Grappling Committee Member of Federal Council of Physical Education -BRA</div>-->
            </div>

            <div class="single-item-carousel owl-carousel owl-theme">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="<?= Url::to(['site/article-marcos'])?>" class="overlay-link"></a>
                                <div class="image">
                                    <img src="<?= Url::to(['web/images/background/marcos1.jpg'])?>" alt="" />
                                    <div class="post-date">
                                        <span>25</span>JAN
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/article-marcos'])?>">RFS “ Ready Fight System ” Founder </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="<?= Url::to(['site/article-what-is-jiu-jitsu'])?>" class="overlay-link"></a>
                                <div class="image">
                                    <img src="<?= Url::to(['web/images/background/BJJ 11.jpg'])?>" alt="" />
                                    <div class="post-date">
                                        <span>03</span>FEB
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/article-what-is-jiu-jitsu'])?>">What is Jiu-Jitsu ? </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="<?= Url::to(['site/article-jiu-jitsu-benefit'])?>" class="overlay-link"></a>
                                <div class="image">
                                    <img src="<?= Url::to(['web/images/background/jiu-jutsu2.png'])?>" alt="" />
                                    <div class="post-date">
                                        <span>06</span>Feb
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/article-jiu-jitsu-benefit'])?>">Jiu-Jitsu Benefits</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="<?= Url::to(['site/article-marcos'])?>" class="overlay-link"></a>
                                <div class="image">
                                    <img src="<?= Url::to(['web/images/background/marcos1.jpg'])?>" alt="" />
                                    <div class="post-date">
                                        <span>25</span>JAN
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/article-marcos'])?>">RFS “ Ready Fight System ” Founder </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="<?= Url::to(['site/article-what-is-jiu-jitsu'])?>" class="overlay-link"></a>
                                <div class="image">
                                    <img src="<?= Url::to(['web/images/background/BJJ 11.jpg'])?>" alt="" />
                                    <div class="post-date">
                                        <span>03</span>FEB
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/article-what-is-jiu-jitsu'])?>">What is Jiu-Jitsu ? </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="<?= Url::to(['site/article-jiu-jitsu-benefit'])?>" class="overlay-link"></a>
                                <div class="image">
                                    <img src="<?= Url::to(['web/images/background/jiu-jutsu2.png'])?>" alt="" />
                                    <div class="post-date">
                                        <span>06</span>Feb
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/article-jiu-jitsu-benefit'])?>">Jiu-Jitsu Benefits</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="<?= Url::to(['site/article-marcos'])?>" class="overlay-link"></a>
                                <div class="image">
                                    <img src="<?= Url::to(['web/images/background/marcos1.jpg'])?>" alt="" />
                                    <div class="post-date">
                                        <span>25</span>JAN
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/article-marcos'])?>">RFS “ Ready Fight System ” Founder </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="<?= Url::to(['site/article-what-is-jiu-jitsu'])?>" class="overlay-link"></a>
                                <div class="image">
                                    <img src="<?= Url::to(['web/images/background/BJJ 11.jpg'])?>" alt="" />
                                    <div class="post-date">
                                        <span>03</span>FEB
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/article-what-is-jiu-jitsu'])?>">What is Jiu-Jitsu ? </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <a href="<?= Url::to(['site/article-jiu-jitsu-benefit'])?>" class="overlay-link"></a>
                                <div class="image">
                                    <img src="<?= Url::to(['web/images/background/jiu-jutsu2.png'])?>" alt="" />
                                    <div class="post-date">
                                        <span>06</span>Feb
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?= Url::to(['site/article-jiu-jitsu-benefit'])?>">Jiu-Jitsu Benefits</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
<!--            <div class="lower-text text-center">-->
<!--                <a href="--><?//= Url::to(['site/blog-detail-two'])?><!--" class="view-all">View all</a>-->
<!--            </div>-->

        </div>
    </section>
    <!-- End News Section -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- Purchase Popup -->
<div id="purchase-popup" class="purchase-popup">
	<div class="close-search theme-btn"><span>Close</span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
		
    	<div class="purchase-form">
			<div class="sec-title centered">
				<h2><span>GET FREE</span> PASS</h2>
<!--				<div class="text">If you need of a Personal Trainer, Fitness Instructor advice, or a healthy <br> living product review, please feel free to contact us</div>-->
			</div>
        	
			<!-- Default Form -->
			<form method="POST" action="<?= AppHelper::url(['/frontend/site/free-pass']) ?>">
				<div class="row clearfix">
				
					<div class="col-lg-6 col-md-6 col-sm-12 form-group">
						<input type="text" name="first_name" placeholder="First Name" required>
					</div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="last_name" placeholder="Last Name" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <input type="text" name="phone" placeholder="Phone" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <select id="gender" name="gender" aria-required="true" aria-invalid="false">
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                            <option value="2">Don't Tell</option>
                        </select>
                    </div>
					
<!--					<div class="col-lg-12 col-md-12 col-sm-12 form-group">-->
<!--						<input type="text" name="subject" placeholder="Subject" required>-->
<!--					</div>-->
<!--					-->
<!--					<div class="col-lg-12 col-md-12 col-sm-12 form-group">-->
<!--						<textarea class="darma" name="message" placeholder="Your Message"></textarea>-->
<!--					</div>-->
					
					<div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
						<span class="data">* Personal data will be encrypted</span>
						<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">FREE PASS</span></button>
					</div>
					
				</div>
			</form>
			
            
        </div>
        
    </div>
</div>

