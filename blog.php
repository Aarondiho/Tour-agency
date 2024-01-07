<!DOCTYPE html>
<html lang="en">

<?php  $active = 6 ;?>

<head>
    <meta charset="utf-8">
    <title>Burundi Tourism Transport</title>
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                     <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>info@burunditourismsupport.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"> & <img src="img/wha.jpg" / style="width:20px;height:20px;border-radius:50px 50px 50px 10px"> </i>+257 69 408 855</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


     <!-- Navbar Start -->

             <?php  include 'menu.php';
             $query = "SELECT * FROM posts ORDER BY idPost DESC ";
             $total_reg = "20";
             $page= isset($_GET['page'])?  $_GET['page'] : false;

                if (!$page) {
                $pc = "1";
                } else {
                $pc = $page;
                }

                $begin = $pc - 1;
                $begin = $begin * $total_reg;

                $limit = $conn->query("$query LIMIT $begin,$total_reg");
                $all = $conn->query("$query");

                $tr = $all ->rowCount(); // checks the total number of records
                $tp = $tr / $total_reg; // checks the total number of pages
              ?>
         
     <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Blog</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Blog</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


  <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 mb-md-0">
                                <input type="text" class="form-control p-4" placeholder="Budget-Friendly Packages" data-target="#date1" readonly/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control p-4" placeholder="Best Services" data-target="#date1" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4" placeholder="Local Experiences, Global Savings" data-target="#date1" readonly/>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block"style="height: 47px; margin-top: -2px;">Welcome</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row pb-3">

                    <?php while( $row = $limit ->fetch()){ ?>

                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" style ="height:200px" src="adm/photos/<?php echo $row['photo']; ?>" alt="">
                                    <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1"><?php echo date('d',strtotime($row['date'])); ?> </h6>
                                    <small class="text-white text-uppercase"><?php echo date('M Y',strtotime($row['date'])); ?> </small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $row['titre']; ?></a>
                                    </div>
                                    <a class="h5 m-0 text-decoration-none" href=""><?php echo $row['content']; ?></a>
                                </div>
                            </div>
                        </div>

                    <?php }  ?>

                    <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg justify-content-center bg-white mb-0" style="padding: 30px;">

                    
                    <?php 

                        $previous = $pc -1;
                        $next = $pc +1;

                    if ($pc>1) { 

                        ?>

                            <li class="page-item ">
                                    <a class="page-link" href='?page=<?php echo $previous ; ?>' aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                  </li> 

                        <?php  }

                        for($i=1; $i<= $tp ; $i++){ ?>

                              <li class="page-item <?php if( $pc == $i){ echo 'active';}  ; ?>"><a class="page-link" href='?page=<?php echo $i ; ?>'> <?php echo $i ; ?> </a></li>
                           
                        <?php }

                        if ($pc<$tp) {

                            ?>

                                <li class="page-item">
                                    <a class="page-link" href='?page=<?php echo $next ; ?>' aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </li>         
                        <?php

                           

                        }

                    ?>
                                  
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <img src="img/user.jpg" class="img-fluid mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-primary mb-3">Tourism Transport</h3>
                        <p>At Burundi Tourism Transport, we take pride in curating exceptional travel experiences that not only fulfill your wanderlust but also fit seamlessly into your budget. We understand that every journey is unique, and so are your preferences.</p>
                        <div class="d-flex justify-content-center">
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
    
                    <!-- Search Form -->
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <div class="input-group">
                                <input type="text" class="form-control p-4" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary text-white"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark"href="about.php"><i class="fa fa-angle-right mr-2"></i>About</a>
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                                <a class="text-dark"href="destination.php"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                                                <span class="badge badge-primary badge-pill">50</span>
                                            </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                                <a class="text-dark"href="service.php"><i class="fa fa-angle-right mr-2"></i>Services</a>
                                                <span class="badge badge-primary badge-pill">3</span>
                                            </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                                <a class="text-dark"href="package.php"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                                                <span class="badge badge-primary badge-pill">6</span>
                                            </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                                <a class="text-dark"href="guide.php"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                                                <span class="badge badge-primary badge-pill">5</span>
                                            </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                                <a class="text-dark"href="testimonial.php"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                                                <span class="badge badge-primary badge-pill">6</span>
                                            </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                                <a class="text-dark"href="blog.php"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                                                <span class="badge badge-primary badge-pill">20</span>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                   
    
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->

         <?php  include 'footer.php' ?>
    
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>