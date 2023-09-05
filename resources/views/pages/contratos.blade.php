@extends('theme.main.index')
@section('title', 'Consulta de Contratos | Icatech')
@section('contenido')
<div class="container g-pt-25">
    <br>
    @include('theme.main.media')
    <img src="Imagenes_Pagina/contratos.png" class="img-responsive" width="100%" align="center"/>
    <br><br>
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Consulta de Contratos</h2>
                    <form id="consultaContratosForm">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="filtro">Categoria de Filtro</label>
                                <select name="filtro" id="filtro" class="form-control">
                                    <option value="tipoperiodo">Periodo</option>
                                    <option value="tiposexo">Sexo</option>
                                    <option value="tiponombre">Nombre de Instructor</option>
                                    <option value="tipocontrato">Numero de Contrato</option>
                                    <option value="tipounidad">Unidad</option>
                                    <option value="tipocurso">Curso</option>
                                </select>
                            </div>
                            <Div id="divsexo" name="divsexo" class="d-none d-print-none">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" class="form-control mr-sm-2" id="sexo">
                                    <option value="MASCULINO">Masculino</option>
                                    <option value="FEMENINO">Femenino</option>
                                </select>
                            </Div>
                            <Div id="divcampo" name="divcampo" class="d-none d-print-none">
                                <label id="labelcampo" name="labelcampo" for="campo">Nombre</label>
                                <input type="text" id="campo" name="campo" class="form-control">
                            </Div>
                            <Div id="divunidad" name="divunidad" class="d-none d-print-none">
                                <label for="unidad">Unidad</label>
                                <select name="unidad" class="form-control mr-sm-2" id="unidad">
                                    @foreach ($unidades as $unidad)
                                        <option value="{{$unidad->ubicacion}}">{{$unidad->ubicacion}}</option>
                                    @endforeach
                                </select>
                            </Div>
                            <div id="divfechai" name="divfechai" class="form-group col-md-4">
                                <label for="fecha_inicio">Fecha de inicio</label>
                                <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control">
                            </div>
                            <div id="divfechaf" name="divfechaf" class="form-group col-md-4">
                                <label for="fecha_fin">Fecha de fin</label>
                                <input type="date" id="fecha_fin" name="fecha_fin" class="form-control">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" id="buscarContratos" class="btn btn-primary btn-lg">Buscar Contratos</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-4" id="resultadoContratos">
                <h3 class="text-center mb-3">Resultados de la consulta</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Unidad / Accion Movil</th>
                            <th>Contrato</th>
                            <th>Fecha</th>
                            <th>Nombre de Instructor</th>
                            <th>Sexo</th>
                            <th>Curso</th>
                            <th>Archivo</th>
                            <!-- Agrega más encabezados según tus necesidades -->
                        </tr>
                    </thead>
                    <tbody id="tablaContratosBody">
                        <!-- Aquí se cargarán los resultados de la consulta -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buscarContratosBtn = document.getElementById('buscarContratos');
        const tablaContratosBody = document.getElementById('tablaContratosBody');

        buscarContratosBtn.addEventListener('click', function () {
            const fechaInicio = document.getElementById('fecha_inicio').value;
            const fechaFin = document.getElementById('fecha_fin').value;
            const filtro = document.getElementById('filtro').value;
            const sexo = document.getElementById('sexo').value;
            const campo = document.getElementById('campo').value;
            const unidad = document.getElementById('unidad').value;
            // console.log(fechaFin);
            // Realiza la solicitud AJAX al servidor
            fetch(`/get-contratos?fecha_inicio=${fechaInicio}&fecha_fin=${fechaFin}&filtro=${filtro}&sexo=${sexo}&campo=${campo}&unidad=${unidad}`)
                .then(response => response.json())
                .then(resultados => {
                    // console.log(resultados);
                    // Limpia la tabla antes de agregar nuevos datosa
                    tablaContratosBody.innerHTML = '';

                    // Agrega filas a la tabla con los resultados
                    resultados.forEach(resultado => {
                        // console.log(resultado);
                        const fila = `
                            <tr>
                                <td>${resultado.unidad}</td>
                                <td>${resultado.numero_contrato}</td>
                                <td>${resultado.fecha_firma}</td>
                                <td>${resultado.nombre}</td>
                                <td>${resultado.sexo}</td>
                                <td>${resultado.curso}</td>
                                <td>
                                    <a href="${resultado.arch_contrato}" target="_blank" title="Contrato">
                                        <iconify-icon icon="teenyicons:pdf-solid" style="color: red;" width="30"></iconify-icon>
                                    </a>
                                </td>
                                <!-- Agrega más celdas según tus necesidades -->
                            </tr>
                        `;
                        tablaContratosBody.innerHTML += fila;
                    });
                })
                .catch(error => {
                    console.error('Error al obtener resultados:', error);
                });
        });

        document.getElementById('filtro').onchange = function() {
            var index = this.selectedIndex;
            var inputText = this.children[index].innerHTML.trim();
            // console.log(inputText);

            if (inputText == 'Periodo') {
                $('#divsexo').prop("class", "form-row d-none d-print-none")
                $('#divcampo').prop("class", "form-row d-none d-print-none")
                $('#divunidad').prop("class", "form-row d-none d-print-none")
                $('#divfechai').prop("class", "form-group col-md-3")
                $('#divfechaf').prop("class", "form-group col-md-3")
            }
            else if (inputText == 'Sexo') {
                $('#divsexo').prop("class", "form-group col-md-3") //visible
                $('#divcampo').prop("class", "form-row d-none d-print-none") //no visible
                $('#divunidad').prop("class", "form-row d-none d-print-none")
                $('#divfechai').prop("class", "form-group col-md-3")
                $('#divfechaf').prop("class", "form-group col-md-3")
            } else if(inputText == 'Nombre de Instructor' || inputText == 'Numero de Contrato' || inputText == 'Curso') {
                $('#divsexo').prop("class", "form-row d-none d-print-none")
                $('#labelcampo').html(inputText)
                $('#divunidad').prop("class", "form-row d-none d-print-none")
                if(inputText == 'Numero de Contrato') {
                    $('#divcampo').prop("class", "form-group col-md-5")
                    $('#divfechai').prop("class", "form-row d-none d-print-none")
                    $('#divfechaf').prop("class", "form-row d-none d-print-none")
                } else {
                    $('#divcampo').prop("class", "form-group col-md-3")
                    $('#divfechai').prop("class", "form-group col-md-3")
                    $('#divfechaf').prop("class", "form-group col-md-3")
                }
            } else if(inputText == 'Unidad') {
                $('#divsexo').prop("class", "form-row d-none d-print-none")
                $('#divcampo').prop("class", "form-row d-none d-print-none")
                $('#divunidad').prop("class", "form-group col-md-3")
                $('#divfechai').prop("class", "form-group col-md-3")
                $('#divfechaf').prop("class", "form-group col-md-3")
            }
        }
    });
</script>
@stop
