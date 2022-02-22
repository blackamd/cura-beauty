<?php
use common\helpers\AppHelper;
use yii\helpers\Url;
?>

<!--Page Title-->
<section class="page-title" style="background-image:url('../web/images/background/Boxing (4).jpg')">
    <div class="auto-container">
        <h2>CONTACTS</h2>
        <ul class="page-breadcrumb">
            <li><a href="<?= Url::to(['site/index'])?>">home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">

        <!-- Map Boxed -->
        <div class="map-boxed">
            <!--Map Outer-->
            <div class="map-outer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.6126155470392!2d31.27043811444116!3d29.961819429427408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583872c199bff5%3A0xc0586653fe1079cb!2sClub%207%20Maadi!5e0!3m2!1sen!2seg!4v1642952384268!5m2!1sen!2seg"  width="100%" height="460px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>

        <div class="row clearfix">

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
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

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <div class="group-title"><h3>MESSAGE US</h3></div>
                        <div class="form-text">If you've got a question, a comment, or just want to talk more about your fitness goals, leave us a message and we'll be sure to get in touch.</div>
                        <!-- Contact Form -->
                        <form method="POST" action="<?= AppHelper::url(['/frontend/site/contact-us-form']) ?>" >
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="first_name" placeholder="First Name" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="last_name" placeholder="Last Name" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea class="darma" name="message" placeholder="Your Message"></textarea>
                                </div>

                                <div class="col-lg-12 clearfix col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">SEND MESSAGE</span></button>
                                    <span class="data">* Personal data will be encrypted</span>
                                </div>

                            </div>
                        </form>

                    </div>
                    <!-- End Contact Form -->

                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Contact Page Section -->
	
