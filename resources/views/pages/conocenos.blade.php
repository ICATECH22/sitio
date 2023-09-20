
@extends('theme.main.index')

@section('title', 'Conocenos | Icatech')

@section('csscontent')
	<style>
		.imgbcgrnd {
			background-color: rgb(179, 160, 109);
		}
		a {
			color: #621132;
			outline: none;
		}
		a:hover {
			color: #621132;
			outline: none;
			text-decoration:none;
		}
		.col-md-4 img{
			object-fit: cover;
    		position: relative;
			width: 110%;
			height: 390px;
		}
		@supports(object-fit: cover){
			.masonry-img-caption img{
				height: 100%;
				object-fit: cover;
				object-position: center center;
			}
		}
		.stilo_texto{
			font-weight: bold;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 1.1em;
			color: whitesmoke;
			text-align: justify;
		}
	</style>
@endsection

@section('contenido')
	{{-- sección del contenido --}}
	<div class="container-xl">
		<br>
		<div class="u-heading-v2-5--bottom g-brd-primary g-mb-30 text-left">
			<a href="https://www.chiapas.gob.mx/funcionarios/estatal/ejecutivo/instituto-capacitacion" target="_blank">
				<h2>Directorio</h2>
			</a>
		</div>
		{{-- include social media --}}
		@include('theme.main.media')
		{{-- include social media END --}}
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body imgbcgrnd">
					  <h3 class="card-title"><b>Misión</b></h3>
					  <p align="justify" class="card-text stilo_texto">
						Impartir capacitación para y en el trabajo a la población, contribuyendo al mejoramiento de su calidad de vida mediante programas estratégicos con enfoque sustentable y sostenible, impulsando el desarrollo del estado.
					  </p>
					</div>
					<img src="{{ url('Imagenes_Pagina/mision.png') }}" class="card-img-bottom" alt="...">
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body imgbcgrnd">
					  <h3 class="card-title"><b>Visión</b></h3>
					  <p align="justify" class="card-text stilo_texto">
						Ser una Institución líder e innovadora, a través de capacitación acorde a las necesidades reales del entorno socieconómico del estado, reconocida por la calidad de sus egresados, en un ambiente de unidad, respeto y equidad.
					  </p>
					</div>
					<img src="{{ url('Imagenes_Pagina/vision.jpg') }}" class="card-img-bottom" alt="...">
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="row">
						<div class="col-md-4">
							<img src="{{ url('Imagenes_Pagina/objetivos_icatech.png') }}" alt="...">
						</div>
						<div class="col-md-8 imgbcgrnd">
							<div class="card-body">
								<h3 class="card-title"><b>Objetivo</b></h3>
								<p align="justify" class="card-text stilo_texto">
									ICATECH Tiene diversos objetivos centrales entre los  que se destacan los siguientes:
								</p>
								<ol class="stilo_texto">
									<li>Impartir e impulsar la capacitación para el trabajo en la entidad procurando la mejor calidad y vinculación de este servicio con el aparato productivo y las necesidades de desarrollo regional, estatal y nacional.</li>
									<li>Fungir como organismo promotor en la materia de capacitación para el trabajo, cumpliendo los lineaminetos establecidos por la Secretaria de Educación Pública.</li>
									<li>Promover la impartición de cursos de capacitación a obreros en mano de obre calificada que corresponden a las necesidades de los mercados laborales del Estado.</li>
									<li>Apoyar las acciones de capacitación para el trabajo de los sectores productivos del estado, así como la capacitación tanto para el trabajo de personas sin empleo o discapacitadas, como no egresados de primarias, secundarias o preparatorias.</li>
									<li>Aumentar con los programas de capacitación el nivel de productividad de los trabajadores.</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
	{{-- sección del contenido END --}}
@endsection
