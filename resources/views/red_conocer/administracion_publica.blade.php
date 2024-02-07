<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>administracion-publica</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/ece/img/core-img/logo_ece_icatech1.png') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/ece/style.css') }}">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="academy-logo">
                            <a href="{{ route('ece_icatech.index') }}">
                                <img src="{{ asset('assets/ece/img/core-img/LOGO_ECE4.png') }}" alt=""
                                    style="float: left;">
                            </a>
                            <a href="{{ route('ece_icatech.index') }}">
                                <img src="{{ asset('assets/ece/img/core-img/conocer-logo.png') }}" alt=""
                                    style="float: right;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span><span class="bottom"></span>
                                </div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ route('ece_icatech.index') }}">Inicio</a></li>
                                    <li><a href="{{ route('ece_icatech.certificaciones') }}">Certificaciones</a></li>
                                    <li><a href="{{ route('ece_icatech.acercadenosotros') }}">Acerca de Nosotros</a>
                                    </li>
                                    <li><a href="{{ route('ece_icatech.contactanos') }}">Contactanos</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Informacion de telefono -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:9616494788"><i class="icon-telephone-2"></i> <span>(+52) 961 649
                                        4788</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    @include('red_conocer.component.breadcumb', ['breadcrumb' => __('Administración Pública')])
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area mt-50 section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Certificaciones EC0305 y EC0401</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp"
                        data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>Prestación de servicios de atención a clientes</h5>
                            <span>Certificación EC0305</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p style="text-align: justify;">El Estándar de Competencia prestación de servicios de
                                atención a clientes contempla las funciones de atender los requerimientos del cliente.
                            </p>
                            <a href="{{ route('ece_icatech.certificacion.ec0305') }}" class="btn academy-btn btn-sm">Leer mas</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url('{{ asset('assets/ece/img/bg-img/ec0305.jpeg') }}');">
                        </div>
                    </div>
                </div>

                <!-- ##### Top Popular Courses Area End ##### -->
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp"
                        data-wow-delay="00ms">
                        <div class="popular-course-content">
                            <h5>Liderazgo en el servicio público</h5>
                            <span>Certificación EC0401</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p style="text-align: justify;">Orientado a las personas que se desempeñan en la
                                Administración Pública, cuyas competencias incluyen: demostrar vocación de servicio,
                                construir relaciones, actuar con valores, enfocar a resultados e impulsar el cambio,
                                disponiendo de los instrumentos necesarios para desempeñar con calidad su función.</p>
                            <a href="{{ route('ece_icatech.certificacion.ec0401') }}" class="btn academy-btn btn-sm">Leer mas</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url('{{ asset('assets/ece/img/bg-img/ec0401.jpeg') }}');">
                        </div>
                    </div>
                </div>

                <!-- ##### Top Popular Courses Area End ##### -->
            </div>
        </div>
    </div>

    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        <h3>¿Quieres certificarte con nosotros? ¡Ponte en contacto!</h3>
                        <a href="{{ route('ece_icatech.contactanos') }}" class="btn academy-btn" style="text-align: center;">Contactanos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Footer Area Start ##### -->

    @include('red_conocer.component.footer')
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('assets/ece/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('assets/ece/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/ece/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('assets/ece/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('assets/ece/js/active.js') }}"></script>
    <!-- Google Maps -->
    <script src="https://maps.app.goo.gl/mQa8aTLrfz4UmAM7A"></script>
    <script src="{{ asset('assets/ece/js/google-map/map-active.js') }}"></script>
</body>

</html>
