@extends('theme.lte.layout_news')
@section('title', 'Icatech | Agregar comunicado')

@section('content_script_css')
    <link rel="stylesheet" href="{{ asset('assets/ckeditor5/ckeditor5.css') }}">
    <style>
        .main-container {
            width: 795px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection
@section('content')
    <div class="container g-pt-50">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <div style="text-align: center;">
            <h3><b>REDACTAR COMUNICADO</b></h3>
        </div>
        <hr style="border-color:dimgray">
        <form action="{{ route('comunicados.save') }}" method="POST" id="registercomunicado" enctype="multipart/form-data">
            @csrf {{-- modificaciones --}}

            <div class="form-row">
                <!--TITULO LOCALIDAD-->
                <div class="form-group col-md-8">
                    <label for="titulo " class="control-label">TIULO</label>
                    <input id="titulo" name="titulo" type="text" class="form-control" aria-required="true"
                        autocomplete="off">
                </div>

                <div class="form-group col-md-4">
                    <label for="apellidoPaterno" class="control-label">LOCALIDAD</label>
                    <input id="localizacion" name="localizacion" type="text" class="form-control" aria-required="true"
                        autocomplete="off">
                </div>
                <!-- TITULO LOCALIDAD  END -->
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cc-payment" class="control-label mb-1">CATEGORÍA</label>
                    <input id="categoria" name="categoria" type="text" class="form-control" aria-required="true"
                        autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <label for="cc-payment" class="control-label mb-1">URL</label>
                    <input id="url" name="url" type="text" class="form-control" aria-required="true"
                        autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <label for="cc-payment" class="control-label mb-1">IMAGEN</label>
                    <input id="imagen_comunicado" name="imagen_comunicado" type="file" accept="image/*"
                        class="form-control" aria-required="true">
                </div>
            </div>
            <div class="form-row">
                <!-- domicilio -->
                <div class="form-group col-md-12">
                    <label for="cc-payment" class="control-label mb-1">CONTENIDO</label>
                    <textarea id="editor" name="contenido" class="form-control"></textarea>
                </div>
            </div>
            <!--botones de enviar y retroceder-->
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <a class="btn btn-danger" href="{{ URL::previous() }}">Regresar</a>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-success" type="submit">
                            <i class="fa fa-paper-plane"></i>
                            GENERAR COMUNICADO
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
@endsection
@section('script_content_js')
    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.2/"
            }
        }
    </script>
    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Font
        } from 'ckeditor5';

        ClassicEditor
            .create(document.querySelector('#editor'), {
                plugins: [Essentials, Paragraph, Bold, Italic, Font],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
{{-- modificaciones --}}
