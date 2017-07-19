<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>GIRIRAJ GROUP</title>
    <?php include "site-includes/head.php";?>
    <style>
        .btn-style-two {
            position: relative;
            padding: 8px 30px;
            line-height: 24px;
            text-transform: uppercase;
            background: none;
            color: #ffffff !important;
            font-size: 14px;
            font-weight: 500;
            border: 2px solid white !important;
            border-radius: 2px;
            font-family: 'Roboto', sans-serif;
        }
        .btn-style-two:hover{
            background: #012f5d;
            color: #ffffff !important;
            font-size: 14px;
            font-weight: 500;
            border: 2px solid white !important;
            border-radius: 2px;
            font-family: 'Roboto', sans-serif;   
        }

        .btn-style-three {
            position: relative;
            padding: 8px 30px;
            line-height: 24px;
            text-transform: uppercase;
            background: none;
            color: white !important;
            font-size: 14px;
            font-weight: 500;
            border: 2px solid white !important;
            border-radius: 2px;
            font-family: 'Roboto', sans-serif;
        }

        .btn-style-three:hover{
            background: #012f5d;
            color: #ffffff !important;
            font-size: 14px;
            font-weight: 500;
            border: 2px solid white !important;
            border-radius: 2px;
            font-family: 'Roboto', sans-serif; 
        }
        .main-slider .tparrows.preview3:hover::after {
            color: #ffffff;
            background: #012f5d;
            border-color: white;
        }
        .scroll-to-top {
            position: fixed;
            bottom: 8px;
            right: 15px;
            width: 40px;
            height: 40px;
            color: #ffffff;
            font-size: 13px;
            text-transform: uppercase;
            line-height: 38px;
            text-align: center;
            z-index: 100;
            cursor: pointer;
            border-radius: 50%;
            background: black;
            display: none;
            -webkit-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            transition: all 300ms ease;
        }
        .scroll-to-top:hover {
            color: #ffffff;
            background: black;
        }
        .normal-link:hover {
            color: #012f5d;
        }
        .footer-style-two .footer-bottom {
            background: #012f5d;
        }
        /*.main-slider .tp-bullets.preview3 .bullet {
            background: red!important;
            width: 22px !important;
            height: 2px !important;
            border: 1px solid red!important;
            border-radius: 2px!important;
            margin: 0px 7px;
            z-index: 0;
        }*/




        

    </style>
