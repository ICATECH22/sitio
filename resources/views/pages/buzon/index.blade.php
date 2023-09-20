@extends('theme.main.index')

@section('title', 'Buzón Digital Ciudadano | Icatech')

@section('csscontent')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .banner {
            max-width: 100%;
            height: auto;
            padding-bottom: 1.5em;
            padding-top: 1.5em;
        }
    </style>
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <br>
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif

                <img class="banner" src="{{ asset('assets/img/buzon/buzon_digital.jpeg') }}">
                <form method="POST" enctype="multipart/form-data" action="{{ route('buzon.ciudadano.store') }}"
                    name="formBuzon" id="formBuzon">
                    @csrf
                    Para facilitar su seguimiento, por favor responde las siguientes preguntas: <br>

                    <div class="form-group"> <!-- Boton de estado -->
                        <label for="state_id" class="control-label">¿Sobre qué actividad deseas realizar tus
                            comentarios?</label>
                        <select class="form-control" id="actividad" name="actividad">
                            <option value="">Selecciona</option>
                            <option value="Trámites acerca de los cursos">Trámites acerca de los cursos.</option>
                            <option value="Trámites Administrativos diversos">Trámites Administrativos diversos.</option>
                            <option value="Calidad de los cursos">Calidad de los cursos.</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Escribe tus Comentarios </label>
                        <textarea class="form-control" id="comentarios" name="comentarios" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Adjuntar Archivo (Opcional)</label>
                        <input class="form-control" type="file" id="formFileMultiple" name="formFileMultiple">
                    </div>

                    <div class="row g-3">
                        <div class="col-md-15">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="Nombre Completo" autocomplete="off">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-15">
                            <label for="correo_electronico" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="correo_electronico" name="correo_electronico"
                                placeholder="Correo Electrónico" autocomplete="off">
                        </div>

                        <div class="form-group"> <!-- Calle 2 -->
                            <label for="phone" class="control-label">Teléfono</label>
                            <input class="form-control" id="phone" name="phone" autocomplete="off"
                                data-inputmask="'mask': '(999) 999-9999'">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" id="chkterminos" name="chkterminos"
                                aria-describedby="invalidCheck3Feedback">
                            <label class="form-check-label" for="chkterminos">
                                Al hacer clic, confirmo que he leído y acepto los términos y <a
                                    href="https://icatech.gob.mx/avisos_privacidad/simplificado/AVISO_SIMPLIFICADO_TRANSPARENCIA_BUZON_DIGITAL.pdf"
                                    target="_blank" rel="noopener noreferrer"> Avisos de Privacidad</a> e <a
                                    href="https://icatech.gob.mx/avisos_privacidad/integral/AVISO_INTEGRAL_DE_TRANSPARENCIA_BUZON_DIGITAL.pdf"
                                    target="_blank" rel="noopener noreferrer"> Integral del Instituto </a>
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
                <br>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
@endsection
@section('contentScriptJs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets/js/dist/jquery.inputmask.js') }}"></script>
    <script type="text/javascript">
        // limite en bytes
        $.validator.addMethod('filesize', function(value, element, limit) {
            return !element.files[0] || (element.files[0].size <= limit);
        }, 'El archivo no puede ser más grande de 3MB');

        $(document).ready(function() {

            $("#phone").inputmask();

            $('#formBuzon').validate({
                rules: {
                    // no quoting necessary
                    actividad: "required",
                    nombre: "required",
                    correo_electronico: {
                        required: true,
                        email: true,
                    },
                    formFileMultiple: {
                        extension: "pdf,jpeg,jpg,xlsx,doc,docx,xls",
                        filesize: 3000000 // 3 millones de bytes = 3MB
                    }
                },
                messages: {
                    actividad: {
                        required: "El campo es requerido"
                    },
                    nombre: {
                        required: "El Nombre es requerido"
                    },
                    correo_electronico: {
                        required: "El campo es requerido",
                        email: "Ingresar un correo electrónico válido"
                    }
                }
            });
        })
    </script>
@endsection
