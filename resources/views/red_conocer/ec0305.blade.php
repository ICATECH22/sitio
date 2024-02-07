<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>CONOCER-EC0305</title>

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
                            <a href="index.html">
                                <img src="{{ asset('assets/ece/img/core-img/LOGO_ECE4.png') }}" alt=""
                                    style="float: left;">
                            </a>
                            <a href="index.html">
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
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ route('ece_icatech.index') }}">Inicio</a></li>
                                    <li><a href="{{ route('ece_icatech.certificaciones') }}">Certificaciones</a></li>
                                    <li><a href="{{ route('ece_icatech.acercadenosotros') }}">Acerca de Nosotros</a>
                                    </li>
                                    <li><a href="{{ route('ece_icatech.contactanos') }}">Contacto</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:9616494788"><i class="icon-telephone-2"></i>
                                    <span>(+52) 961 6494788</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    @include('red_conocer.component.breadcumb', ['breadcrumb' => __('Certificación EC0305')])
    <!-- ##### Breadcumb Area End ##### -->
    <br><br><br>

    <!-- ***** Información de curso ***** -->
    <div class="popular-course-details-area wow fadeInUp" data-wow-delay="300ms">
        <div class="single-top-popular-course d-flex align-items-center flex-wrap">
            <div class="popular-course-content">
                <h5>Prestación de servicios de atención a clientes</h5>
                <span>EC0305</span>
                <div class="course-ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p style="text-align: justify;">El estándar de competencia prestación de servicios de atención a
                    clientes contempla las funciones de
                    atender los requerimientos del cliente, identificando el tipo de atención y/o servicio requerido y
                    seleccionando el medio de comunicación por el cual se atendrá al cliente.</p>
            </div>
            <div class="popular-course-thumb bg-img"
                style="background-image: url('{{ asset('assets/ece/img/bg-img/ec0305.jpeg') }}');"></div>
        </div>
    </div>
    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area mt-50 section-padding-100-0">
        <!-- ##### Tabs ##### -->
        <div class="col-12 col-lg-12">
            <div class="academy-tabs-content">
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab"
                            aria-controls="tab1" aria-selected="false">CERTIFICACIÓN EC0305 ante Conocer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab"
                            aria-controls="tab2" aria-selected="false">Beneficios y valor de la Certificación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab"
                            aria-controls="tab3" aria-selected="true">Requisitos y Costos</a>
                    </li>
                </ul>

                <div class="tab-content mb-100" id="myTabContent">
                    <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                        <div class="academy-tab-content">
                            <!-- Tab Text -->
                            <div class="academy-tab-text">
                                <p style="text-align: justify;">OBJETIVO<br>
                                    <br>Los participantes practicarán el proceso completo de prestación de servicios de
                                    atención a clientes,
                                    siguiendo los elementos del estándar, atender los requerimientos del cliente,
                                    gestionar el servicio
                                    requerido por el cliente y obtener la satisfacción del servicio, con base en el
                                    estándar EC0305 avalado por
                                    el CONOCER y la SEP.<br>
                                    <br>Capacitación en el estándar de competencia EC0305 + Evaluación +
                                    Certificación<br>
                                    • Aplicación de evaluación diagnóstica para evaluar el nivel del instructor, con
                                    retroalimentación y
                                    definición de pasos siguientes.<br>
                                    • Capacitación en el estándar de competencia EC035 de CONOCER como preparación a la
                                    Evaluación.<br>
                                    • Revisión del Plan de evaluación y aplicación de la evaluación.<br>
                                    • Presentación de resultados y puntaje de la evaluación.<br>
                                    • Gestión y entrega del certificado por parte de la entidad de certificación.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                        <div class="academy-tab-content">
                            <!-- Tab Text -->
                            <div class="academy-tab-text">
                                <p style="text-align: justify;">BENEFICIOS<br>
                                    <br>• Generará un valor agregado como persona que atiende al cliente con base en el
                                    estándar, lo cual
                                    permitirá desarrollar y fortalecer sus conocimientos, habilidades, destrezas y
                                    actitudes, para
                                    obtener mejores resultados derivados de su trabajo.<br>
                                    • Aumentará su competitividad en el Mercado.<br>
                                    • Mejorará su desempeño como prestador de servicios de atención a clientes.<br>
                                    • Adquirirá herramientas para profesionalizarse como prestador de servicios de
                                    atención a clientes.<br>
                                    • Obtendrá un registro nacional al acreditarse en la competencia.<br>
                                    <br>DIRIGIDO<br>
                                    <br>Dueños de negocio, emprendedores, directores, gerentes, supervisores,
                                    coordinadores, jefes de área,
                                    empleados en áreas secretariales, de recepción, información al público, cajeros,
                                    hotelería y restaurantes,
                                    ventas, servicios de alimentos, salud, trabajo social, entre otros y en general a
                                    cualquier persona que ejerza
                                    un servicio de atención a clientes internos y externos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                        <div class="academy-tab-content">
                            <!-- Tab Text -->
                            <div class="academy-tab-text">
                                <p style="text-align: justify;">Estándar de competencia: $2,500.00<br>
                                    Certificado $500.00<br>
                                    Inversión total: $3,000.00<br>

                                    Requisitos:<br>
                                    • Identificación oficial<br>
                                    • Curp<br>
                                    • Comprobante de domicilio<br>
                                    • Fotografía tamaño infantil a color</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
</body>

</html>
