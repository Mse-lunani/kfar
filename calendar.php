<!doctype html>
<html class="no-js" lang="en">

<?php include_once 'head.php'?>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--body-wraper-are-start-->
<div class="wrapper blog">

    <!--slider header area are start-->
    <div id="home" class="header-slider-area">
        <!--header start-->
        <?php include_once 'navbar.php'?>
        <!-- header End-->
    </div>
    <!--  breadcumb-area start-->
    <div class="breadcumb-area bg-overlay">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#" class="me-2">Kfar Calendar</a></li>

            </ol>
        </div>
    </div>
    <!--  breadcumb-area end-->
    <div class="about-area ptb100  fix" id="about-event">
        <div class = "container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">View Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                    <div style="width: 80%"  class="d-inline-flex justify-content-center align-items-center">
                        <div class="col-7">
                            <div class = "d-flex align-items-center justify-content-center">
                                <img src="img/village.png" style = "width: 50px">
                                <h3 class="cal-title text-center">Village of peace</h3>
                            </div>
                        </div>
                        <div class="col-5">

                            <select class="calendar-div" id="cal-select">
                                <option value="">Calendars</option>
                                <option>Personal or family</option>
                                <option>Work</option>
                                <option>Social</option>
                                <option>Entity</option>
                                <option>National</option>
                            </select>

                        </div>
                    </div>
                    </div>
                    <div class="elegant-calencar d-md-flex">

                        <div class="wrap-header d-flex align-items-center">
                            <p id="reset">reset</p>
                            <div id="header" class="p-0">
                                <div class="pre-button d-flex align-items-center justify-content-center"><i class="icofont icofont-rounded-left"></i></div>
                                <div class="head-info">
                                    <div class="head-day"></div>
                                    <div class="head-month"></div>
                                </div>
                                <div class="next-button d-flex align-items-center justify-content-center"><i class="icofont icofont-rounded-right"></i></div>
                            </div>
                        </div>
                        <div class="calendar-wrap">
                            <table id="calendar">
                                <thead>
                                <tr>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>




<?php include_once 'footer.php'?>