</head>
<body>
<div class="page-wrapper">
    <div class="preloader"></div>
   
    <?php include "site-includes/navbar.php";?>
    <section class="main-slider">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src="images/slider/1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        <div class="tp-caption sft sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center" data-voffset="-20" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text-center">
                                <h2>Building your visions.<br>Creating reality.</h2>
                            </div>
                        </div>
                        <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="-80" data-y="center" data-voffset="80" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <a href="contact-us.php" class="theme-btn btn-style-two">contact us</a>
                        </div>
                        <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="100" data-y="center" data-voffset="80" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <a href="projects.php" class="theme-btn btn-style-three">our projects</a>
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src="images/slider/2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption sft sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center" data-voffset="-20" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text-center">
                                <h2>Creating quality urban lifestyles,<br>building stronger communities.</h2>
                            </div>
                        </div>
                        <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="-80" data-y="center" data-voffset="80" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <a href="contact-us.php" class="theme-btn btn-style-two">contact us</a>
                        </div>
                        <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="100" data-y="center" data-voffset="80" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <a href="projects.php" class="theme-btn btn-style-three">our projects</a>
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src="images/slider/3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        <div class="tp-caption sft sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center" data-voffset="-20" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text-center">
                                <h2>Helping you and your house<br>become better acquainted.</h2>
                            </div>
                        </div>
                        <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="-80" data-y="center" data-voffset="80" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <a href="contact-us.php" class="theme-btn btn-style-two">contact us</a>
                        </div>
                        <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="100" data-y="center" data-voffset="80" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <a href="projects.php" class="theme-btn btn-style-three">our projects</a>
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src="images/slider/4.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        <div class="tp-caption sft sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center" data-voffset="-20" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text-center">
                                <h2>Setting the standard of quality<br>for 3 generations.</h2>
                            </div>
                        </div>
                        <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="-80" data-y="center" data-voffset="80" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <a href="contact-us.php" class="theme-btn btn-style-two">contact us</a>
                        </div>
                        <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="100" data-y="center" data-voffset="80" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <a href="projects.php" class="theme-btn btn-style-three">our projects</a>
                        </div>
                    </li>
                </ul>
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    <section class="welcome-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="welcome-content">
                        <div class="sec-title">
                            <h2 style="color: #012f5d;">Welcome to our <br><span class="theme_color" style="color: #012f5d;">sahani group</span></h2>
                        </div>
                        <div class="text">
                        	<p style="color: black;">Thank you for being a friend. Travelled down the road and back again. Your heart is true you're a pal and a confidant. It's time to put on makeup. It's time to dress up right.</p>
                            <p style="color: black;">They're all together ooky the Addams Family doin' it our way. There's nothing we wont try. Never heard the word impossible. This time there's no stopping us." They're creepy and they're kooky mysterious and spooky all together ooky.</p>
                        </div>
                        <div class="link-box padd-top-10"><a href="services.php" class="theme-btn normal-link alternate">View All Services</a></div>
                    </div>    	
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                	<div class="row clearfix">
                        <div class="featured-service-column col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/profile/giriraj_sahani.jpg" alt=""></a></figure>
                                    <a href="#" class="theme-btn service-title">SHRI. GIRIRAJ M. SAHANI <br> – CHAIRMAN</a>
                                </div>
                                <div class="lower-content">
                                    <div class="text" style="color: black;">I Mr. GIRIRAJ M. SAHANI, The Chairman of M/s Giriraj Group, herby glad to say that, my group is connected with the market since 1970.</div>
                                    <div class="link-box"><a href="about-us.php" class="theme-btn normal-link alternate">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-service-column col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/profile/rahul_sahani.jpg" alt=""></a></figure>
                                    <a href="#" class="theme-btn service-title">RAHUL G.SAHANI <br> – CO-FOUNDER & Vice Chairman</a>
                                </div>
                                <div class="lower-content">
                                    <div class="text" style="color: black;">I Mr. RAHUL SAHANI, The Vice Chairman of M/s Giriraj Group, herby glad to say that, my group is connected with the market for last 35 years.</div>
                                    <div class="link-box"><a href="about-us.php" class="theme-btn normal-link alternate">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!--    <section class="latest-works-section">
    	<div class="auto-container">
    		<div class="title"><h2>Our Prestigious Clients</h2></div>
            <div class="work-carousel four-column-carousel">
                <div class="work-item">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="http://vapi.bayer.in/"><img src="images/profile/270x180.jpg" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3><a href="http://vapi.bayer.in/" target="__blank">Bayer Group of Company</a></h3>
                          
                        </div>
                    </div>
                </div>
                <div class="work-item">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="http://www.hubergroup.in/"><img src="images/profile/270x180.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="http://www.hubergroup.in/" target="__blank">Huber Group of Company</a></h3>
                        	
                        </div>
                    </div>
                </div>
                <div class="work-item">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="http://www.bilakhiaholdings.com/"><img src="images/profile/270x180.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="http://www.bilakhiaholdings.com/" target="__blank">Bilakhia Group of Company</a></h3>
                        	
                        </div>
                    </div>
                </div>
                <div class="work-item">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="http://www.adani.com/"><img src="images/profile/270x180.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="http://www.adani.com/" target="__blank">Adani Group of Company</a></h3>
                        	
                        </div>
                    </div>
                </div>
                <div class="work-item">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="http://www.sanghicement.com/"><img src="images/profile/270x180.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="http://www.sanghicement.com/" target="__blank">Sanghi Group of Company</a></h3>
                        	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="about-style-two light-version">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <div class="who-we-are">
                        <h2>Our Services</h2>
                        <ul class="info-list">
                            <li>
                                <h3>Polishing Work</h3>
                                <div class="text" style="text-transform: lowercase">MELAMINE POLISH, P.U, DUCO, FRENCH POLISH, POLYCOAT LAMINATION, MARBLE EFFECT, ANTIQUE FINISH.</div>
                            </li>
                            <li>
                                <h3>P.O.P. WORK</h3>
                                <div class="text" style="text-transform: lowercase">ARCH, PILLAR, GYPSUM, DESIGNING. FALSE CEILING, WALL PUNNING.</div>
                            </li>
                            <li>
                                <h3>Painting Work</h3>
                                <div class="text" style="text-transform: lowercase">PAINTING, SPRAY PAINTING, DUCO PAINTING, INDUSTRIAL PAINTING, DEFACE, DESIGING, TEXTURE, ROYAL PLAY OIKOS PAINT, WALLPAPER & EXTERIOR PAINTING ALSO.</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <div class="who-we-are">
                        <h2>&nbsp;</h2>
                        <ul class="info-list">
                            <li>
                                <h3>SAND BLASTING</h3>
                                <div class="text" style="text-transform: lowercase">CHEMICAL TANK BLASTING, STEEL PIPE BLASTING. PAINTING OF CHEMICAL TANK & PIPE</div>
                            </li>
                            <li>
                                <h3>ALL TYPES OF INTERIOR WORKS</h3>
                                <div class="text" style="text-transform: lowercase">POP, GYPSUM, WATER PROOFING MARBLE POLISHING, MM WATERPROOFING, COATING, EPOXY COATING ETC</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="parallax-style-one" style="background-image:url(images/background/image-2.jpg);">
        <div class="auto-container">
            <h2>We let our <span class="theme_color"> quality work</span> and <span class="theme_color">commitment</span> to <br><span class="theme_color">customer satisfaction</span> be our slogan.</h2>
        </div>
    </section> -->
    <!-- <section class="contact-style-one">
    	<div class="auto-container">
        	<div class="row clearfix">
                <div class="column info-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                	<div class="info-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<h3>get in touch with our best <span class="theme_color">team</span></h3>
                        <ul class="info-list">
                            <li>2 - BHAGYARATAN, 3RD ROAD,<br>KHAR-WEST, <br>NEAR CENTRAL BANK OF INDIA, <br>MUMBAI - 400 052. <br></li>
                            <li><strong>Phone :</strong> (022) 260 012 97</li>
                            <li><strong>Office :</strong> (022) 260 564 57</li>
                            <li><strong>Email :</strong> giriraj_sons@yahoo.com</li>
                        </ul>
                    </div>
                </div>
                <div class="column form-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                	<div class="info-box">
                    	<div class="upper-content">
                            <h3>Contact our <span class="theme_color">team</span></h3>
                        </div>
                        <div class="default-form">
                            <form method="post" action="contact.html" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="username" value="" placeholder="Your Name *" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" value="" placeholder="Your Email *" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Your Phone *" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="subject" value="" placeholder="Your Subject *">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Your Requirement" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="theme-btn btn-style-one">send request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php include "site-includes/footer.php";?>
</div>
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>
    <?php include "site-includes/foot.php";?>
</body>
</html>