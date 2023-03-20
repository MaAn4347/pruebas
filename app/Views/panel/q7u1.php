<?= $this->extend('plantilla/panel_base') ?>
<?= $this->section('css')?>
<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/estilo.css') ?>">
<?= $this->endSection()?>


<?= $this->section('banner')?>
<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							Diseño de las políticas comerciales		
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html"> Popular Courses</a></p>
						</div>	
					</div>
				</div>
			</section>
<?= $this->endSection('banner')?>

<?= $this->section('contenido')?>	

			
<div class="container2">
				<section id="p0">
					<h3>1.-¿Cuál es una de las finalidades del diseño de políticas comerciales?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Asegurar la competitividad
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Promover la guerra comercial
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Reducir la producción local
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Cómo pueden las políticas comerciales mejorar el bienestar social?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Fomentando el acceso a bienes y servicios a precios más altos.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Reduciendo las oportunidades de empleo.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Aumentando las oportunidades de empleo y mejorando el nivel de vida de la población.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Cuáles son los pasos que se deben seguir en el procedimiento de diseño de políticas comerciales?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Identificación de objetivos, evaluación de la competencia, implementación y evaluación y ajuste.
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Identificación de objetivos, análisis de la situación, identificación de estrategias y acciones, implementación y evaluación y ajuste.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Análisis de la situación, identificación de objetivos, implementación y evaluación y ajuste.
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué implica la evaluación y ajuste en el procedimiento de diseño de políticas comerciales?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Revisión de los objetivos, identificación de nuevas oportunidades o amenazas en el mercado y realización de ajustes en las estrategias y acciones implementadas.
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Asignación de recursos, definición de plazos y elaboración de planes de acción.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Identificación de estrategias y acciones específicas para alcanzar los objetivos establecidos.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué pasos se deben seguir para identificar las estrategias y acciones específicas en el diseño de políticas comerciales?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Realizar un análisis de la situación y definir los objetivos.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Identificar los objetivos y asignar los recursos necesarios.
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Analizar la situación actual y identificar las estrategias y acciones específicas que se deben implementar para alcanzar los objetivos establecidos.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Cuál es una de las características del diseño de políticas comerciales? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Orientación hacia la política gubernamental
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Enfoque a corto plazo
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Coordinación mínima entre diferentes actores
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué implica la flexibilidad en el diseño de políticas comerciales? </h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> No hacer cambios en la política comercial
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Ajustarse a las condiciones cambiantes del mercado
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> No adaptarse a las necesidades de las empresas o países
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Por qué es importante adoptar un enfoque multidimensional en el diseño de políticas comerciales?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Porque solo se necesita enfocarse en el comercio internacional
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Porque solo se necesita enfocarse en la inversión 
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Porque se deben considerar todos los aspectos relevantes para mejorar la posición competitiva de las empresas o países
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.¿Qué objetivo tienen las políticas arancelarias?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Proteger la industria nacional de la competencia extranjera
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Fomentar la producción local
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)">  Aumentar las exportaciones
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿En qué consisten las políticas de promoción de exportaciones?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> En establecer límites a la cantidad de bienes y servicios que pueden ser importados de un país determinado.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> En la eliminación de barreras comerciales entre países.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> En el apoyo a las empresas locales para exportar sus productos en el mercado global.
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Cuál es el objetivo de las políticas de regulación comercial? </h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> Aumentar las exportaciones.
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> Proteger a los consumidores y las empresas locales de prácticas comerciales desleales.
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> Fomentar la producción local.
					</label>
				</section>
				<br><br>
				<div class="text-center">
				<button onclick="history.go(-1);" class="primary-btn text-uppercase">Regresar</button>

<button onclick="corregir()" class="primary-btn text-uppercase">Enviar</button>
<button onclick="reiniciar()" class="primary-btn text-uppercase">Reiniciar</button>
				</div>
				
				<br><br>
				
				<div>
					<h2></h2>
					<h2 id="resultado"></h2>
				</div>
				<div id="incorrectas">

				</div>
			</div>
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz7u1.js') ?>"></script>	
<?= $this->endSection()?>