<div class="header-area">
    <!--logo menu area start-->
    <div id="sticker" class="logo-menu-area header-area-2 stick">
        <div class="container d-none d-md-block">
            <div class="row">
                <div class="col-lg-3 col-md-2">
                    <div class="logo">
                        <a href="index.php"><img style="width: 150px" src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-10">
                    <div class="main-menu text-end" id="myhead">
                        <nav>
                            <ul id="nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="calendar.php">Calendar</a></li>
                                <li><a href="create_event.php">create event</a></li>
                                <li><a href="events.php">Event</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li>
                                    <img src="img/icon/Group%2046136.png">
                                    (+972)12-345-6789
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="logo-02">
                    <a href="index.php"><img style="width: 100px" src="img/logo.png" alt=""></a>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="calendar.php">Calendar</a></li>
                                <li><a href="create_event.php">create event</a></li>
                                <li><a href="events.php">Event</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li>
                                    <img src="img/icon/Group%2046136.png">
                                    (+972)12-345-6789
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--mobile menu area end-->
    </div>
    <!--logo menu area start-->
</div>

<script>
    window.onload = function() {
        var header = document.getElementById("myhead");
        var headerHeight = header.clientHeight;
        console.log(headerHeight);

        if (headerHeight > 65) {
            var menuItems = header.querySelectorAll("ul li");
            var lastMenuItem = menuItems[menuItems.length - 1];
            lastMenuItem.style.display = "none";
        }
    };

</script>