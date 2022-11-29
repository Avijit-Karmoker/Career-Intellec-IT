
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Website Dev – Best website for web Dev</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- fontfamily -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- custom css  -->
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/style.css">

    <!-- aos animation link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>
<body>
    <!-- header section  -->
    <!-- top bar start   -->
    <section>
        <div class="bg-dark">
            <div class="container">
                <div class="row pt-1 pb-1">
                    <div class="col-sm-12 col-md-6 d-md-flex">
                        <div class="d-flex align-items-center">
                            <div class="me-2 text-white">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="text-white top-text">
                                16 Paul ave New Hyde Park NY 11040
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="me-2 top-icon text-white">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="top-text text-white">
                                +1 516737277
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="me-2 top-icon text-white">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div class="top-text text-white">
                                Mon-Sat: 07:00 - 17:00
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 text-white top-right">
                        <div class="top-social-icon">
                            <a href="//facebook.com" target="_blank"><i class="fa-brands fa-facebook me-3"></i></a>
                            <a href="//twitter.com" target="_blank"><i class="fa-brands fa-twitter me-3"></i></i></a>
                            <a href="//youtube.com" target="_blank"><i class="fa-brands fa-youtube me-3"></i></i></a>
                            <a href="//web.skype.com" target="_blank"><i class="fa-brands fa-skype me-3"></i></i></a>
                            <a href="//pinterest.com" target="_blank"><i class="fa-brands fa-pinterest me-1"></i></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top bar end -->

    <!-- nav bar start -->
    <section>
        <div class="container">
            <nav class="py-2">
                <div class="row align-items-center row-1">
                    <div class="col-sm-4 col-md-2">
                        <img class="nav-image" src="{{ asset('frontend_asset') }}/images/car-preview.png" alt="">
                    </div>
                    <div class="col-sm-8 col-md-10">
                        <div class="d-flex align-items-center nav-item">
                            <div class="nav-items">
                                <ul>
                                    <li>Home</li>
                                    <li>About</li>
                                    <li>Service</li>
                                    <li>Fleet</li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                            <div>
                                <button class="btn btn-dark nav-book-now">Book Now</button>
                            </div>
                            <div>
                                <button class="nav-button"><i class="fas fa-align-right" onclick="myFunctionClose()"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <!-- side bar start -->
    <div>
        <div class="side-bar" id="side_bar_open">
            <div class="text-end">
                <button class="text-white" onclick="myFunctionOpen()"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div>
                <img src="{{ asset('frontend_asset') }}/images/side-bar.png" alt="">
            </div>
            <div class="side-bar-text">
                <div>
                    <p>Car Service Limo, is a well-motivated limo service providing company, who are thriving to provide the best in class service in the limo rental industry in New York. </p>
                </div>
                <div>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Fleet</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="side-bar-follow">
                    <h4>FOLLOW US:</h4>
                    <a href="//facebook.com" target="_blank"><i class="fa-brands fa-facebook me-3"></i></a>
                    <a href="//twitter.com" target="_blank"><i class="fa-brands fa-twitter me-3"></i></i></a>
                    <a href="//youtube.com" target="_blank"><i class="fa-brands fa-youtube me-3"></i></i></a>
                    <a href="//youtube.com" target="_blank"><i class="fa-brands fa-whatsapp"></i></i></a>
                </div>
                <div>
                    <H4>CONTACT INFO</H4>
                    <div class="side-bar-contact">
                        <i class="fa-solid fa-headset"></i>
                        +1 516737277
                    </div>
                    <div class="side-bar-contact">
                        <i class="fa-regular fa-envelope-open"></i>
                        slsfortransportstion@gmail.com
                    </div>
                    <div class="side-bar-contact">
                        <i class="fa-solid fa-location-dot"></i>
                        16 Paul ave New Hyde Park NY 11040
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- side bar end -->

    <!-- nav bar end -->

    <!-- banner part start -->
    <section class="banner">
        <div class="banner-background">
            <div data-aos="fade-up" class="banner-text">
                <h1>Find Best Limousine in NYC</h1>
                <p class="text-white">We Provide Best limousine service in new york</p>
                <a class="book-now-button">Book Now</a>
            </div>
        </div>
    </section>
    <!-- banner part end -->

    <!-- service part start -->
    <section>
        <div class="container">
            <div class="text-center">
                <div class="service-top">
                    <h1>Top Class & Affordable services From Car Service Limo</h1>
                    <p>We offer professional limousine services in our range of high-end vehicles</p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="services service-1">
                            <div>
                                <p>Airport Transfers</p>
                            </div>
                            <div>
                                <button>
                                    <span>Book Now </span>
                                    <span style="margin-top: 3px">
                                        <i class="fa-solid fa-arrow-right fs-6"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="services service-2">
                            <div>
                                <p>Business Meeting</p>
                            </div>
                            <div>
                                <button>
                                    <span>Book Now </span>
                                    <span style="margin-top: 3px">
                                        <i class="fa-solid fa-arrow-right fs-6"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="services service-3">
                            <div>
                                <p>Wedding Parties</p>
                            </div>
                            <div>
                                <button>
                                    <span>Book Now </span>
                                    <span style="margin-top: 3px">
                                        <i class="fa-solid fa-arrow-right fs-6"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="services service-4">
                            <div>
                                <p>Intercity Rides</p>
                            </div>
                            <div>
                                <button>
                                    <span>Book Now </span>
                                    <span style="margin-top: 3px">
                                        <i class="fa-solid fa-arrow-right fs-6"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service part end -->

    <!-- book reservation start -->
    <section>
        <div class="book-reservation">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="reservation-form">
                            <h1>BOOK YOUR RESERVATION</h1>
                            <p>We offer professional car rental & limousine services</p>
                            <div>
                                <form action="">
                                    <div class="form">
                                        <div class="mb-4">
                                            <label class="form-label" for="">Pick Up Location *</label>
                                            <input class="form-control" type="text" name="" placeholder="Pick Up Location">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="">Drop Off Location  *</label>
                                            <input class="form-control" type="text" name="" placeholder="Drop Off Location">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="">Start Date *</label>
                                            <input class="form-control" type="date" name="">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="">End Date *</label>
                                            <input class="form-control" type="date" name="">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="">Pick Up Time *</label>
                                            <input class="form-control" type="time" name="">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="">Number Of Passengers</label>
                                            <input class="form-control" type="text" name="" placeholder="Number Of Passengers">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="">Select Car *</label>
                                            <select class="form-select" name="" id="">
                                                <option value="">Select Car</option>
                                                <option value="">SUV</option>
                                                <option value="">CTG</option>
                                                <option value="">SEDAN</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="">Select Reservation *</label>
                                            <select class="form-select" name="" id="">
                                                <option value="">Select Reservation</option>
                                                <option value="">Airport Reservation</option>
                                                <option value="">Casual Reservation</option>
                                                <option value="">Hourly Reservation</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="">Email *</label>
                                            <input class="form-control" type="email" name="" placeholder="Email">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="">Phone *</label>
                                            <input class="form-control" type="tel" name="" placeholder="Phone">
                                        </div>
                                    </div>
                                    <button class="btn btn-dark form-control mt-4">Book now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="reserve-comfortable">We make sure that your every trip is comfortable</h2>
                        <div class="reservation-grid">
                            <div class="grids">
                                <i class="fa-solid fa-location-pin"></i>
                                <h5>CASUAL RESERVATION</h5>
                                <p>We are now available in more locations.</p>
                            </div>
                            <div class="grids">
                                <i class="fa-solid fa-plane-departure"></i>
                                <h5>AIRPORT BOOKING</h5>
                                <p>Airport Delivery We provide airport delivery.</p>
                            </div>
                            <div class="grids">
                                <i class="fa-solid fa-clock"></i>
                                <h5>HOURLY RESERVATION</h5>
                                <p>We have also curbside delivery available for you.</p>
                            </div>
                            <div class="grids">
                                <i class="fa-solid fa-headphones-simple"></i>
                                <h5>24/7 SUPPORT</h5>
                                <p>We are always there for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- book reservation end -->

    <!-- our fleets start -->
    <section>
        <div class="container">
            <h2 class="fw-bold">Our Fleets</h2>
            <p style="color: #958a8b;">Choose according to your desire and circumstances</p>
            <hr class="hr">
            <div class="slider">
                <div class="car">
                    <div class="cars">
                        <img src="{{ asset('frontend_asset') }}/images/car-1.png" alt="">
                        <div>
                            <i class="fa-solid fa-users"></i> 6-7
                            <p>Cadillac Escalade ESV</p>
                        </div>
                    </div>
                    <div class="cars">
                        <img src="{{ asset('frontend_asset') }}/images/car-2.png" alt="">
                        <div style="margin-top: 30px;">
                            <i class="fa-solid fa-users"></i> 6-7
                            <p>Chevrolet Suburban </p>
                        </div>
                    </div>
                    <div class="cars">
                        <img src="{{ asset('frontend_asset') }}/images/car-3.png" alt="">
                        <div style="margin-top: 25px;">
                            <i class="fa-solid fa-users"></i> 6-7
                            <p>Lincoln Navigator Reserve</p>
                        </div>
                    </div>
                    <div class="cars">
                        <img src="{{ asset('frontend_asset') }}/images/car-4.png" alt="">
                        <div style="margin-top: 35px;">
                            <i class="fa-solid fa-users"></i> 6-7
                            <p>Gmc Yukon XL </p>
                        </div>
                    </div>
                </div>
                <div class="car">
                    <div class="cars">
                        <img src="{{ asset('frontend_asset') }}/images/car-5.png" alt="">
                        <div style="margin-top: 40px;">
                            <i class="fa-solid fa-users"></i> 6-7
                            <p>Mercedes Benz E300</p>
                        </div>
                    </div>
                    <div class="cars">
                        <img style="margin-top: 10px;" src="{{ asset('frontend_asset') }}/images/car-6.png" alt="">
                        <div style="margin-top: 25px;">
                            <i class="fa-solid fa-users"></i> 6-7
                            <p>Cadillac XTS</p>
                        </div>
                    </div>
                    <div class="cars">
                        <img src="{{ asset('frontend_asset') }}/images/car-2.png" alt="">
                        <div style="margin-top: 35px;">
                            <i class="fa-solid fa-users"></i> 6-7
                            <p>Lincoln Continental</p>
                        </div>
                    </div>
                    <div class="cars">
                        <img src="{{ asset('frontend_asset') }}/images/car-4.png" alt="">
                        <div style="margin-top: 35px;">
                            <i class="fa-solid fa-users"></i> 6-7
                            <p>cadillac xt6</p>
                        </div>
                    </div>
                </div>
                <div class="car ms-auto">
                    <div class="cars cars-1"></div>
                    <div class="cars">
                        <img src="{{ asset('frontend_asset') }}/images/car-5.png" alt="">
                        <div style="margin-top: 40px;">
                            <i class="fa-solid fa-users"></i> 6-7
                            <p>BMW 750i black on lack 2022</p>
                        </div>
                    </div>
                    <div class="cars">
                        <img style="margin-top: 10px;" src="{{ asset('frontend_asset') }}/images/car-6.png" alt="">
                        <div style="margin-top: 25px;">
                            <i class="fa-solid fa-users"></i> 6-7
                            <p>Mersedes Benz S-Class</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our fleets end -->

    <!-- brands start -->
    <section>
        <div class="brand-images">
            <div class="container">
                <div class="brand-image">
                    @foreach ($brand_images as $brand_image)
                        <div>
                            <img src="{{ asset('uploads/brand_images') }}/{{ $brand_image->brand_images }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- brands end -->

    <!-- about start -->
    <section>
        <div class="container">
            <div class="about">
                <div class="about-text">
                    <h1>About the company</h1>
                    <p>Car Service Limo, is a well-motivated limo service providing company, who are thriving to provide the best in class service in the limo rental industry in New York. Our vision and mission are to provide our clients with the best limo service ever possible. With that word in mind, we are working our hearts and soul. Our chauffeurs are well-trained and well-mannered. Our vehicles are well maintained and safe. We want to ensure a comfortable, safe and adventurous ride for our clients whenever they choose us.</p>
                </div>
                <div>
                    <img src="{{ asset('frontend_asset') }}/images/about.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->
    <!-- car service start -->
    <section>
        <div class="bg-dark car-service">
            <div class="container">
                <h2>Why Choose Car Service Limo ?</h2>
                <p class="service-p">Our main advantages are to be chosen by us</p>
                <div class="car-services">
                    <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('frontend_asset') }}/images/calender.png" alt="">
                        </div>
                        <div class="service-text">
                            <h5>Online Reservation</h5>
                            <p>No need to leave the house and go somewhere. Call our drivers online, choosing the right car for yourself.</p>
                        </div>
                    </div>
                    <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('frontend_asset') }}/images/driver.png" alt="">
                        </div>
                        <div class="service-text">
                            <h5>Professional Drivers</h5>
                            <p>Car Service Limo chauffeurs are among the best trained and most experienced professionals in the industry.</p>
                        </div>
                    </div>
                    <div class="single-service">
                        <div class="service-img">
                            <img style="width:100px; height: 85px;" src="{{ asset('frontend_asset') }}/images/car.png" alt="">
                        </div>
                        <div class="service-text">
                            <h5>Prestige Vehicles</h5>
                            <p>All our cars radiate maximum comfort and safety, as well as the latest innovations that our industry can offer.</p>
                        </div>
                    </div>
                    <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('frontend_asset') }}/images/visa-card.png" alt="">
                        </div>
                        <div class="service-text">
                            <h5>Online Payment</h5>
                            <p>For the convenience of our customers, we have made an online payment system, you just have to wait for your car</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- car service end -->

    <!-- get in touch start -->
    <section>
        <div class="get-touch">
            <div class="container">
                <h1>Get In touch</h1>
                <div class="touch">
                    <div class="touch-form">
                        <form action="">
                            <div class="touch-forms">
                                <div class="mb-4">
                                    <!-- <label for="" class="form-label">Name</label> -->
                                    <input type="text" name="" placeholder="Name">
                                </div>
                                <div class="mb-4">
                                    <!-- <label for="" class="form-label">Email</label> -->
                                    <input type="email" name="" placeholder="Email">
                                </div>
                                <div class="mb-4">
                                    <!-- <label for="" class="form-label">Phone</label> -->
                                    <input type="tel" name="" placeholder="Phone">
                                </div>
                                <div class="mb-4">
                                    <!-- <label for="" class="form-label">Company</label> -->
                                    <input type="text" name="" placeholder="Company">
                                </div>
                            </div>
                            <div>
                                <label for="" class="form-label">Message</label>
                                <textarea name="" id="" rows="2"></textarea>
                            </div>
                            <div class="mt-3 sms-button">
                                <button class="send-sms-button">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <div class="about-info">
                            <div>
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <div>
                                <h2>+1 516737277</h2>
                            </div>
                            <div>
                                <p class="touch-time">available from 10:00 – 19:00</p>
                            </div>
                            <div>
                                <p>Address:16 Paul Ave  New Hyde Park NY 11040</p>
                            </div>
                            <div>
                                <p>Email: slsfortransportstion@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get in touch end -->

    <!-- footer sectio start -->
    <section>
        <div class="footer">
            <div class="container">
                <div class="upper-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-car">
                                <img src="{{ asset('frontend_asset') }}/images/car-preview.png" alt="">
                            </div>
                            <div class="footer-left-text">
                                <p>Car Service Limo, is a well-motivated limo service providing company, who are thriving to provide the best in class service in the limo rental industry in New York.</p>
                            </div>
                            <div class="footer-icon">
                                <a href=""><i class="fa-brands fa-twitter ms-0"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                                <a href=""><i class="fa-brands fa-youtube"></i></a>
                                <a href=""><i class="fa-brands fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 footer-middle">
                            <h5>Contact Info</h5>
                            <div>
                                <span><i class="fa-solid fa-mobile-screen-button"></i>
                                +1 516737277</span>
                            </div>
                            <div>
                                <span><i class="fa-regular fa-envelope"></i>
                                slsfortransportstion@gmail.com</span>
                            </div>
                            <div>
                                <span><i class="fa-solid fa-location-dot"></i>
                                16 Paul ave New Hyde Park NY 11040</span>
                            </div>
                            <div>
                                <span><i class="fa-solid fa-clock"></i>
                                Mon - Sat 8.00 - 18.00 Sunday CLOSED</span>
                            </div>
                        </div>
                        <div class="col-md-4 footer-right">
                            <h5>NEWSLETTER</h5>
                            <div>
                                <input type="text" name="" placeholder="Your email address">
                                <button class="subscribe-button">Subscribe</button>
                            </div>
                            <div>
                                <img src="{{ asset('frontend_asset') }}/images/cars.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="footer-hr">
            <div class="container">
                <div class="copyright">
                    <div>
                        <p>Copyright © 2022 Carserviceandlimony. All rights reserved</p>
                    </div>
                    <div>
                        <p class="copy-p">Designed & Developed By <a href="">IntellecIT</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer sectio end -->





    <!-- bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- fontawasome script  -->
    <script src="https://kit.fontawesome.com/014d701e1b.js" crossorigin="anonymous"></script>

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease',
            duration: 1300,
        });
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- custom js -->
    <script src="{{ asset('frontend_asset') }}/script.js"></script>
    <script>
        $(".slider").slick({
            dots: true,
            infinite: true,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 4000,
            prevArrow:"<i class='fa-solid fa-chevron-left prev'></i>",
      nextArrow:"<i class='fa-solid fa-chevron-right right'></i>"
      });
    </script>
</body>
</html>
