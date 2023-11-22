@extends('theme.main.index')

{{-- titulo de convocatoria --}}
@section('title', 'Busquedas Internar del Sitio | Icatech')

@section('contenido')

    <section class="container g-pt-50">
        <h2 class="h4 g-color-black g-font-weight-400 g-mb-30">
            Busquedas en el: <span class="g-font-black-600">Portal del ICATECH icatech.gob.mx</span>
        </h2>
        <script async src="https://cse.google.com/cse.js?cx=b3a1810b2cd50482e"></script>
        <div class="gcse-search"></div>
    </section>
    <br>
@endsection
