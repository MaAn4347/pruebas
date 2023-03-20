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
								Análisis "DOFA","FODA"		
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
					<h3>1.-¿Cuáles son los cuatro aspectos que se analizan en el análisis FODA?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Fortalezas, debilidades, oportunidades y amenazas 
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Fuerzas, debilidades, oportunidades y adversidades.
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Fortalezas, desventajas, oportunidades y obstáculos 
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué se busca identificar en el paso de identificación de oportunidades del análisis FODA?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Áreas donde la empresa o producto/servicio tiene ventaja sobre la competencia 
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Tendencias o factores del entorno que pueden afectar negativamente a la empresa o producto/servicio .
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Oportunidades de crecimiento o expansión en el mercado.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué implica el análisis de la información en el procedimiento del análisis FODA?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)">  Identificar las fortalezas, debilidades, oportunidades y amenazas. 
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Desarrollar estrategias para mejorar las fortalezas, abordar las debilidades, aprovechar las oportunidades y mitigar las amenazas.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)">  Realizar un análisis de la información recopilada para establecer las prioridades y desarrollar estrategias. 
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué se debe tomar en cuenta al desarrollar estrategias en el análisis FODA?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)">  Los aspectos internos y externos que pueden afectar la situación actual de una empresa o producto/servicio
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Identificar las áreas donde la empresa o producto/servicio se desempeña bien o tiene ventajas sobre la competencia.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Establecer las prioridades y desarrollar estrategias para mejorar las fortalezas, abordar las debilidades, aprovechar las oportunidades y maximizar las amenazas . 
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-Qué información proporciona el análisis FODA a una empresa o producto/servicio? </h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Los ingresos y gastos de la empresa.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Una mejor comprensión de la posición actual de la empresa en el mercado..
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> La cantidad de empleados de la empresa.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Por qué es útil el análisis FODA para la planificación estratégica a largo plazo de una empresa? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Ayuda a establecer objetivos y prioridades claras para el futuro
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)">Proporción información sobre los ingresos y gastos de la empresa.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Permite evaluar el rendimiento financiero de la empresa.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Cuál es el objetivo del análisis interno en el análisis FODA?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Evaluar las oportunidades y amenazas de una empresa. 
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Identificar las fortalezas y debilidades internas de una empresa.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Analizar el mercado y la competencia de una empresa.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué aspectos se evalúan en el análisis interno de una empresa?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> La estructura del mercado y la competencia. 
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Los recursos, capacidades y procesos de la empresa.
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Las oportunidades y amenazas del entorno externo.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.¿Por qué es importante el análisis interno para el éxito empresarial? </h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Ayuda a identificar las fortalezas y debilidades de la empresa.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Permite evaluar el rendimiento financiero de la empresa.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Proporción de información sobre el mercado y la competencia.

					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Cuáles son algunos de los aspectos que se examinan en el análisis externo?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> La estructura organizativa y la cultura corporativa 
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> La calidad del producto/servicio y la eficiencia en la producción
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Las tendencias del mercado y las condiciones económicas 
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Por qué es importante realizar un análisis externo? </h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> Para identificar las fortalezas y debilidades internas de una empresa 
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> Para evaluar los recursos, capacidades y procesos de la empresa 
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> Para identificar las oportunidades y amenazas que enfrenta la empresa
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz3u1.js') ?>"></script>	
<?= $this->endSection()?>