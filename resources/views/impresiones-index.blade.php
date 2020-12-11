<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Impresiones</title>

        <!-- Fonts -->
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ url('page\assets\css\bootstrap.min.css') }} ">
        <link rel="stylesheet" href="{{ url('page\assets\css\owl.theme.default.min.css') }} ">
        <link rel="stylesheet" href="{{ url('page\assets\css\owl.carousel.min.css') }} ">
        <link rel="stylesheet" href="{{ url('page\assets\css\animate.min.css') }} ">
        <link rel="stylesheet" href="{{ url('page\assets\css\boxicons.min.css') }}"> 
        <link rel="stylesheet" href="{{ url('page\assets\css\magnific-popup.min.css') }}"> 
        <link rel="stylesheet" href="{{ url('page\assets\css\flaticon.css') }}">
        <link rel="stylesheet" href="{{ url('page\assets\css\meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ url('page\assets\css\nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ url('page\assets\css\odometer.min.css') }}">
        <link rel="stylesheet" href="{{ url('page\assets\css\style.css') }}">
        <link rel="stylesheet" href="{{ url('page\assets\css\responsive.css') }}">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ url('page\assets\img\favicon.png') }}">
        
        <!-- Title -->
        <title>Impresiones - Impresiones Cui</title>
    </head>
    <body class="body-color-three">

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->
        
        <!-- Start Header Area -->
        <header class="header-area p-relative">

            <!-- Start Top Header -->
            <div class="top-header bg-dark">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6">
                            <ul class="header-left-content">
                                <li>
                                    <i class="bx bx-phone-call"></i>
                                    <a href="tel:+1-(514)-312-5678">+54 9 264 6732115</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <ul class="header-right-content">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Top Header -->
            
            <!-- Start Navbar Area -->
            <div class="navbar-area navbar-area-two">
                <div class="mobile-nav">
                    <div class="container">
                        <a href="index-3.html" class="logo">
                            <img src="{{ url('page\assets\img\svg\iconobarra.svg') }}" alt="Logo">
                        </a>
                    </div>
                </div>

                <div class="main-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md">
                            <a class="navbar-brand" href="index-3.html" style="width: 20%">
                                <img src="{{ url('page\assets\img\svg\iconobarragrande.svg') }}" alt="Logo" width="100%" height="60%">
                            </a>
                            
                            <div class="collapse navbar-collapse mean-menu" style="width: 80%">
                                <ul class="navbar-nav m-auto" style="width: 80%">
                                    <li class="nav-item" style="width: 16%; margin-left: 0; margin-right: 0">
                                        <a href="#" class="nav-link active">
                                            Home
                                            <i class="bx bx-chevron-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="index.html" class="nav-link">Home One</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-2.html" class="nav-link">Home Two</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-3.html" class="nav-link active">Home Three</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-4.html" class="nav-link">Home Four</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-5.html" class="nav-link">Home Five</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item" style="width: 16%; margin-left: 0; margin-right: 0">
                                        <a href="#" class="nav-link">
                                            Pages
                                            <i class="bx bx-chevron-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="about.html" class="nav-link">About Us</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Services
                                                    <i class="bx bx-chevron-right"></i>
                                                </a>
        
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="services-style-one.html" class="nav-link">Services Style One</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="services-style-two.html" class="nav-link">Services Style Two</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="services-style-three.html" class="nav-link">Services Style Three</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="services-details.html" class="nav-link">Service Details</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a href="team.html" class="nav-link">Team</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="testimonials.html" class="nav-link">Testimonials</a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a href="pricing.html" class="nav-link">Pricing</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    User
                                                    <i class="bx bx-chevron-right"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="my-account.html" class="nav-link">My Account</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="log-in.html" class="nav-link">Log In</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="registration.html" class="nav-link">Registration</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="recover-password.html" class="nav-link">Recover Password</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a href="faq.html" class="nav-link">FAQ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="404.html" class="nav-link">404 Error Page</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item" style="width: 16%; margin-left: 0; margin-right: 0">
                                        <a href="#" class="nav-link">
                                            Solucion
                                            <i class="bx bx-chevron-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="solutions.html" class="nav-link">Solutions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="solution-details.html" class="nav-link">Solution Details</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item" style="width: 16%; margin-left: 0; margin-right: 0">
                                        <a href="#" class="nav-link">
                                            Venta
                                            <i class="bx bx-chevron-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="products.html" class="nav-link">Products</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="shopping-cart.html" class="nav-link">Shopping Cart</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="checkout.html" class="nav-link">Checkout</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="single-product.html" class="nav-link">Single Product</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="wishlist.html" class="nav-link">Wishlist</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item" style="width: 16%; margin-left: 0; margin-right: 0">
                                        <a href="#" class="nav-link">
                                            Blog
                                            <i class="bx bx-chevron-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="blog-column-one.html" class="nav-link">Blog Column One</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-column-two.html" class="nav-link">Blog Column Two</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-column-three.html" class="nav-link">Blog Column Three</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-details.html" class="nav-link">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item" style="width: 16%; margin-left: 0; margin-right: 0">
                                        <a href="contact.html" class="nav-link">Contacto</a>
                                    </li>
                                </ul>
                                
                                <div class="others-option" style="width: 20%">
                                    <div class="cart-icon">
                                        <a href="shopping-cart.html">
                                            <i class="bx bx-cart"></i>
                                            <span>0</span>
                                        </a>
                                    </div>

                                    <div class="get-quote">
                                        <a href="#" class="default-btn">
                                            <span>Ingresar</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                
                <div class="others-option-for-responsive">
                    <div class="container">
                        <div class="dot-menu">
                            <div class="inner">
                                <div class="circle circle-one"></div>
                                <div class="circle circle-two"></div>
                                <div class="circle circle-three"></div>
                            </div>
                        </div>
                        
                        <div class="container">
                            <div class="option-inner">
                                <div class="others-option justify-content-center d-flex align-items-center">
                                    <div class="get-quote">
                                        <a href="#" class="default-btn">
                                            <span>Get a Quote</span>
                                        </a>
                                    </div>

                                    <div class="cart-icon">
                                        <a href="shopping-cart.html">
                                            <i class="bx bx-cart"></i>
                                            <span>0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->

        </header>
        <!-- End Header Area -->

        <!-- Start Banner Area -->
        <section class="banner-area banner-area-three">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="banner-content">
                                    <span class="top-title wow fadeInDown" data-wow-delay="1s">Impresiones a Medida</span>
                                    <h1 class="wow fadeInDown" data-wow-delay="1s">Impresiones Cui-Cui</h1>
                                    <p class="wow fadeInUp" data-wow-delay="1s">Sala de impresiones por encargue online.</p>
                                    <div class="banner-btn wow fadeInUp" data-wow-delay="1s">
                                        <a href="contact.html" class="default-btn">
                                            <span>Contacto</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="banner-img wow fadeInDown" data-wow-delay="1s">
                                    <img src="{{ url('page\assets\img\banner\oficinaImpresion.svg') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->

        <!-- Start Feature Area -->
        <section class="feature-area feature-area-three pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature overly-one">
                            <div class="overly-two">
                                <div class="title">
                                    <i class="flaticon-testing"></i>
                                    <h3>Impresiones Blanco y Negro</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <div class="feature-shape">
                                    <img src="{{ url('page\assets\img\feature-shape-2.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature overly-one">
                            <div class="overly-two">
                                <div class="title">
                                    <i class="flaticon-cybercrime"></i>
                                    <h3>Impresiones a Color</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <div class="feature-shape">
                                    <img src="{{ url('page\assets\img\feature-shape-2.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                        <div class="single-feature overly-one">
                            <div class="overly-two">
                                <div class="title">
                                    <i class="flaticon-cyber-security"></i>
                                    <h3>Scaneo de Documentos</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <div class="feature-shape">
                                    <img src="{{ url('page\assets\img\feature-shape-2.png') }} " alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feature Area -->

        <!-- Start Our Approach Area -->
        <section class="our-approach-area-three pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Our Approach</span>
                    <h2>How Can I Protect My Website From Cyber Attacks</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-approach-box overly-one">
                            <div class="overly-two">
                                <div class="icon">
                                    <i class="flaticon-key"></i>
                                </div>
                                <h3>Identifying Threats</h3>
                                <p>Lorem ipsum dolor amet, cons ectetur adipiscing elit, sed eiu smod tempor incididunt </p>
                                <div class="approach-shape">
                                    <img src="{{ url('page\assets\img\approach-shape.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-approach-box overly-one">
                            <div class="overly-two">
                                <div class="icon">
                                    <i class="flaticon-padlock"></i>
                                </div>
                                <h3>Keep Software Updated </h3>
                                <p>Lorem ipsum dolor amet, cons ectetur adipiscing elit, sed eiu smod tempor incididunt </p>
                                <div class="approach-shape">
                                    <img src="{{ url('page\assets\img\approach-shape.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-approach-box overly-one">
                            <div class="overly-two">
                                <div class="icon">
                                    <i class="flaticon-url"></i>
                                </div>
                                <h3>Check Website Url</h3>
                                <p>Lorem ipsum dolor amet, cons ectetur adipiscing elit, sed eiu smod tempor incididunt </p>
                                <div class="approach-shape">
                                    <img src="{{ url('page\assets\img\approach-shape.png') }} " alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-approach-box overly-one">
                            <div class="overly-two">
                                <div class="icon">
                                    <i class="flaticon-antivirus"></i>
                                </div>
                                <h3>Use Antivirus Software</h3>
                                <p>Lorem ipsum dolor amet, cons ectetur adipiscing elit, sed eiu smod tempor incididunt </p>
                                <div class="approach-shape">
                                    <img src="{{ url('page\assets\img\approach-shape.png') }} " alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="approach-right-shape shape-three">
                <img src="{{ url('page\assets\img\approach-right-shape.png') }}" alt="Image">
            </div>
        </section>
        <!-- End Our Approach Area -->

        <!-- Start Solution Area -->
        <section class="solution-area solution-area-three white-bg pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="solution-content">
                            <div class="solution-title">
                                <span>Pasa para hacer tu comprar</span>
                                <h2>¿Queres probar nuestros productos o servicios? Es facil y rápido, tenes que seguir estos pasos.</h2>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="single-solution overly-one">
                                        <div class="overly-two">
                                            <h3>1 - Envianos lo que deseas imprimir</h3>
                                            <p>Hay varias formas de enviarnos tus documentos, vía email (haciendo click aca), vía nuestra innovadora plataforma (haciendo click aca), vía whatsapp (haciendo click aca) o de la manera que quieras.</p>
                                            <span>01</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="single-solution overly-one">
                                        <div class="overly-two">
                                            <h3>2 - Lo imprimimos</h3>
                                            <p>Teniendo en cuanta como hiciste tu pedido, nosotros nos encargamos de imprimirlo.</p>
                                            <span>02</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 offset-md-3 offset-lg-0">
                                    <div class="single-solution overly-one">
                                        <div class="overly-two">
                                            <h3>3 - Te lo mandamos</h3>
                                            <p>Te lo mandamos a donde vos nos dijiste.</p>
                                            <span>03</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="solution-img-two text-center">
                            <img src="{{ url('page\assets\img\printhouse.png') }} " alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="solution-shape-left shape-three">
                <img src="{{ url('page\assets\img\solution-shape-left.png') }}" alt="Image">
            </div>
        </section>
        <!-- End Solution Area -->

        <!-- Start Safety Area -->
        <section class="safety-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Nuestros Productos</span>
                    <h2>Alguno de los productos o servicios que ofrecemos son</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-safety overly-one">
                            <div class="overly-two">
                                <img src="{{ url('page\assets\img\safety-icon\impresora.png') }}" alt="Image" width="20%">
                                <h3>Impresiones Remotas</h3>
                                <p>Nos envias tus documentos a imprimir y nosotros lo imprimimos por vos.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-safety overly-one">
                            <div class="overly-two">
                                <img src="{{ url('page\assets\img\safety-icon\printphone.png') }} " alt="Image" width="20%">
                                <h3>Multiplataforma</h3>
                                <p>Podes imprimir desde cualquier dispositivo. También podes gestionar tus archivos desde tu celular.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-safety overly-one">
                            <div class="overly-two">
                                <img src="{{ url('page\assets\img\safety-icon\cloud-storage.png') }} " alt="Image" width="20%">
                                <h3>Plataforma web para trabajar</h3>
                                <p>Con nuestra plataforma web, podes subir tus archivos y editarlos en linea.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-safety overly-one">
                            <div class="overly-two">
                                <img src="{{ url('page\assets\img\safety-icon\calendar.png') }} " alt="Image" width="20%">
                                <h3>Impresiones Programadas</h3>
                                <p>Elegí que día queres que te llegue lo que pidas a tu casa, y no te preocupes por olvidarte.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-safety overly-one">
                            <div class="overly-two">
                                <img src="{{ url('page\assets\img\safety-icon\cloud-computing.png') }} " alt="Image" width="20%">
                                <h3>Impresora Online</h3>
                                <p>Con este servicio podes imprimir en nuestras impresoras como si estuvieran en tu oficina.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-safety overly-one">
                            <div class="overly-two">
                                <img src="{{ url('page\assets\img\safety-icon\rocket.png') }} " alt="Image" width="20%">
                                <h3>Ahorra en mantenimiento</h3>
                                <p>Nosotros imprimimos lo que vos necesitas, sin que te preocupes por el estado impresora ni sus insumos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="safety-shape-1 shape-three">
                <img src="{{ url('page\assets\img\safety-shape-1.png') }}" alt="Image">
            </div>
            <div class="safety-shape-2 shape-three">
                <img src="{{ url('page\assets\img\safety-shape-2.png') }}" alt="Image">
            </div>
            <div class="safety-shape-3 shape-three">
                <img src="{{ url('page\assets\img\safety-shape-3.png') }}" alt="Image">
            </div>
        </section>
        <!-- End Safety Area -->

        <!-- Start Pricing Area -->
        <section class="pricing-area white-bg pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Security Packages</span>
                    <h2>We have different types of pricing plans</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-pricing overly-one">
                            <div class="overly-two">
                                <div class="pricing-title">
                                    
                                    <img src="{{ url('page\assets\img\precio\impresora-texto-precio.svg') }}" alt="Image" width="35%" height="35%" />
                                    <h3>Imprimir Texto</h3>
                                    <h2><sub>$</sub>5</h2>
                                    <span>/Por Hoja</span>
                                </div>
    
                                <ul>
                                    <li>30 Days Product Testing</li>
                                    <li>Upgrade Anytime Protection</li>
                                    <li>Unlimited Malware Removal</li>
                                    <li>24/7 Live Assistance</li>
                                    <li>Scan Every 12 Hrs</li>
                                    <li>Configure Software</li>
                                </ul>
    
                                <a href="#" class="default-btn">
                                    <span>Read More</span>
                                </a>
    
                                <div class="pricing-shape">
                                    <img src="{{ url('page\assets\img\pricing-shape.png') }} " alt="Image">
                                </div>

                                <div class="pricing-shape-2">
                                    <img src="{{ url('page\assets\img\pricing-shape-2.png') }} " alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-pricing overly-one">
                            <div class="overly-two">
                                <div class="pricing-title">
                                    <img src="{{ url('page\assets\img\precio\impresora-imagen-precio.svg') }}" alt="Image" width="30%" height="30%" />
                                    <h3>Popular</h3>
                                    <h2><sub>$</sub>22</h2>
                                    <span>/Por Hoja</span>
                                </div>
    
                                <ul>
                                    <li>40 Days Product Testing</li>
                                    <li>Upgrade Anytime Protection</li>
                                    <li>Unlimited Malware Removal</li>
                                    <li>24/7 Live Assistance</li>
                                    <li>Scan Every 13 Hrs</li>
                                    <li>Configure Software</li>
                                </ul>
    
                                <a href="#" class="default-btn">
                                    <span>Read More</span>
                                </a>
    
                                <div class="pricing-shape">
                                    <img src="{{ url('page\assets\img\pricing-shape.png') }} " alt="Image">
                                </div>
                                
                                <div class="pricing-shape-2">
                                    <img src="{{ url('page\assets\img\pricing-shape-2.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="single-pricing overly-one">
                            <div class="overly-two">
                                <div class="pricing-title">
                                    
                                    <img src="{{ url('page\assets\img\precio\libro-precio.svg') }}" alt="Image" width="38%" height="38%" />
                                    <h3>Por Cantidad o Libro</h3>
                                    <h2><sub>$</sub>16</h2>
                                    <span>/Por Hoja</span>
                                </div>
    
                                <ul>
                                    <li>50 Days Product Testing</li>
                                    <li>Upgrade Anytime Protection</li>
                                    <li>Unlimited Malware Removal</li>
                                    <li>24/7 Live Assistance</li>
                                    <li>Scan Every 14 Hrs</li>
                                    <li>Configure Software</li>
                                </ul>
    
                                <a href="#" class="default-btn">
                                    <span>Read More</span>
                                </a>
    
                                <div class="pricing-shape">
                                    <img src="{{ url('page\assets\img\pricing-shape.png') }}" alt="Image">
                                </div>
                                
                                <div class="pricing-shape-2">
                                    <img src="{{ url('page\assets\img\pricing-shape-2.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pricing-shape shape-three">
                <img src="{{ url('page\assets\img\pricing-right-shape.png') }} " alt="Image">
            </div>
        </section>
        <!-- End Pricing Area -->

        <!-- Start Counter Area -->
        <section class="counter-area counter-area-three pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="counter-img">
                            <img src="{{ url('page\assets\img\svg\rocketstartup.svg') }}" alt="Image" >
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="counter-max-wide">
                            <div class="section-title">
                                <span>Por que elegirnos</span>
                                <h2>Nuestros números</h2>
                            </div>
                        
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-counter overly-one">
                                        <div class="overly-two">
                                            <img src="{{ url('page\assets\img\svg\impresoracloud.svg') }}" alt="Image" width="35%" height="35%" />
                                            <h2>
                                                <span class="odometer" data-count="365">00</span>
                                            </h2>
                                            <h3>Impresora Contectadas</h3>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-counter overly-one">
                                        <div class="overly-two">
                                            <img src="{{ url('page\assets\img\svg\cartuchos.svg') }}" alt="Image" width="35%" height="35%" />
                                            <h2>
                                                <span class="odometer" data-count="1000">00</span> 
                                            </h2>
                                            <h3>Insumos Vendidos</h3>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-counter overly-one">
                                        <div class="overly-two">
                                            <img src="{{ url('page\assets\img\svg\impresoraerror.svg') }}" alt="Image" width="35%" height="35%" />
                                            <h2>
                                                <span class="odometer" data-count="567">00</span> 
                                            </h2>
                                            <h3>Impresoras Reparadas</h3>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-counter overly-one">
                                        <div class="overly-two">
                                            <img src="{{ url('page\assets\img\svg\impresorawarning.svg') }}" alt="Image" width="35%" height="35%" />
                                            <h2>
                                                <span class="odometer" data-count="100">00</span> 
                                                <span class="target">%</span>
                                            </h2>
                                            <h3>Impresora Mantenidas</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Area -->

        <!-- Start Team Area ->
        <section class="team-area team-area-three white-bg pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Professionals</span>
                    <h2>Meet our skilled team</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-team">
                            <img src="{{ url('page\assets\img\team\team-img-1.jpg') }}" alt="Image">

                            <div class="team-content">
                                <h3>Ciaran Sebastian</h3>
                                <span>Commercial Director</span>

                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-team">
                            <img src="{{ url('page\assets\img\team\team-img-2.jpg') }} " alt="Image">

                            <div class="team-content">
                                <h3>Jendoubi Bayer</h3>
                                <span>Financial Officer</span>

                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                        <div class="single-team">
                            <img src="{{ url('page\assets\img\team\team-img-3.jpg') }} " alt="Image">

                            <div class="team-content">
                                <h3>Andrew Gleeson</h3>
                                <span>Chief Executive Officer</span>

                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-right-shape shape-three">
                <img src="{{ url('page\assets\img\team-right-shape.png') }} " alt="Image">
            </div>
        </section>
        <!-- End Team Area -->

        <!-- Start Protect Area -->
        <section class="protect-area protect-area-three pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Cyber Security Protect</span>
                    <h2>Protect Your Website, Web Server And Web Application From Hacker Threats</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-challenges overly-one">
                            <div class="overly-two">
                                <i class="flaticon-database"></i>
                                <h3>Database Security</h3>
                                <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                                <span class="flaticon-database"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-challenges overly-one">
                            <div class="overly-two">
                                <i class="flaticon-application"></i>
                                <h3>Database Security</h3>
                                <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                                <span class="flaticon-application"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-challenges overly-one">
                            <div class="overly-two">
                                <i class="flaticon-security"></i>
                                <h3>Web Security</h3>
                                <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                                <span class="flaticon-security"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-challenges overly-one">
                            <div class="overly-two">
                                <i class="flaticon-security-1"></i>
                                <h3>Server Security</h3>
                                <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                                <span class="flaticon-security-1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="protect-left-shape shape-three">
                <img src="{{ url('page\assets\img\protect-left-shape.png') }} " alt="Image">
            </div>
        </section>
        <!-- Eed Protect Area -->

        <!-- Start FAQ Area -->
        <section class="faq-area white-bg ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-img">
                            <img src="{{ url('page\assets\img\faq-img.png') }} " alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-accordion">
                            <div class="faq-title">
                                <h2>Frequently Asked Questions</h2>
                                <span>Te ayudamos con tus preguntas</span>
                            </div>

                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        ¿Como hago mi usuario?
                                    </a>
        
                                    <div class="accordion-content show">
                                        <p>Para crear tu usuario lo que necesitas acceder a esta direccion, luego completar los datos que te solicitamos. Asi crearas tu usuario, luego necesitas iniciar sesion, para asi poder subir archivos para imprimir</p>
                                    </div>
                                </li>
        
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        ¿Cual es el precio del envio?
                                    </a>
        
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                                    </div>
                                </li>
        
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        ¿Puedo ir a buscar que imprimi?
                                    </a>
        
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                                    </div>
                                </li>
        
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        ¿Como comunicarse con nosotros?
                                    </a>
        
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                                    </div>
                                </li>
        
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        ¿Otras solicitudes?
                                    </a>
        
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        ¿Mis datos esta seguros en la plataforma?
                                    </a>
        
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-right-shape shape-three">
                <img src="{{ url('page\assets\img\faq-right-shape.png') }}" alt="Image">
            </div>
        </section>
        <!-- End FAQ Area -->

        <!-- Start Blog Area -->
        <section class="blog-area blog-area-three white-bg pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>Read The Latest Articles From Us</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="{{ url('page\assets\img\blog\blog-4.jpg') }} " alt="Image">
                                </a>
                            </div>

                            <div class="blog-content">
                                <span>September 20, 2020</span>
                                <h3><a href="blog-details.html">The security risks of changing package owners</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="{{ url('page\assets\img\blog\blog-5.jpg') }} " alt="Image">
                                </a>
                            </div>

                            <div class="blog-content">
                                <span>September 19, 2020</span>
                                <h3><a href="blog-details.html">Tips to Protecting Your Business and Family</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="{{ url('page\assets\img\blog\blog-6.jpg') }} " alt="Image">
                                </a>
                            </div>

                            <div class="blog-content">
                                <span>September 18, 2020</span>
                                <h3><a href="blog-details.html">Protect Your Workplace from Cyber Attacks</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog-left-shape shape-three">
                <img src="{{ url('page\assets\img\blog-left-shape.png') }} " alt="Image">
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start Partner Area -->
        <div class="partner-area bg-color ptb-70">
            <div class="container">
                <div class="partner-slider owl-theme owl-carousel">
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{ url('page\assets\img\partner\partner-1.png') }} " alt="Image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="#">
                            <img src="{{ url('page\assets\img\partner\partner-2.png') }} " alt="Image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="#">
                            <img src="{{ url('page\assets\img\partner\partner-3.png') }} " alt="Image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="#">
                            <img src="{{ url('page\assets\img\partner\partner-4.png') }} " alt="Image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="#">
                            <img src="{{ url('page\assets\img\partner\partner-5.png') }} " alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Area -->

        <!-- Start Footer Area -->
        <footer class="footer-area pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <a href="index.html" class="logo">
                                <img src="{{ url('page\assets\img\logo.png') }}" alt="Image">
                            </a>

                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consec tetur adipiscing.</p>

                            <ul class="social-icon">
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-linkedin-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Address</h3>

                            <ul class="address">
                                <li class="location">
                                    <i class="bx bxs-location-plus"></i>
                                    6890 Blvd, The Bronx, NY 1058 New York, USA
                                </li>
                                <li>
                                    <i class="bx bxs-envelope"></i>
                                    <a href="mailto:hello@seqty.com">hello@seqty.com</a>
                                    <a href="#">skype: example</a>
                                </li>
                                <li>
                                    <i class="bx bxs-phone-call"></i>
                                    <a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
                                    <a href="tel:+1-(514)-312-6677">+1 (514) 312-6677</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Solution</h3>

                            <ul class="import-link">
                                <li>
                                    <a href="#">Secure Private Cloud</a>
                                </li>
                                <li>
                                    <a href="#">Online Backup</a>
                                </li>
                                <li>
                                    <a href="#">Secure Websites</a>
                                </li>
                                <li>
                                    <a href="#">Cyber-Security</a>
                                </li>
                                <li>
                                    <a href="#">Enterprise Networks</a>
                                </li>
                                <li>
                                    <a href="#">Collaboration</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Resources</h3>

                            <ul class="import-link">
                                <li>
                                    <a href="#">Cybersecurity Strategies</a>
                                </li>
                                <li>
                                    <a href="#">Security Advisories</a>
                                </li>
                                <li>
                                    <a href="#">Security News</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Case Studies</a>
                                </li>
                                <li>
                                    <a href="#">User Guides</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copy-right-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p>Copyright @2020 Seqty. Designed <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <ul class="footer-menu">
                            <li>
                                <a href="privacy-policy.html" target="_blank">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="terms-conditions.html" target="_blank">
                                    Terms & Conditions
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->
        
        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="bx bx-chevrons-up"></i>
            <i class="bx bx-chevrons-up"></i>
        </div>
        <!-- End Go Top Area -->
        

        <!-- Links of JS files -->
        <script src="{{ url('page\assets\js\jquery.min.js') }} "></script>
        <script src="{{ url('page\assets\js\popper.min.js') }} "></script>
        <script src="{{ url('page\assets\js\bootstrap.min.js') }} "></script>
        <script src="{{ url('page\assets\js\meanmenu.min.js') }} "></script>
        <script src="{{ url('page\assets\js\owl.carousel.min.js') }} "></script>
        <script src="{{ url('page\assets\js\nice-select.min.js') }} "></script>
        <script src="{{ url('page\assets\js\magnific-popup.min.js') }} "></script>
        <script src="{{ url('page\assets\js\parallax.min.js') }} "></script>
        <script src="{{ url('page\assets\js\appear.min.js') }} "></script>
        <script src="{{ url('page\assets\js\odometer.min.js') }} "></script>
        <script src="{{ url('page\assets\js\smoothscroll.min.js') }} "></script>
        <script src="{{ url('page\assets\js\form-validator.min.js') }} "></script>
        <script src="{{ url('page\assets\js\contact-form-script.js') }} "></script>
        <script src="{{ url('page\assets\js\ajaxchimp.min.js') }} "></script>
        <script src="{{ url('page\assets\js\wow.min.js') }} "></script>
        <script src="{{ url('page\assets\js\custom.js') }} "></script>
    </body>
</html>
