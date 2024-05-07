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
                <li><a href="#" class="me-2">Kfar Calendar Form </a></li>

            </ol>
        </div>
    </div>
    <!--  breadcumb-area end-->
    <div class="about-area ptb100  fix" id="about-event">
        <form method="post" enctype="multipart/form-data" action="model/create_event.php">
        <div class="container">
            <div class="row  ">
                <div class = "col-md-6">
                    <div class="form-group">
                        <label for="event_name">Event Title</label>
                        <input type="text" class="form-control" id="event_name" name="title" placeholder="Enter Event Name">
                    </div>
                </div>
                <div class = "col-md-3">
                    <div class="form-group">
                        <label for="event_date">Event Date</label>
                        <input type="date" class="form-control" id="event_date" name="date">
                </div>
                </div>
                <div class = "col-md-3">
                    <div class="form-group">
                        <label for="event_time">Event Time</label>
                        <input type="time" class="form-control" id="event_time" name="time">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label>Type</label>
                <div class = "mybox2">
                    <div class="form-check m-3">
                        <input class="form-check-input me-1" type="radio" name="type" value="Personal or family" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Personal or family
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input me-1" value="work" type="radio" name="type" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Work
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input me-1" value="social" type="radio" name="type" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Social
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input me-1" value="entity" type="radio" name="type" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Entity
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input me-1" value="national" type="radio" name="type" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            National
                        </label>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="event_location">Event Venue</label>
                        <input type="text" class="form-control" id="event_location" name="venue" placeholder="Enter Event Location">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="event_organizer">Event Sponsor</label>
                        <input type="text" class="form-control" id="event_organizer" name="sponsor" placeholder="Enter Event Organizer">
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="event_description">Event Bio</label>
                    <textarea class="form-control" id="event_description" name="bio" rows="3"></textarea>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="event_participant">Participants</label>
                        <input type="number" class="form-control" id="event_participant" name="invites" placeholder="Enter Event Participants">
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="event_contact">Contact</label>
                    <input type="text" class="form-control" id="event_contact" name="contact_person" placeholder="Enter Event Contact">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="event_photo">Visuals</label>
                        <input type="file" class="form-control" id="event_photo" name="image" placeholder="Enter Event Photo">
                    </div>
                </div>
            </div>
            <div class="row ">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="event_link">Event Link</label>
                    <input type="text" class="form-control" id="event_link" name="event_link" placeholder="Enter Event Link">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Fundraiser?</label>
                <div class = "mybox2">
                    <div class="form-check">
                        <input class="form-check-input me-1" name="fundraiser" type="radio" value="Yes" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input me-1" name="fundraiser" type="radio" value="No" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault">
                            No
                        </label>
                    </div>

            </div>
                </div>
    </div>
        </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-lg btn-success">Submit</button>
        </div>
        </form>
    </div>
<?php include_once 'footer.php'?>