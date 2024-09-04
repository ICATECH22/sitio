{{-- diseñado por MIS. DANIEL MÉNDEZ CRUZ --}}
{{-- extensión con indice principal --}}
@extends('theme.main.index')
{{-- titulo de la convocatoria --}}
@section('title', 'Convocatoria | Instructora Externa')
{{-- contenido de CSS --}}
@section('csscontent')
    <style>
        .header {
            display: flex;
            background-color: white;
            width: 100%;
        }

        .imagen_left {
            float: left;
            margin-left: 3.5em;
        }

        .imagen_right {
            float: right;
            margin-right: 3.5em;
        }

        .imagen_center {
            margin: 0 auto;
            text-align: center;
        }

        img.imagen_right {
            width: 120px;
            height: 70px;
        }

        img.imagen_left {
            width: 220px;
            height: 70px;
            padding-bottom: 0.5em;
        }

        img.imagen_center {
            padding-top: 0.5em;
            width: 240px;
            height: 60px;
        }

        /*
                                            contenedor principal
                                        */
        .contenedor_principal {
            width: 100%;
            background-color: #621132;
            padding-top: 1em;
        }

        /*
                                            INICIO
                                        */
        .inicio p {
            text-align: center;
            color: white;
            font-size: 3em;
            text-transform: uppercase;
            margin-bottom: -0.3em;
            margin-top: -0.3em;
        }

        p.pinstructores {
            color: #BCA64C;
            font-size: 1.5em;
            text-align: center;
            text-transform: uppercase;
        }

        .colwhite {
            background-color: white;
        }

        p.pconvocatoria {
            text-align: center;
            color: black;
            font-size: 12px;
            font-weight: bold;
            margin-top: -0.2em;
        }

        img.imagenes {
            width: 100%;
            max-height: 48vh;
            /*not want to take all vertical space*/
        }

        p.pconvinstructores {
            text-align: center;
            color: white;
            font-size: 1.5em;
            font-weight: bold;
            margin-top: -0.5em;
            margin-bottom: -0.7em;
        }

        p.textconvocatoria {
            text-align: center;
            color: white;
            font-size: 16px;
            font-weight: bold;
            margin-top: 0.1em;
        }

        .requisitos {
            border-radius: 25px;
            background: #FCF3CF;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }

        .requisitos ol li {
            font-size: 12px;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif';
     color: black;
            margin-left: 4em;
        }

        p.requisitosx {
            color: black;
            font-size: 18px;
            text-align: center;
            text-transform: uppercase;
            font-family: 'Times New Roman', Times, serif';

        }

        div.block {
            text-align: center;
            color: white;
            font-size: 16px;
            font-weight: bold;
        }

        ul.list {
            text-align: left;
            display: inline-block;
        }
    </style>
@endsection
{{-- cuerpo del documento --}}
@section('contenido')
    <div class="header">
        <img class="imagen_left" src="{{ asset('Imagenes_Pagina/instituto_oficial.png') }}" alt="">
        <img class="imagen_center" src="{{ asset('Imagenes_Pagina/chiapas.png') }}" alt="">
        <img class="imagen_right" src="{{ asset('Imagenes_Pagina/icatech_imagen_cabecera.png') }}" alt="">
    </div>
    <div class="contenedor_principal">
        <div class="row">
            <div class="col-sm-12">
                <div class="inicio">
                    <p class="pinstructores">CONVOCATORIA ESTATAL DE</p>
                    <p>INSTRUCTORES EXTERNOS</p>
                    <p class="pinstructores">{{ $convocatoria->titulo }}</p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <img class="imagenes" src="{{ URL::to('/') }}{{ $convocatoria->imagen }}" alt="">
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class='col-lg-12 colwhite'>
                        <p class="pinstructores">convocatoria</p>
                        <p class="pconvocatoria">
                            El Instituto de Capacitación y Vinculación Tecnológica del <br>
                            Estado de Chiapas convoca a los interesados en formar parte del Padrón de Instructores Externos.
                            Para impartir los cursos de la especialidad de<br>
                            <b>{{ $convocatoria->titulo }}</b>
                        </p>
                    </div>
                    <div class='col-lg-12'>
                        <p class="pinstructores">perfil requerido</p>
                        {!! htmlspecialchars_decode(stripslashes($convocatoria->perfil)) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="requisitos">
                    <p class="requisitosx">
                        <b>
                            <b>requisitos</b>
                        </b>
                    </p>
                    {!! $convocatoria->requisitos !!}
                    <br><br>
                    <b>Vigencia: Hasta cubirir el perfil requerido</b>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p class="textconvocatoria">

                    <b>ENVIAR DOCUMENTACIÓN DIGITAL AL SIGUIENTE CORREO ELECTRÓNICO:</b>
                    <br>
                </p>
                <div class="block">
                    <ul class="list">
                        <li type="disc"><b>Catazajá: academicocatazaja2023@gmail.com</b></li>
                        <li type="disc"><b>Comitan: instructorescomitan2024@gmail.com</b></li>
                        <li type="disc"><b>Jiquipilas: academico.jiquipilas@gmail.com</b></li>
                        <li type="disc"><b>Ocosingo: academicocosingo99@gmail.com</b></li>
                        <li type="disc"><b>Reforma: instructoresreforma@gmail.com</b></li>
                        <li type="disc"><b>San Cristóbal: cursosicatech22sclc@gmail.com</b></li>
                        <li type="disc"><b>Tapachula: recepcion.documentostap@gmail.com</b></li>
                        <li type="disc"><b>Tonalá: instructores.tonala2023@gmail.com</b></li>
                        <li type="disc"><b>Tuxtla: uctux.instructores@gmail.com</b></li>
                        <li type="disc"><b>Villaflores: instructoresvillaflores@outlook.es</b></li>
                        <li type="disc">Yajalón: depto.academico.yajalon@gmail.com<b></b></li>
                    </ul>
                </div>
                <br>
            </div>
            <div class="col-lg-6">
                <p class="textconvocatoria">

                    <b>NÚMERO TELEFÓNICO: </b>
                    <br>
                </p>
                <div class="block">
                    <ul class="list">
                        <li type="disc"><b>Catazajá: 9163660060</b></li>
                        <li type="disc"><b>Comitan: 9636327699</b></li>
                        <li type="disc"><b>Jiquipilas: 9686811029</b></li>
                        <li type="disc"><b>Ocosingo: 9614242246</b></li>
                        <li type="disc"><b>Reforma: 9171059454</b></li>
                        <li type="disc"><b>San Cristóbal: 9671145232</b></li>
                        <li type="disc"><b>Tapachula: 9626957353 ó 9622902278</b></li>
                        <li type="disc"><b>Tonalá: 9661183081</b></li>
                        <li type="disc"><b>Tuxtla: 9612640251</b></li>
                        <li type="disc"><b>Villaflores: 9656599820</b></li>
                        <li type="disc">Yajalón: 9196702393<b></b></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="textconvocatoria">
                    <b>Horario de atención:</b><br>
                    <b>Lunes a Viernes</b><br>
                    <b>9:00 a 15:00 hrs</b>
                </p>
            </div>
        </div>
    </div>
@endsection
