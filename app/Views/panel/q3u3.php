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
								Interpretación de resultados		
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
					<h3>1.-¿Qué herramientas de investigación de mercado se utilizan para obtener información cualitativa?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Encuestas en aplicación mercadotécnica a servicios turísticos.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Entrevistas y grupos focales.
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Investigación de mercado cuantitativa.
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué se debe hacer primero al interpretar los resultados cualitativos?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Analizar cada respuesta de los participantes.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Agrupar las respuestas por temas o patrones comunes.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Revisar todas las respuestas de los participantes.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué se puede obtener al interpretar los resultados cualitativos?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)">  Información sobre las preferencias y necesidades de los consumidores. 
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Datos numéricos sobre la satisfacción del cliente.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)">  Una comprensión más profunda de las actitudes, percepciones y opiniones de los consumidores.
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Por qué es recomendable que varios investigadores analicen los datos y discutan los resultados?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)">  Para obtener una conclusión más objetiva.
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Para acelerar el proceso de interpretación de resultados.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Para reducir el costo de la investigación de mercado. 
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué herramientas de investigación de mercado se utilizan para obtener datos numéricos?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Entrevistas
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Grupos focales
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Encuestas
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué se debe utilizar para resumir los hallazgos más importantes en la interpretación de resultados cuantitativos?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Entrevistas
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)">Grupos focales
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Tablas y gráficos
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Por qué es importante interpretar los resultados en términos de lo que significan para la empresa?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Para mejorar la competitividad en el mercado 
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Para poder resumir los hallazgos
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Para identificar tendencias a largo plazo
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué se puede utilizar para identificar tendencias a largo plazo y oportunidades de mejora en la interpretación de resultados cuantitativos?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Entrevistas 
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Datos de la competencia
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Grupos focales
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz3u3.js') ?>"></script>	
<?= $this->endSection()?>