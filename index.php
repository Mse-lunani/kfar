<!doctype html>
<html class="no-js" lang="en">

<?php include_once 'head.php'?>

<body>
<div class="whatsapp">
    <img src="img/icon/w.png" style="width: 40px">
</div>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--body-wraper-are-start-->
    <div class="wrapper">

        <!--slider header area are start-->
        <div class="header-slider-area" id="home">
            <!--header start-->
            <?php include_once 'navbar.php'?>
            <!-- header End-->

            <!--slider area are start-->
            <div class="slider-container">
                <!-- Slider Image -->
                <div id="mainSlider" class="nivoSlider slider-image">
                    <img src="img/bg/bg.png" alt="main slider" title="#htmlcaption1" />
                    <img src="img/slider/slider2.jpg" alt="main slider" title="#htmlcaption2" />
                </div>
                <!-- Slider Caption 1 -->
                <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                    <div class="container">
                        <div class="slide1-text">
                            <div class="middle-text slide-def">
                                <div class="cap-dec wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                                    <p>The world is a village</p>
                                </div>
                                <div class="cap-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                                    <h1>Biggest Calendar Platform</h1>
                                </div>
                                <div class="date-address wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                                    <p>
                                        KFAR is a leading platform for the world's calendar,<br> where you can find all the
                                        events and activities that take <br>place in the world.
                                    </p>
                                </div>
                                <div class="slider-btn wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s"> <a
                                        class="btn-def" href="#">Read more</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Caption 2 -->
                <div id="htmlcaption2" class="nivo-html-caption slider-caption-1">
                    <div class="container">
                        <div class="slide1-text">
                            <div class="middle-text slide-def">
                                <div class="cap-dec wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">
                                    <p>All Over The worlds</p>
                                </div>
                                <div class="cap-title wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">
                                    <h1>Biggest Designers Meet Up</h1>
                                </div>
                                <div class="date-address wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">
                                    <div class="event-date"> <i class="zmdi zmdi-calendar-note"></i>Sep 13, 2021 </div>
                                    <div class="event-location"> <i class="zmdi zmdi-pin"></i>1080 Layman Court,
                                        New York</div>
                                </div>
                                <div class="slider-btn wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s"> <a
                                        class="btn-def" href="#">Buy Tickets</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- home slider end -->
            </div>
            <!--slider area are End-->
            <div class="down-arrow"> <a class="see-demo-btn" href="#about-event"><i
                        class="zmdi zmdi-long-arrow-down"></i></a> </div>
        </div>
        <!--slider header area are end-->

        <!--about area are start-->
        <div class="about-area ptb100  fix " id="about-event">
            <div class="container">
              <div class = "text-center">
                  <p>
                      KFAR is a leading platform for the world's calendar,
                      where you can find all the events and activities that take
                      place in the world. Start by creating an event or choose to invest in us.

                  </p>
              </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="calendar.php" class = "mybox bg-brown">
                            <div class="mycirle">
                                <img src="img/icon/calendar1.png">
                            </div>
                            <span>
                                Calendar
                            </span>

                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class = "mybox bg-green">
                            <div class="mycirle">
                                <img src="img/icon/Maskgroup.png">
                            </div>
                            <span>
                                Invest
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--about area are end-->

    

        <!--footer area are start-->
<?php include_once 'footer.php'?>