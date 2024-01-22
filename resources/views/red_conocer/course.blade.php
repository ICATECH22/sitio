<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>certificaciones</title>

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
                                    <li><a href="#">Registros</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{ route('ece_icatech.certificacion.ec02017_1') }}">EC02017.01</a></li>
                                                <li><a href="{{ route('ece_icatech.certificacion.ec0076') }}">EC0076</a></li>
                                                <li><a href="{{ route('ece_icatech.certificacion.ec0127') }}">EC0127</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{ route('ece_icatech.certificacion.ec0366') }}">EC0366</a></li>
                                                <li><a href="{{ route('ece_icatech.certificacion.ec0401') }}">EC0401</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{ route('ece_icatech.certificacion.ec0305') }}">EC0305</a></li>
                                                <li><a href="{{ route('ece_icatech.certificacion.ec1415') }}">EC1415</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <img src="{{ asset('assets/ece/img/bg-img/bg-1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('ece_icatech.acercadenosotros') }}">Acerca de Nosotros</a></li>
                                    <li><a href="{{ route('ece_icatech.certificaciones') }}">Certificaciones</a></li>
                                    <li><a href="{{ route('ece_icatech.contactanos') }}">Contacto</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+52) 961 150 2359</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url('{{ asset('assets/ece/img/bg-img/breadcumb.jpg') }}');">
        <div class="bradcumbContent">
            <h2>Certificaciones</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area mt-50 section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Certificaciones mas populares</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp"
                        data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>Evaluación de la competencia de candidatos con base en Estándares de Competencia</h5>
                            <span>CERTIFICACION EC0076</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p style="text-align: justify;">Refiere a las funciones que una persona realiza para evaluar
                                la competencia de candidatos con base en Estándares de Competencia cumpliendo los
                                principios de transparencia, imparcialidad y objetividad.</p>
                            <a href="{{ route('ece_icatech.certificacion.ec0076') }}" class="btn academy-btn btn-sm">Leer mas</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url('{{ asset('assets/ece/img/bg-img/ec0076.jpeg') }}');">
                        </div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp"
                        data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>Preparación de alimentos</h5>
                            <span>Certificación EC0127</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p style="text-align: justify;">Relacionado con la elaboración de los alimentos desde su
                                preparación, hasta su terminación para servirse en restaurantes.</p>
                            <a href="{{ route('ece_icatech.certificacion.ec0127') }}" class="btn academy-btn btn-sm">Leer mas</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url('{{ asset('assets/ece/img/bg-img/ec0127.jpeg') }}');">
                        </div>
                    </div>
                </div>

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

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp"
                        data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>Administración y venta en pequeños negocios/establecimientos</h5>
                            <span>Certificación EC1415</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p style="text-align: justify;">Estándar de Competencia dirigido a personas que deban
                                contar con conocimientos, habilidades, destrezas y actitudes para las personas que
                                desempeñan las funciones de ventas en pequeños negocios.</p>
                            <a href="{{ route('ece_icatech.certificacion.ec1415') }}" class="btn academy-btn btn-sm">Leer mas</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url('{{ asset('assets/ece/img/bg-img/ec1415.jpeg') }}');">
                        </div>
                    </div>
                </div>
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp"
                        data-wow-delay="800ms">
                        <div class="popular-course-content">
                            <h5>Desarrollo de cursos de formación en línea</h5>
                            <span>Certificación EC0366</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p style="text-align: justify;">La certificación por competencias laborales es un documento
                                de reconocimiento oficial que avala y soporta de que cuentas con los conocimientos,
                                habilidades y actitudes para desarrollar una actividad laboral con un alto nivel de
                                profesionalismo y totalmente apegado a las mejores prácticas que dictan los mercados
                                laborales internacionales.</p>
                            <a href="{{ route('ece_icatech.certificacion.ec0366') }}" class="btn academy-btn btn-sm">Leer mas</a>
                        </div>
                        <div class="popular-course-thumb bg-img"
                            style="background-image: url('{{ asset('assets/ece/img/bg-img/ec0366.jpeg') }}');"></div>
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
                        <div class="popular-course-thumb bg-img"
                            style="background-image: url('{{ asset('assets/ece/img/bg-img/ec0401.jpeg') }}');"></div>
                    </div>
                </div>

                <!-- ##### Top Popular Courses Area End ##### -->
            </div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Area End ##### -->


    <!-- ##### Top Popular Courses Details Area Start ##### -->
    <div class="popular-course-details-area wow fadeInUp" data-wow-delay="300ms">
        <div class="single-top-popular-course d-flex align-items-center flex-wrap">
            <div class="popular-course-content">
                <h5>Certificación en el Estándar de Competencia</h5>
                <span>EC02017.01</span>
                <div class="course-ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p style="text-align: justify;">Impartición de cursos de formación del capital humano de manera
                    presencial grupal.
                    Adquiere conocimientos, habilidades y destrezas evaluadas y reconocidas por un organismo oficial que
                    te avala como instructor de capacitación.
                    Dirigido a:<br>
                    • Equipos de Instructores Internos de una empresa.<br>
                    • Instructores independientes, sea que trabajen o no dentro de una organización..</p>
                <a href="{{ route('ece_icatech.certificacion.ec02017_1') }}" class="btn academy-btn btn-sm mt-15">Ver Más</a>
            </div>
            <div class="popular-course-thumb bg-img" style="background-image: url('{{ asset('assets/ece/img/bg-img/ec02017.01.jpeg') }}');"></div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Details Area End ##### -->

    <!-- ##### Course Area Start ##### -->
    {{-- <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            {{-- <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100">
                        <div class="course-icon">
                            <i class="icon-id-card"></i>
                        </div>
                        <div class="course-content">
                            <h4>Business School</h4>
                            <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100">
                        <div class="course-icon">
                            <i class="icon-worldwide"></i>
                        </div>
                        <div class="course-content">
                            <h4>Marketing</h4>
                            <p>Lacinia, lacinia la cus non, fermen tum nisi.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100">
                        <div class="course-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="course-content">
                            <h4>Photography</h4>
                            <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div> --}}
    <!-- ##### Course Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        <h3>¿Quieres matricularte en nuestra Academia? ¡Ponerse en contacto!</h3>
                        <a href="#" class="btn academy-btn">Contactanos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="{{ asset('assets/ece/img/core-img/LOGO_ECE4.png') }}" alt=""></a>
                            </div>
                            <p>Entidad de Certificación y Evaluación del ICATECH.</p>
                            <div class="footer-social-info">
                                <a href="https://www.facebook.com/ICATchiapas?mibextid=ZbWKwL"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/IcatechOficial?s=09"><i class="fa fa-twitter"></i></a>
                                <a href="https://instagram.com/icatechchiapas?igshid=NTc4MTIwNjQ2YQ=="><i
                                        class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Accesos Directos</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Contacto</a></li>
                                    <li><a href="#">Avisos de Privacidad</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Galeria</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="{{ asset('assets/ece/img/bg-img/gallery1.jpg') }}" class="gallery-img" title="Gallery Image 1"><img src="{{ asset('assets/ece/img/bg-img/gallery1.jpg') }}" alt=""></a>
                                <a href="{{ asset('assets/ece/img/bg-img/gallery2.jpg') }}" class="gallery-img" title="Gallery Image 2"><img src="{{ asset('assets/ece/img/bg-img/gallery2.jpg') }}" alt=""></a>
                                <a href="{{ asset('assets/ece/img/bg-img/gallery3.jpg') }}" class="gallery-img" title="Gallery Image 3"><img src="{{ asset('assets/ece/img/bg-img/gallery3.jpg') }}" alt=""></a>
                                <a href="{{ asset('assets/ece/img/bg-img/gallery4.jpg') }}" class="gallery-img" title="Gallery Image 4"><img src="{{ asset('assets/ece/img/bg-img/gallery4.jpg') }}" alt=""></a>
                                <a href="{{ asset('assets/ece/img/bg-img/gallery5.jpg') }}" class="gallery-img" title="Gallery Image 5"><img src="{{ asset('assets/ece/img/bg-img/gallery5.jpg') }}" alt=""></a>
                                <a href="{{ asset('assets/ece/img/bg-img/gallery6.jpg') }}" class="gallery-img" title="Gallery Image 6"><img src="{{ asset('assets/ece/img/bg-img/gallery6.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contacto</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>14 Poniente Norte No. 239 Colonia Moctezuma</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Conmutador: (961) 61-2-16-21</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>icatech@icatech.chiapas.gob.mx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            ICATECH &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Todos los Derechos reservados
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
