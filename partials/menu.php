<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="title" content="Bhavya Shriti Udyog.Pvt.Lmt" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/logo/logo.jpg" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- popup min css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- swiper css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- AOS Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Owl Carosowl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>BSU</title>
    <!-- <style>
        .navbar-brand img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
       .navbar-nav .nav-item {
            position: relative;
            padding: 0.25rem 0;
            margin: 5px 0.5rem;
            text-transform: uppercase;
            transition: all 0.5s linear;
        }
        .nav-link {
            color: #d2dae2;
            font-size: 12px;
            display: block;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .nav-link.active,
        .nav-link:hover {
            color: #f7f1e3;
        }
        .sub-menu{
            position: absolute;
            left:0;
            /* top:4rem; */
            /* width: 20rem; */
            text-align: left;
            /* background: #000; */
            z-index: 11;
            border-top: 2px solid #fff; 
            display:none;
        }
        .sub-menu li{
            width: 100%;
            list-style: none;
        }
        .sub-menu li a{
            font-size: 12px;
            color: #fff;
            text-decoration:none;
        }
        .nav-item:focus-within > .sub-menu,
        .nav-item:hover > .sub-menu{
            display:initial;
        }
        #menubar{
            display: none;
        }
        .menu-bar{
            display:none;
        }
        .menu-bar i{
            color:#fff;
        }
        @media (max-width:991px) {
            header{
                padding: 20px;
            }
            .menu-bar{
                display:initial;
            }
            .navbar{
                display: none;
            }
            .sub-menu{
                position: relative;
                width:100%;
            }
            .sub-menu li{
                width:100%;
            }
            #menubar:checked ~ .navbar{
                display: initial;
            }
        }
    </style> -->
</head>
<body>
    <div id="loader">
        <img src="assets/images/logo/loader1.gif" />
    </div>
    <div id="maincontent">
        <button id="btnScrollToTop">
            <i class="fas fa-arrow-up"></i>
        </button>
        <!-- <header class="header">
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo.jpg" alt=""></a>
            <input type="checkbox" id="menubar">
            <label for="menubar" class="menu-bar"><i class="fas fa-stream"></i></label>
            <nav class="navbar navbar-expand-lg navigation-wrap">
                
                <div class="container-fluid navContainer">
                    
                    <ul class="navbar-nav ms-auto mb-lg-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php" id="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" id="about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" id="services">Services </a>
                            <ul class="sub-menu">
                                <li><a href="bussiness.php" id="products">Products</a></li>
                                <li><a href="innovation.php" id="innovation">Our Innovation</a></li>
                                <li><a href="manufacturingProcess.php" id="manufacturing">Manufacturing Process</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="gallery.php" id="gallery">
                                Gallery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="team.php" id="team">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php" id="contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header> -->




        <!-- <header class="header">
            <div class="header-main">
            <div class="logo">
                <a href="#"><img src="assets/images/logo/logo.jpg" alt=""></a>
            </div>
            <div class="open-nav-menu">
                <span></span>
            </div>
            <div class="menu-overlay">
            </div>
            <nav class="nav-menu">
                <div class="close-nav-menu">
                    <img src="assets/images/logo/close.svg" alt="close"> 
                </div>
                <ul class="menu">
                    <li class="menu-item menu-item-has-children">
                    <a href="#" data-toggle="sub-menu">Home <i class="plus"></i></a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="#">Home 1</a></li>
                        <li class="menu-item"><a href="#">Home 2</a></li>
                        <li class="menu-item"><a href="#">Home 3</a></li>
                        <li class="menu-item"><a href="#">Home 4</a></li>
                    </ul>
                    </li>
                    <li class="menu-item">
                    <a href="#">About</a>
                    </li>
                    <li class="menu-item">
                    <a href="#">Services</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                    <a href="#" data-toggle="sub-menu">Pages <i class="plus"></i></a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="#">page 1</a></li>
                        <li class="menu-item"><a href="#">page 2</a></li>
                        <li class="menu-item"><a href="#">page 3</a></li>
                        <li class="menu-item"><a href="#">page 4</a></li>
                    </ul>
                    </li>
                    <li class="menu-item">
                    <a href="#">News</a>
                    </li>
                    <li class="menu-item">
                    <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
            </div>
        </header> -->
        <header class="header">
            <nav class="navbar navbar-expand-lg navigation-wrap">
                <div class="container-fluid navContainer">
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo.jpg" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-stream navbar-toggler-icon"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto mb-lg-0 text-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php" id="index">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php" id="about">About Us</a>
                            </li>
                            <li class="nav-item menu-item-has-children">
                                <a class="nav-link dropdown-toggle" id="services" data-toggle="sub-menu" >Services </a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="bussiness.php" id="products">Products</a></li>
                                    <li class="menu-item"><a href="innovation.php" id="innovation">Our Innovation</a></li>
                                    <li class="menu-item"><a href="manufacturingProcess.php" id="manufacturing">Manufacturing Process</a></li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="gallery.php" id="gallery">
                                    Gallery
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="team.php" id="team">Our Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php" id="contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>