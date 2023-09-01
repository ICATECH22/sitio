@extends('theme.main.index')
@section('csscontent')
    <link rel="stylesheet" href="{{ asset('assets/css/estilos_tabla.css') }}">
@endsection
{{-- contenido --}}
@section('contenido')
    <div class="container-xl">
        <h1>Institutos de Capacitación para el Trabajo</h1>
        <h3>{{ $itemBusqueda }}</h3>
        <p>Fecha y hora actual: <span id="fechaActual"></span></p>
        <br><br>
        <table id="printTable">
            <thead>
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Asistencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Número">1</td>
                    <td data-label="Nombre Completo">ADRIAN ANTONIO TEJEDA VELAZQUEZ</td>
                    <td data-label="Puesto">ANALISTA TECNICO ESPECIALIZADO</td>
                    <td data-label="Asistencia"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td data-label="Número">2</td>
                    <td data-label="Nombre Completo">María López</td>
                    <td data-label="Puesto">ANALISTA</td>
                    <td data-label="Asistencia"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td data-label="Número">3</td>
                    <td data-label="Nombre Completo">Carlos Ramírez</td>
                    <td data-label="Puesto">ANALISTA</td>
                    <td data-label="Asistencia"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td data-label="Número">4</td>
                    <td data-label="Nombre Completo">Ana Martínez</td>
                    <td data-label="Puesto">ANALISTA</td>
                    <td data-label="Asistencia"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td data-label="Número">5</td>
                    <td data-label="Nombre Completo">Luis García</td>
                    <td data-label="Puesto">ANALISTA</td>
                    <td data-label="Asistencia"><input type="checkbox"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <!-- Botón de impresión -->
        <div style="display: flex; justify-content:center;">
            <button onclick="imprimir()" class="btn btn-primary">
                <i class="fas fa-print"></i>
                Imprimir Lista
            </button>
        </div>

        <br>
    </div>
@endsection
{{-- contenido end --}}
@section('contentScriptJs')
    <script type="text/javascript">
        $(document).ready(function() {
            mostrarFecha();
        });

        function imprimir() {
            var divToPrint = document.getElementById("printTable");
            newWin = window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }

        function mostrarFecha() {
            var fecha = new Date();
            var opcionesFecha = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var fechaFormateada = fecha.toLocaleDateString('es-ES', opcionesFecha);

            var opcionesHora = {
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric',
                hour12: true
            };
            var horaFormateada = fecha.toLocaleTimeString('es-ES', opcionesHora);

            document.getElementById("fechaActual").innerHTML = fechaFormateada + ' - ' + horaFormateada;
        }
    </script>
@endsection
