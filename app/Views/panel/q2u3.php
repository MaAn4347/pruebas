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
								Manejo de métodos de investigación		
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
					<h3>1.-¿Cuáles son los dos tipos de observación que pueden realizarse en investigación de mercados?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Participante y no participante 
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Directa e indirecta.
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Activa y pasiva
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Por qué la observación puede ser útil en la aplicación de la mercadotecnia a los servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Para evaluar el impacto ambiental de los productos y servicios turísticos.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Para identificar las preferencias de los empleados de la empresa turística
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Para identificar las necesidades y preferencias de los consumidores, evaluar la calidad de los productos y servicios turísticos, analizar la competencia y identificar tendencias del mercado 
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué beneficios puede ofrecer la observación de la competencia en la aplicación de la mercadotecnia a los servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Identificar las necesidades y preferencias de los consumidores. 
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)">Evaluar la calidad de los productos y servicios turísticos
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Proporcionar información valiosa sobre las estrategias de marketing, productos y servicios de la competencia, y ayudar a identificar oportunidades para diferenciarse y mejorar la oferta de la empresa 
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué implica el método experimental?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> La observación directa de los consumidores. 
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> La manipulación de una o varias variables independientes para evaluar su efecto en una o varias variables dependientes.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> La recolección de datos a través de encuestas.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Para qué puede ser útil el método experimental en la aplicación de la mercadotecnia a los servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Identificar las necesidades y preferencias de los consumidores.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Evaluar la calidad de los productos y servicios turísticos.
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Evaluar la efectividad de una nueva estrategia de marketing.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué se puede evaluar mediante el método experimental en la aplicación de la mercadotecnia a los servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> La efectividad de los programas de fidelización de clientes.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> La calidad de los productos y servicios turísticos.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> La satisfacción del cliente.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Cuál es el propósito principal de una encuesta en aplicación mercadotécnica a servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Obtener información sobre las preferencias y necesidades de los consumidores en relación con los servicios turísticos.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Recopilar información sobre la calidad de los servicios ofrecidos.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Evaluar la eficacia de los programas de fidelización de clientes.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué beneficios puede obtener una empresa de la información recopilada a través de una encuesta en aplicación mercadotécnica a servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Identificar las tendencias del mercado.
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Tomar decisiones estratégicas y mejorar la satisfacción del cliente.
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Evaluar la efectividad de una nueva estrategia de marketing.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.¿Cuál es el objetivo principal de las entrevistas en aplicación mercadotécnica a servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Obtener información detallada sobre las preferencias y necesidades de los consumidores.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Evaluar la efectividad de una nueva estrategia de marketing. 
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)">Medir la satisfacción del cliente.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué tipo de información se puede obtener a través de las entrevistas en aplicación mercadotécnica a servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> La efectividad de una nueva estrategia de marketing.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Las preferencias y necesidades de los consumidores.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> La tasa de retención de clientes.
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Qué tipos de entrevistas en aplicación mercadotécnica a servicios turísticos existen?</h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> Estructuradas y no estructuradas. 
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> Cualitativas y cuantitativas.
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> Ambas
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz2u3.js') ?>"></script>	
<?= $this->endSection()?>