<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
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
                            <img src="{{ asset('assets/ece/img/core-img/LOGO_ECE4.png') }}" alt="" style="float: left;">
                        </a>
                        <a href="index.html">
                            <img src="{{ asset('assets/ece/img/core-img/conocer-logo.png') }}" alt="" style="float: right;">
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
                <span class="navbarToggler"
                  ><span></span><span></span><span></span
                ></span>
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
                    <li><a href="{{ route('ece_icatech.certificaciones') }}s">Certificaciones</a></li>
                  </ul>
                </div>
                <!-- Nav End -->
              </div>

              <!-- Informacion de telefono -->
              <div class="calling-info">
                <div class="call-center">
                  <a href="tel:+529611502359"
                    ><i class="icon-telephone-2"></i>
                    <span>(+52) 961 150 2359
                        0</span></a
                  >
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div
      class="breadcumb-area bg-img"
      style="background-image: url('{{ asset('assets/ece/img/bg-img/breadcumb.jpg') }}')"
    >
      <div class="bradcumbContent">
        <h2>Contáctanos</h2>
      </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <br><br>

    <!-- ##### Google Maps ##### -->
    <div class="map-area wow fadeInUp" data-wow-delay="300ms">
      <div id="googleMap"></div>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-content">
              <div class="row">
                <!-- Contact Information -->
                <div class="col-12 col-lg-5">
                  <div
                    class="contact-information wow fadeInUp"
                    data-wow-delay="400ms"
                  >
                    <div class="section-heading text-left">
                      <h3>Contáctenos</h3>
                      <p class="mt-30">
                        Instituto de Capacitación y Vinculación Tecnológica del
                        Estado de Chiapas "ICATECH"
                      </p>
                    </div>

                    <!-- Contact Social Info -->
                    <div class="contact-social-info d-flex mb-30">
                      <a href="https://www.facebook.com/ICATchiapas"
                        ><i class="fa fa-facebook" aria-hidden="true"></i
                      ></a>
                      <a href="https://twitter.com/IcatechOficial?s=09"
                        ><i class="fa fa-twitter" aria-hidden="true"></i
                      ></a>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                      <div class="contact-icon mr-15">
                        <i class="icon-placeholder"></i>
                      </div>
                      <p>
                        14 Poniente Norte No. 239 Colonia Moctezuma<br />
                        Tuxtla Gutierrez, Chiapas
                      </p>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                      <div class="contact-icon mr-15">
                        <i class="icon-telephone-1"></i>
                      </div>
                      <p>Conmutador: (961) 61-2-16-21</p>
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
                          <a
                            class="nav-link"
                            id="tab--1"
                            data-toggle="tab"
                            href="#tab1"
                            role="tab"
                            aria-controls="tab1"
                            aria-selected="false"
                            >Quejas y Comentarios</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link active"
                            id="tab--2"
                            data-toggle="tab"
                            href="#tab2"
                            role="tab"
                            aria-controls="tab2"
                            aria-selected="false"
                            >Contáctenos</a
                          >
                        </li>
                      </ul>
                    </div>

                      <div class="tab-content mb-100" id="myTabContent">
                        <div
                          class="tab-pane fade"
                          id="tab1"
                          role="tabpanel"
                          aria-labelledby="tab--1">
                          <div class="academy-tab-content">
                            <!-- Tab Text -->
    <div class="container">
      <div class="row">
          <div class="col-12">
              <form>
                  <div class="form-group"> <!-- Boton de estado -->
                      <label for="state_id" class="control-label"><br>Comentarios sobre nuestras certificaciones</label>
                      <select class="form-control" id="state_id">
                          <option value=""></option>
                          <option value="TC">Trámites acerca de los cursos.</option>
                          <option value="AD">Trámites Administrativos diversos.</option>
                          <option value="CC">Calidad de los cursos.</option>
                          <option value="OT">Otro</option>
                      </select>
                  </div>

                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Escribe tus Comentarios </label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                  <div class="row g-3">
                      <div class="col-md-15">
                          <label for="validationDefault01" class="form-label">Nombre</label>
                          <input type="text" class="form-control" id="validationDefault01" value="" required placeholder="Nombre Completo">
                      </div>
                  </div>

                  <div class="row g-3">
                      <div class="col-md-15">
                          <label for="validationDefault01" class="form-label">E-mail</label>
                          <input type="email" class="form-control" id="validationDefault01" value="" required placeholder="Correo Electrónico">
                      </div>

                      <div class="form-group"> <!-- Calle 2 -->
                          <label for="street2_id" class="control-label">Teléfono</label>
                          <input type="text" class="form-control" id="street2_id" name="street2" placeholder="Celular">
                      </div>
                  </div>

                  <div class="col-12">
                      <div class="form-check">
                          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                          <label class="form-check-label" for="invalidCheck3">
                              Al hacer clic, confirmo que he leído y acepto los términos y <a href="https://icatech.gob.mx/avisos_privacidad/simplificado/AVISO_SIMPLIFICADO_TRANSPARENCIA_BUZON_DIGITAL.pdf" target="_blank" rel="noopener noreferrer"> Avisos de Privacidad</a>
                          </label>
                          <div id="invalidCheck3Feedback" class="invalid-feedback">
                              Debe estar de acuerdo antes de enviar.
                          </div>
                      </div>
                  </div>

                  <div class="col-12">
                      <button class="btn btn-primary" type="submit">Enviar formulario</button>
                  </div>
              </form>
          </div>
          <div class="col-2"></div>
      </div>
  </div>
                          </div>
                        </div>
                        <div
                          class="tab-pane fade show active"
                          id="tab2"
                          role="tabpanel"
                          aria-labelledby="tab--2">
                          <div class="academy-tab-content">
                            <!-- Tab Text -->
                            <div class="academy-tab-text">
                              <form action="#" method="post">
                                <label for="state_id" class="control-label"
                                  >¿Sobre qué curso estas interesado?</label
                                >
                                <select class="form-control" id="state_id">
                                  <option value=""></option>
                                  <option value="TC">
                                    Trámites acerca de los cursos.
                                  </option>
                                  <option value="AD">
                                    Trámites Administrativos diversos.
                                  </option>
                                  <option value="CC">Calidad de los cursos.</option>
                                  <option value="OT">Otro</option>
                                </select>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="Nombre"
                                  placeholder="Nombre"
                                />
                                <input
                                  type="text"
                                  class="form-control"
                                  id="Telefono"
                                  placeholder="Telefono"
                                />
                                <input
                                  type="email"
                                  class="form-control"
                                  id="email"
                                  placeholder="E-mail"
                                />
                                <textarea
                                  name="message"
                                  class="form-control"
                                  id="message"
                                  cols="30"
                                  rows="10"
                                  placeholder="Message"
                                ></textarea>
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
    <footer class="footer-area">
      <div class="main-footer-area section-padding-100-0">
        <div class="container">
          <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget mb-100">
                <div class="widget-title">
                  <a href="#"><img src="img/core-img/LOGO_ECE4.png" alt="" /></a>
                </div>
                <p>
                  Entidad de Certificación y Evaluación del ICATECH.
                </p>
                <div class="footer-social-info">
                  <a href="https://www.facebook.com/ICATchiapas?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/IcatechOficial?s=09"><i class="fa fa-twitter"></i></a>
                  <a href="https://instagram.com/icatechchiapas?igshid=NTc4MTIwNjQ2YQ=="><i class="fa fa-instagram"></i></a>
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
                    <li><a href="#">Avisos de privacidad</a></li>
                    <li><a href="#">Normatividad</a></li>
                    <li><a href="#">Organigrama</a></li>
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
                <div
                  class="gallery-list d-flex justify-content-between flex-wrap"
                >
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
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved | This template is made with
                <i class="fa fa-heart-o" aria-hidden="true"></i> by
                <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
    <!-- Google Maps -->
    <script src="https://maps.app.goo.gl/mQa8aTLrfz4UmAM7A"></script>
    <script src="{{ asset('assets/ece/js/google-map/map-active.js') }}"></script>
  </body>
</html>

