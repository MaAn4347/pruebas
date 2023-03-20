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
								Diseño del concepto de posicionamiento		
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
					<h3>1.-¿Qué significa el acrónimo FODA?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Fuerzas, Organización, Debilidades, Amenazas
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Fortalezas, Oportunidades, Debilidades, Amenazas 
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Fábrica, Oportunidades, Dinero, Ahorro
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Cuál es uno de los usos comunes del análisis FODA?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Desarrollo de planes de acción para capitalizar fortalezas y oportunidades, y abordar debilidades y amenazas
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Identificación de la marca de un producto
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Evaluación de la calidad de un producto 
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Para qué se utiliza el análisis FODA en relación con la competencia?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Para identificar las fortalezas y debilidades de la empresa y compararlas con las fortalezas propias y debilidades de la competencia. 
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Para evaluar la calidad de los productos de los competidores.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Para identificar la estrategia de marketing de los competidores 
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Cómo se utiliza el análisis FODA en la toma de decisiones estratégicas importantes? </h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Para decidir la marca de un producto
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Para decidir si se debe expandir en un nuevo mercado o si se debe centrar en mejorar las operaciones existentes
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Para evaluar la calidad de un producto
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Cuál es el primer paso en el proceso de diseño de posicionamiento?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Identificar la competencia 
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Definir la propuesta de valor 
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Identificar la audiencia objetivo
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué es la propuesta de valor? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> La posición de la empresa en relación con sus competidores
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> La herramienta visual que muestra los atributos de posicionamiento
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> La promesa que se hace al cliente sobre los beneficios ofrecidos
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué son los atributos de posicionamiento?  </h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Las características o beneficios del producto o servicio ofrecido
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> La herramienta visual que muestra los atributos de la competencia
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> La posición de la empresa en relación con sus competidores 
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué se debe hacer después de diseñar la estrategia de posicionamiento? </h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Implementar y monitorear la estrategia 
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Seleccionar los atributos de posicionamiento
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Identificar la competencia 
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Qué es el posicionamiento por atributos?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Destacar los beneficios que el cliente obtiene al adquirir el producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Enfocarse en el tipo de usuario para el que está diseñado el producto o servicio. 
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Destacar las características o beneficios del producto o servicio que lo hacen diferente de la competencia.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué es el posicionamiento por beneficios?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Destacar los beneficios que el cliente obtiene al adquirir el producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Enfocarse en el tipo de usuario para el que está diseñado el producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Destacar las características o beneficios del producto o servicio que lo hacen diferente de la competencia.
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Qué es el posicionamiento por uso o aplicación?  </h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> Destacar los beneficios que el cliente obtiene al adquirir el producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> Enfocarse en el tipo de usuario para el que está diseñado el producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> Basarse en el uso o la aplicación específica del producto o servicio.
					</label>
				</section>
				<br>
				<section id="p11">
					<h3>12.-¿Qué es el posicionamiento por competidor?</h3>
					<label>
						<input type="radio" value="1" name="p11" onclick="respuesta(11,this)"> Compararse con un competidor específico y destacar las ventajas de la empresa sobre ese competidor.
					</label>
					<label>
						<input type="radio" value="2" name="p11" onclick="respuesta(11,this)"> Enfocarse en el tipo de usuario para el que está diseñado el producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p11"onclick="respuesta(11,this)"> Destacar las características o beneficios del producto o servicio que lo hacen diferente de la competencia.
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz5u1.js') ?>"></script>	
<?= $this->endSection()?>