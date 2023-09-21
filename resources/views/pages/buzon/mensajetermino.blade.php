@extends('theme.main.index')

@section('title', 'Buzón Digital Ciudadano | Icatech')

@section('csscontent')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/buzon.css') }}">
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>

                <img class="banner" src="{{ asset('assets/img/buzon/buzon_digital.jpeg') }}">
                <div class="p-3 border bg-light">
                    <p align="justify" class="stilo_texto">
                        Estimado: {{ base64_decode($remitente) }} <br><br>
                        Su solicitud ha sido enviada satisfactoriamente. Gracias por tomarte el tiempo para dejarnos tu comentario en nuestro buzón digital.
                    </p>

                    <a type="button" href="{{ url('/') }}" class="btn btn-lg" style="background-color: #621132; color: #FFF;">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection
@section('contentScriptJs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets/js/dist/jquery.inputmask.js') }}"></script>
@endsection
