<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Entidad de Certificación y Evaluación ICATECH</title>

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
                                    <li><a href="{{ route('ece_icatech.contactanos') }}">Contactanos</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img"
                style="background-image: url('{{ asset('assets/ece/img/bg-img/BannerECE_webp1.webp') }}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Certificaciones que necesitas</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenido a nuestra<br>Pagina en Linea
                                </h2>
                                <a href="{{ route('ece_icatech.certificaciones') }}" class="btn academy-btn"
                                    data-animation="fadeInUp" data-delay="700ms">Leer mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img"
                style="background-image: url('{{ asset('assets/ece/img/bg-img/BannerECE__webp3.webp') }}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Certificaciones que necesitas</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenido a nuestra<br>Pagina en Linea
                                </h2>
                                <a href="{{ route('ece_icatech.certificaciones') }}" class="btn academy-btn"
                                    data-animation="fadeInUp" data-delay="700ms">Leer mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- single Hero Slide --}}
            <div class="single-hero-slide bg-img" style="background-image: url('{{ asset('assets/ece/img/bg-img/BannerECE__webp4.webp') }}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Certificaciones que necesitas</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenido a ECE-ICATECH<br>en linea
                                </h2>
                                <a href="course.html" class="btn academy-btn" data-animation="fadeInUp"
                                    data-delay="700ms">Leer mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                    <a href="{{ route('ece_icatech.certificaciones') }}" class="">
                                        <h5>Certificaciones en Linea</h5>
                                    </a>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-assistance"></i>
                                    <a href="https://icatechvirtual.com/" target="_blank" class="">
                                        <h5>Plataforma virtual ICATECH</h5>
                                    </a>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-telephone-3"></i>
                                    <a href="{{ route('ece_icatech.contactanos') }}" class="">
                                        <h5>Soporte Técnico</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Feature Area End ##### -->

    <!-- ##### Course Area Start ##### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp"
                        data-wow-delay="300ms">
                        <div class="course-icon">
                            <i class="icon-responsive"></i>
                        </div>
                        <div class="course-content">
                            <a href="{{ route('ece_icateh.educacion') }}" class="">
                                <h4>Educación</h4>
                            </a>
                            <p style="text-align: justify;">Comprende el fortalecimiento del conocimiento y desarrollo
                                de habilidades que
                                impulsen a las unidades económicas.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp"
                        data-wow-delay="400ms">
                        <div class="course-icon">
                            <i class="icon-worldwide"></i>
                        </div>
                        <div class="course-content">
                            <a href="{{ route('ece_icatech.administracion.publica') }}" class="">
                                <h4>Administración pública</h4>
                            </a>
                            <p style="text-align: justify;">Se desarrollan los conocimientos que conforman la
                                administración pública en los niveles estatal y
                                municipal.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp"
                        data-wow-delay="500ms">
                        <div class="course-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="course-content">
                            <a href="{{ route('ece_icatech.empresarios') }}" class="">
                                <h4>Empresarios, emprendedores.</h4>
                            </a>
                            <p style="text-align: justify;">van dirigidos al desarrollo del conocimiento con dinámicas
                                de investigación para fortalecer al sector empresarial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <div class="testimonials-area section-padding-100 bg-img bg-overlay"
        style="background-image: url('{{ asset('assets/ece/img/bg-img/BannerECE__webp2.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <span>Nuestros Testimonios</span>
                        <h3>Vea lo que opinan nuestros evaluados</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/ece/img/bg-img/maria_alfaro.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>Grandes maestros</h5>
                            <p style="text-align: justify;">Muy satisfecha por la experiencia vivida, muy profesionales
                                en la realización del proceso y en todo momento te sientes apoyado por los instructores
                                y evaluadores a cargo. Agradezco al ICATECH por aperturar estos espacios para la
                                profesionalización de las habilidades laborales.</p>
                            <h6><span>Marla Fabiola Alfaro Morales,</span> Instructor</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/ece/img/bg-img/elda_clemente_trujillo.jpg') }}"
                                alt="" />
                        </div>
                        <div class="testimonial-content">
                            <h5>Cursos fáciles y amigables</h5>
                            <p style="text-align: justify;">Hubo buena armonía con el maestro así como con los
                                compañeros, aprendí el trabajo en equipo, a realizar correctamente una carta
                                descriptiva, a tener una de las herramientas para el inicio de un curso como por ejemplo
                                lista de asistencia, ficha técnica y finalizar con las Evaluaciones.</p>
                            <h6><span>Elda Clemente Trujillo ,</span>Instructor</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/ece/img/bg-img/hector_diaz_yañez.jpg') }}" alt="" />
                        </div>
                        <div class="testimonial-content">
                            <h5>Me encantan los cursos aquí.</h5>
                            <p style="text-align: justify;">Fue una experiencia satisfactoria ya que quienes
                                intervinieron en ella son gente profesional y con una alta vocación de apoyo.</p>
                            <h6><span>Héctor Díaz Yáñez,</span>Instructor</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/ece/img/bg-img/Claudia_Lopez.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>Un buen instituto</h5>
                            <p style="text-align: justify;">Ha sido interesante y desafiante, puesto que ha motivado el
                                estar más atenta en la forma de impartir un curso y mejorar la calidad de cursos y
                                servicios del instituto</p>
                            <h6><span>Claudia López Maldonado,</span>Instructor</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Certificaciones más Populares</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp"
                        data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>Evaluación de la competencia de candidatos con base en estándares de
                                competencia</h5>
                            <span>CERTIFICACIÓN EC0076</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p style="text-align: justify;">Refiere a las funciones que una persona realiza para
                                evaluar la competencia de candidatos con base en
                                estándares de competencia cumpliendo los principios de transparencia, imparcialidad y
                                objetividad.</p>
                            <a href="{{ route('ece_icatech.certificacion.ec0076') }}"
                                class="btn academy-btn btn-sm">Leer Mas</a>
                        </div>
                        <div class="popular-course-thumb bg-img"
                            style="background-image: url('{{ asset('assets/ece/img/bg-img/ec0076.jpeg') }}');"></div>
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
                            <p style="text-align: justify;">relacionado con la elaboración de los alimentos desde su
                                preparación, hasta su terminación para servirse
                                en restaurantes.</p>
                            <a href="{{ route('ece_icatech.certificacion.ec0127') }}"
                                class="btn academy-btn btn-sm">Leer Mas</a>
                        </div>
                        <div class="popular-course-thumb bg-img"
                            style="background-image: url('{{ asset('assets/ece/img/bg-img/ec0127.jpeg') }}');"></div>
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
                            <p style="text-align: justify;">El estándar de competencia prestación de servicios de
                                atención a clientes contempla las funciones de
                                atender los requerimientos del cliente.</p>
                            <a href="{{ route('ece_icatech.certificacion.ec0305') }}"
                                class="btn academy-btn btn-sm">Leer Mas</a>
                        </div>
                        <div class="popular-course-thumb bg-img"
                            style="background-image: url('{{ asset('assets/ece/img/bg-img/ec0305.jpeg') }}');"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp"
                        data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>Administración y venta en pequeños negocios y/o establecimientos</h5>
                            <span>Certificación EC1415 </span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p style="text-align: justify;">Estándar de competencia dirigido a personas que deban
                                contar con conocimientos, habilidades, destrezas
                                y actitudes para las personas que desempeñan las funciones de ventas en pequeños
                                negocios.</p>
                            <a href="{{ route('ece_icatech.certificacion.ec1415') }}"
                                class="btn academy-btn btn-sm">Leer Mas</a>
                        </div>
                        <div class="popular-course-thumb bg-img"
                            style="background-image: url('{{ asset('assets/ece/img/bg-img/ec1415.jpeg') }}');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Partner Area Start ##### -->
    <div class="partner-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                        <a href="http://www.dgcft.sems.gob.mx/" target="_blank"><img
                                src="{{ asset('assets/ece/img/clients-img/logo_dgcft.png') }}" alt="" /></a>
                        <a href="https://www.icatech.gob.mx/" target="_blank"><img
                                src="{{ asset('assets/ece/img/clients-img/icatech.jpg') }}" alt=""></a>
                        <a href="http://www.redconocer.gob.mx/intranet.php" target="_blank"><img
                                src="{{ asset('assets/ece/img/clients-img/conocer_.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Partner Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        <h3>¿Quieres certificarte con nosotros? ponte en contacto</h3>
                        <a href="{{ route('ece_icatech.contactanos') }}" class="btn academy-btn">Mas Información</a>
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
</body>

</html>
