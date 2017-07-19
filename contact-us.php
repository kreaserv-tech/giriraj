<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GIRIRAJ GROUP</title>
    <?php include "site-includes/head.php";?>
    <style>
        #map {
            width: 600px;
            height: 350px;
        }

        @media only screen and (max-device-width: 350px) {
            #map {
                width: 300px;
                height: 350px;
            }
        }
        @media only screen and (min-device-width: 360px) {
            #map {
                width: 350px;
                height: 350px;
            }
        }
        @media only screen and (min-device-width: 768px) {
            #map {
                width: 570px;
                height: 350px;
            }
        }
 

        


    </style>
</head>
<body>
<div class="page-wrapper">
    <div class="preloader"></div>
 	<?php include "site-includes/navbar.php";?>
    <section class="page-title" style="background-image:url(images/cont.png);">
        <div class="auto-container">
            <h1>Contact us</h1>
        </div>
    </section>
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h3>Contact Us</h3></div>
            <div class="pull-right">
                <!-- <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul> -->
            </div>
        </div>
    </section>
    <section class="contact-style-one extended">
    	<div class="auto-container">
            <div class="form-column form-container">
                <div class="info-box">
                    <div class="upper-content">
                        <h3 style="color: #012f5d;">Feel Free to contact us</h3>
                        <!-- <div class="text">Movin' on up to the east side. We finally got a piece of the pie. Flying away on a wing and a prayer. Who could it be. <br>Believe it or not its just me. The movie star the professor and Mary Ann here on Gilligans Isle</div> -->
                    </div>
                    <div class="default-form">
                        <form method="post" action="contact.html" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="username" value="" placeholder="Your Name *" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Your Email *" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" value="" placeholder="Your Phone *" required>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" name="subject" value="" placeholder="Your Subject *">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">    
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Requirement" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-one">send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- <div class="column map-column col-md-8 col-sm-12 col-xs-12">
                    <div class="map-canvas"
                        data-zoom="10"
                        data-lat="23.820208"
                        data-lng="90.413266"			  
                        data-type="roadmap"
                        data-hue="#e9e5dc"
                        data-title="Dhaka"
                        data-content="Dhaka 1206, Bangladesh<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div>
                </div> -->
                <div class="column map-column col-md-8 col-sm-12 col-xs-12">
                    <div class="map_load">
                        <!-- <img src="img/new_images/Location-ST2-1.jpg" alt="Safeer Tower 2" class="img-responsive"> -->
                        <div id="map" class="map"></div>
                    </div>
                </div>

                <div class="column contact-column col-md-4 col-sm-12 col-xs-12">
                	<h2 style="color: #012f5d;">Contact Info</h2>
                    <ul class="contact-info">
                    	<li style="color: black;"><div class="icon-box"><span class="flaticon-location"></span></div>Head Office <br>2 - BHAGYARATAN, 3RD ROAD, Khar (West), Mumbai</li>
                        <li style="color: black;"><div class="icon-box"><span class="flaticon-technology-2"></span></div>GirirajJi +91 9820010782 <br>(022) 260 564 57</li>
                        <li style="color: black;"><div class="icon-box"><span class="flaticon-envelope-1"></span></div>giriraj_sons@yahoo.com</li>
                        <li style="color: black;"><div class="icon-box"><span class="flaticon-location"></span></div>Vapi Office<br>Mrigasir Complex, Ground Floor, N.H. No 8,GIDC VAPI  396 195 Gujrat</li>
                        <li style="color: black;"><div class="icon-box"><span class="flaticon-technology-2"></span></div>Rahul +91 9594135564 <br>(022) 260 012 97</li>
                        <li style="color: black;"><div class="icon-box"><span class="flaticon-envelope-1"></span></div>bombay_art@yahoo.co.in</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include "site-includes/footer.php";?>
</div>
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>
<?php include "site-includes/foot.php";?>
 <script src="http://maps.google.com/maps/api/js?key="></script>
 <script src="js/map-script.js"></script>
<script>
            var map;
            function initMap() {
                var uluru = {lat: 19.070856, lng: 72.839565};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    scrollwheel: false,
                    center: uluru
                });

                var contentString = '<div id="content" style="text-align: left">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading" style="font-size:18px">Giriraj Group</h1>'+
                    '<div id="bodyContent">2 - BHAGYARATAN, 3RD ROAD,<br> Khar (West),<br> Mumbai (022) 260 012 97</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    title: 'Uluru (Ayers Rock)'
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);
          }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV8SWdOCcMYWFhy-EF_lrZY_FFLXAr3Nk&callback=initMap" async defer></script>
</body>
</html>