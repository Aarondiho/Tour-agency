<?php include 'adm/connection/db_connect.php' ; ;?>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">BT</span>T</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?php if ($active == 1){echo 'active';}; ?>">Home</a>
                        <a href="service.php" class="nav-item nav-link <?php if ($active == 2){echo 'active';}; ?>">Services</a>
                        <a href="package.php" class="nav-item nav-link <?php if ($active == 3){echo 'active';}; ?>">Tour Packages</a>
                        <a href="blog.php" class="nav-item nav-link <?php if ($active == 6){echo 'active';}; ?>">Blog</a>
                        <a href="about.php" class="nav-item nav-link <?php if ($active == 4){echo 'active';}; ?>">About</a>
                    <!--<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.php" class="dropdown-item <?php //if ($active == 1){echo 'active';}; ?>">Blog Grid</a>
                                <a href="single.php" class="dropdown-item <?php //if ($active == 1){echo 'active';}; ?>">Blog Detail</a>
                                <a href="destination.php" class="dropdown-item <?php //if ($active == 1){echo 'active';}; ?>">Destination</a>
                                <a href="guide.php" class="dropdown-item <?php //if ($active == 1){echo 'active';}; ?>">Travel Guides</a>
                                <a href="testimonial.php" class="dropdown-item <?php //if ($active == 1){echo 'active';}; ?>">Testimonial</a>
                            </div>
                        </div>-->
                        <a href="contact.php" class="nav-item nav-link <?php if ($active == 5){echo 'active';}; ?>">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->