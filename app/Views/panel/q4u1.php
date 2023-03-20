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
								Administración de la información		
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
					<h3>1.-¿Cuál es la finalidad de la administración de información?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Garantizar la gestión de la información de manera eficiente, efectiva y segura en toda la organización 
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Proporcionar información irrelevante y poco confiable para la toma de decisiones 
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Evitar la actualización y la precisión de los datos
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Por qué es importante la calidad y la integridad de la información en la administración de información?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Para restringir el acceso no autorizado y los riesgos de seguridad cibernética
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Para evitar errores y duplicaciones
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Para garantizar la accesibilidad y disponibilidad de la información
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Cuál es uno de los principales objetivos de la administración de información?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Proporcionar información irrelevante y poco confiable para la toma de decisiones 
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Evitar la actualización y precisión de los datos
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Proteger la información contra el acceso no autorizado y los riesgos de seguridad cibernética 
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Por qué es importante garantizar la seguridad y la privacidad de la información en la administración de información?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> La información es uno de los activos más valiosos de una y debe ser protegida contra el acceso no autorizado y los riesgos de seguridad cibernética 
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Para garantizar la accesibilidad y disponibilidad de la información
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Para evitar errores y duplicaciones de datos
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué se hace en la etapa de identificación de las necesidades de información? </h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Se recopilan los datos necesarios
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Se procesan los datos para convertirlos en información relevante y útil
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Se identifican los datos y la información que se necesitan para la toma de decisiones y el cumplimiento de los objetivos de la empresa
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué se hace en la etapa de procesamiento de datos? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Se identifican los datos y la información que se necesitan para la toma de decisiones y el cumplimiento de los objetivos de la empresa
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Se procesan los datos para convertirlos en información relevante y útil
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Los datos procesados ​​se almacenan en sistemas de gestión de información
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué se hace en la etapa de almacenamiento de datos? </h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Los datos procesados ​​se almacenan en sistemas de gestión de información
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> La información relevante se distribuye a los usuarios que la necesitan para tomar decisiones y cumplir con los objetivos de la empresa
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Se identifican los datos y la información que se necesitan para la toma de decisiones y el cumplimiento de los objetivos de la empresa
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué se hace en la etapa de distribución de información?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Se identifican los datos y la información que se necesitan para la toma de decisiones y el cumplimiento de los objetivos de la empresa
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Se procesan los datos para convertirlos en información relevante y útil
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> La información relevante se distribuye a los usuarios que la necesita para tomar decisiones y cumplir con los objetivos de la empresa
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Qué se hace en la etapa de mantenimiento y actualización de la información?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Se identifican los datos y la información que se necesitan para la toma de decisiones y el cumplimiento de los objetivos de la empresa
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Los datos procesados ​​se almacenan en sistemas de gestión de información
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> La información se mantiene actualizada y precisa para garantizar su relevancia y utilidad
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué se hace en la etapa de monitoreo y evaluación? </h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Se monitorea y evalúa periódicamente el proceso de administración de información 
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Se identifican los datos y la información que se necesitan para la toma de decisiones y el cumplimiento de los objetivos de la empresa 
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Los datos procesados ​​se almacenan en sistemas de gestión de información 
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz4u1.js') ?>"></script>	
<?= $this->endSection()?>