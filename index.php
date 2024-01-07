<!DOCTYPE html>

<html lang="en">


    <?php  $active = 1 ;?>

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

    <?php  
    
        include 'menu.php' ;
    
        $latestPosts = $conn->query("SELECT * FROM posts ORDER BY idPost DESC LIMIT 3");
    
    ?>


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Burundi Tourism Transport</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Discover Burundi Together</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


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

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                        <p>At Burundi Tourism Transport, we take pride in curating exceptional travel experiences that not only fulfill your wanderlust but also fit seamlessly into your budget. We understand that every journey is unique, and so are your preferences.</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/destination-4.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-1">Enjoy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Budget-Friendly Packages</h5>
                            <p class="m-0">We understand the importance of getting the most out of your travel budget. Our packages are thoughtfully crafted to provide you with an incredible experience without compromising on quality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Exclusive Deals</h5>
                            <p class="m-0">Take advantage of our exclusive deals and discounts, specially designed to make your journey more affordable. Explore more and save more with  Burundi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-eye text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Transparent Pricing</h5>
                            <p class="m-0">No hidden fees or unexpected expenses. Our transparent pricing ensures that you know exactly what you're paying for, giving you peace of mind throughout your trip</p>
                        </div>
                    </div>
                </div>
            </div>

            <br/>

            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Local Experiences, Global Savings</h5>
                            <p class="m-0">Immerse yourself in the unique culture and beauty of [Your Destination] without worrying about excessive costs. We offer competitive prices on local activities, tours, and accommodations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x  fa-handshake text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">Experience unparalleled excellence in tourism with our best-in-class services. From seamless travel planning to personalized experiences, we elevate your journey with unmatched quality and customer satisfaction</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-list  text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Customer-Centric Service</h5>
                            <p class="m-0">Your satisfaction is our top priority. Our dedicated team is here to assist you at every step, ensuring a smooth and enjoyable travel experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Cities</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/buja.jpg" alt="">
                        <a class="destination-overlay text-white text-center  text-decoration-none" href="">
                            <h5 class="text-white ">Bujumbura</h5>
                            </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/tanga.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Lake Tanganyika</h5>
                           
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/museum.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">National Museum of Gitega</h5>
                           </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/heh.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Mount Heha</h5>
                        </a>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/Livinstone.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Livingston-Stanley Monument</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/drum.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Gishora Drum Sanctuary</h5>
                        </a>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/kibira.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Kibira National Park</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/muramvya.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Muramvya</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/muhanga.png" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Muhanga</h5>
                        </a>
                    </div>
                </div>
         
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/rusizi.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Rusizi National Park</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/vivant.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Musée Vivant</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/karera.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Karera Waterfalls</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/kirundo.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Kirundo</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/beach.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Beaches</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/ruvubu.jpg" alt="">
                        <a class="destination-overlay text-white text-center text-decoration-none" href="">
                            <h5 class="text-white">Ruvubu National Park</h5>
                        </a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Travel Guide</h5>
                        <p class="m-0">We provide tourists with expert Tourist Guides, ensuring a seamless and enriched travel experience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket Booking</h5>
                        <p class="m-0">We assist tourists in hassle-free Ticket Booking, simplifying their travel planning.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Hotel Booking</h5>
                        <p class="m-0">We facilitate stress-free Hotel Booking for tourists, ensuring comfortable accommodations tailored to their preferences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Tour Packages</h1>
                </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Burundi</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>2 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>1 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Prices</a>
                            <p>
                                <ul>
                                    <li>Daily Transportation (including driver/guide): $100 per day</li>
                                </ul>


                            </p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$200</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-2.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Burundi</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>1 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Prices</a>
                            <p>
                                <ul>
                                    <li>Daily Transportation (including driver/guide): $100 per day</li>
                                </ul>


                            </p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$300</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-3.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Burundi</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>1 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Prices</a>
                            <p>
                                <ul>
                                    <li>Daily Transportation (including driver/guide): $100 per day</li>
                                </ul>


                            </p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$400</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-4.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Burundi</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>1 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Prices</a>
                            <p>
                                <ul>
                                    <li>Daily Transportation (including driver/guide): $100 per day</li>
                                </ul>


                            </p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$500</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-5.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Burundi</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>6 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Prices</a>
                            <p>
                                <ul>
                                    <li>Daily Transportation (including driver/guide): $100 per day</li>
                                </ul>


                            </p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$600</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-6.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Burundi</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>7 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>1 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Prices</a>
                            <p>
                                <ul>
                                    <li>Daily Transportation (including driver/guide): $100 per day</li>
                                </ul>


                            </p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$700</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           

                <br/>
        </div>
    </div>
    <!-- Packages End -->


    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">10% OFF</span> For Honeymoon</h1>
                    </div>
                    <p class="text-white">
                        Exclusive Honeymoon Discount: Enjoy a romantic getaway with our special offer of 10% off on all our Honeymoon tourism packages.
                        We believe in making your dream honeymoon a reality by providing an exclusive discount to enhance your experience.</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Tailored Honeymoon Packages</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Professional Guidance</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Flexible Booking Options.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Contact Us Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div  class="form-group">
                                        <a class=" btn-primary btn-block py-3 text-center" href="Tel: 25769408855">

                                            <i class="fa fa-phone-alt mr-2"></i>+257 69 408 855

                                        </a>
                                </div>
                                <div class="form-group">
                                     <a class=" btn-secondary btn-block py-3 text-center" href="https://wa.me/+25769408855" target="_blank">

                                                <img src="img/wha.jpg" / style="width:25px;height:25px;border-radius:50px 50px 50px 10px">  +257 69 408 855

                                    </a>
                                </div>
                                <div class="form-group">
                                    <a class=" btn-primary btn-block py-3 text-center" href = "mailto: info@burunditourismsupport.com">

                                         <i class="fa fa-envelope mr-2"></i> info@burunditourismsupport.com

                                    </a>
                                </div>
                                <div class="form-group">
                                    <a class=" btn-secondary btn-block py-3 text-center" href = "mailto: info@burunditourismsupport.com">

                                          <i class="fab fa-instagram"></i> @burunditourismsupport
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start  -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
                <h1>Our Travel Guides</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/delice.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Delice Kwizera</h5>
                            <p class="m-0">Guide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/saniella.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Saniella Kaneza</h5>
                            <p class="m-0">Guide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/aaron.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Aaron NDIHO</h5>
                            <p class="m-0">Guide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/mise.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Mise Dorel Barungura</h5>
                            <p class="m-0">Guide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">"Wow, the personalized tour package I booked exceeded my expectations! The attention to detail and unique experiences made my trip unforgettable. Thank you, Burundi Tourism Transport"
                        </p>
                        <h5 class="text-truncate">Daniel Williams</h5>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">"The customer service at Burundi Tourism Transport is top-notch. They were extremely helpful in planning our itinerary and accommodating our special requests. A truly hassle-free experience!"
                        </p>
                        <h5 class="text-truncate">Olivia Martinez</h5>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">"I can't believe how breathtaking the landscapes were on the guided tour. The knowledgeable guides from Burundi Tourism Transport made the journey both informative and entertaining."
                        </p>
                        <h5 class="text-truncate">Ethan Thompson</h5>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">"The variety of activities offered by BTT allowed us to tailor our trip to our preferences. Whether you're an adventure seeker or a history buff, they've got something for everyone!"
                        </p>
                        <h5 class="text-truncate">Lucas Brown</h5>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/client.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">"I've traveled with several agencies before, but BTT stands out for their commitment to sustainability. It's great to see a company that values responsible tourism."
                        </p>
                        <h5 class="text-truncate">Isabella Wright</h5>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
                <h1>Latest From Our Blog</h1>
            </div>
            <div class="row pb-3">
                <?php while( $row = $latestPosts ->fetch()){ ?>

                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100 " style ="height:200px" src="adm/photos/<?php echo $row['photo']; ?>" alt="">
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

                    <?php } ?>
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