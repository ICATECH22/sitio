<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
    @include('red_conocer.component.breadcumb', ['breadcrumb' => __('Contáctanos')])
    <!-- ##### Breadcumb Area End ##### -->
    <div class="top-popular-courses-area mt-70 section-padding-100-70"></div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                                        <h3>Contáctanos</h3>
                                        <p class="mt-30">
                                            Entidad de Certificación y Evaluación de Competencias, "ECE-ICATECH"
                                        </p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <p>
                                            14 poniente norte No. 239 colonia Moctezuma<br />
                                            Tuxtla Gutiérrez; Chiapas
                                        </p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>
                                        <p>conmutador: (961) 61-2-16-21</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>
                                        <p>ece@icatech.chiapas.gob.mx</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form Area -->

                            <div class="col-12 col-lg-7">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <div class="academy-tabs-content">
                                        <div class="row justify-content-center">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1"
                                                        role="tab" aria-controls="tab1" aria-selected="false">Quejas y Comentarios</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tab--2" data-toggle="tab"
                                                        href="#tab2" role="tab" aria-controls="tab2"
                                                        aria-selected="false">Contáctanos</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-content mb-100" id="myTabContent">
                                            <div class="tab-pane fade" id="tab1" role="tabpanel"
                                                aria-labelledby="tab--1">
                                                <div class="academy-tab-content">
                                                    <!-- Tab Text -->
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <form>
                                                                    <div class="form-group"> <!-- Boton de estado -->
                                                                        <label for="state_id"
                                                                            class="control-label"><br>Comentarios sobre
                                                                            nuestros procesos de evaluación y
                                                                            certificación <br> <br> Para describir su
                                                                            queja o comentarios se desglosa un listado
                                                                            de los procesos que le pueden servir de
                                                                            apoyo.</label>
                                                                        <select class="form-control" id="state_id">
                                                                            <option value=""></option>
                                                                            <option value="OP">• Qué opinión tiene
                                                                                sobre nuestros procesos de:</option>
                                                                            <option value="RI">• Registro e
                                                                                inscripción</option>
                                                                            <option value="ANP">• Atención de
                                                                                nuestro personal</option>
                                                                            <option value="ICP">• La información es
                                                                                clara y precisa</option>
                                                                            <option value="CE">• La calidad de la
                                                                                evaluación</option>
                                                                            <option value="CNE">• La calidad de
                                                                                nuestros evaluadores </option>
                                                                            <option value="CTPE">• Los costos y
                                                                                tiempos de los procesos de evaluación.
                                                                            </option>
                                                                            <option value="CC">• La calidad de la
                                                                                certificación</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label">Escribe tus Comentarios
                                                                        </label>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                    </div>

                                                                    <div class="row g-3">
                                                                        <div class="col-md-15">
                                                                            <label for="validationDefault01"
                                                                                class="form-label">Nombre</label>
                                                                            <input type="text" class="form-control"
                                                                                id="validationDefault01"
                                                                                value="" required
                                                                                placeholder="Nombre Completo">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row g-3">
                                                                        <div class="col-md-15">
                                                                            <label for="validationDefault01"
                                                                                class="form-label">E-mail</label>
                                                                            <input type="email" class="form-control"
                                                                                id="validationDefault01"
                                                                                value="" required
                                                                                placeholder="Correo Electrónico">
                                                                        </div>

                                                                        <div class="form-group"> <!-- Calle 2 -->
                                                                            <label for="street2_id"
                                                                                class="control-label">Teléfono</label>
                                                                            <input type="text" class="form-control"
                                                                                id="street2_id" name="street2"
                                                                                placeholder="Celular">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input is-invalid"
                                                                                type="checkbox" value=""
                                                                                id="invalidCheck3"
                                                                                aria-describedby="invalidCheck3Feedback"
                                                                                required>
                                                                            <label class="form-check-label"
                                                                                for="invalidCheck3">
                                                                                Al hacer clic, confirmo que he leído y
                                                                                acepto los términos y <a
                                                                                    href="docs/aviso_de_privacidad_pw.pdf"
                                                                                    target="_blank"
                                                                                    rel="noopener noreferrer"> Avisos
                                                                                    de Privacidad</a>
                                                                            </label>
                                                                            <div id="invalidCheck3Feedback"
                                                                                class="invalid-feedback">
                                                                                Debe estar de acuerdo antes de enviar.
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <button class="btn btn-primary"
                                                                            type="submit">Enviar formulario</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="tab2" role="tabpanel"
                                                aria-labelledby="tab--2">
                                                <div class="academy-tab-content">
                                                    <!-- Tab Text -->
                                                    <div class="academy-tab-text">
                                                        <form action="#" method="post">
                                                            <label for="state_id" class="control-label">¿Sobre qué
                                                                certificación estas interesado? <br> <br>Para
                                                                seleccionar el estándar de su preferencia se desglosa el
                                                                siguiente listado:</label>
                                                            <select class="form-control" id="state_id">
                                                                <option value=""></option>
                                                                <option value="076">
                                                                    • EC0076 Evaluación de las competencias de
                                                                    candidatos con base en estándares de competencia.
                                                                </option>
                                                                <option value="01">
                                                                    • EC0217.01 Impartición de cursos de formación del
                                                                    capital humano de manera presencial.
                                                                </option>
                                                                <option value="366">• EC0366 Desarrollo de cursos de
                                                                    formación en línea</option>
                                                                <option value="401">• EC0401 Liderazgo en el
                                                                    servicio público</option>
                                                                <option value="305">• EC0305 Prestación de servicios
                                                                    de atención al público</option>
                                                                <option value="127">• EC0127 Preparación de
                                                                    alimentos</option>
                                                                <option value="1415">• EC1415 Administración de
                                                                    pequeños negocios y/o establecimientos</option>
                                                            </select>
                                                            <input type="text" class="form-control" id="Nombre"
                                                                placeholder="Nombre" />
                                                            <input type="text" class="form-control" id="Teléfono"
                                                                placeholder="Teléfono" />
                                                            <input type="email" class="form-control" id="email"
                                                                placeholder="E-mail" />
                                                            <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="10" placeholder="mensaje"></textarea>
                                                            <button class="btn academy-btn mt-30" type="submit">
                                                                Enviar Mensaje
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->


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
