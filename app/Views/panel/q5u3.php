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
								Estrategias de mercadotecnia		
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
					<h3>1.-¿Qué implica la prospectiva en la aplicación de marketing en servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Analizar el mercado turístico del pasado.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Identificar y analizar las tendencias y cambios que pueden afectar el mercado turístico en el futuro. 
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Evaluar constantemente los resultados de las estrategias de marketing.
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué puede incluir el análisis prospectivo en el marketing turístico?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Los eventos pasados en el mercado turístico.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Los cambios en las políticas gubernamentales y regulaciones.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> El presupuesto disponible para la empresa turística.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Por qué la prospectiva en el marketing turístico es un proceso continuo y dinámico?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Porque requiere una evaluación constante del entorno y una adaptación constante a los cambios y tendencias emergentes.
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Porque solo se realiza una vez al año.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Porque solo se enfoca en las tendencias de viaje. 
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué beneficios tiene adoptar un enfoque prospectivo en el marketing turístico?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Permite a las empresas estar mejor preparadas para enfrentar los desafíos y aprovechar las oportunidades que surjan en el futuro.
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Reduce los costos de marketing.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> No tiene beneficios prácticos para las empresas turísticas.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué tipo de tecnología se menciona en el texto como una forma de ofrecer servicios más útiles a los clientes en el sector turístico?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)">Máquinas expendedoras 
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Reservas en línea
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Teléfonos públicos
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué estrategia de marketing se menciona en el texto como una forma de generar conciencia de marca en el sector turístico?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Marketing de guerrilla
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Marketing de masas
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Marketing de contenidos
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué se requiere para lograr el éxito a largo plazo de los servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Una planificación cuidadosa y análisis a corto plazo
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> No es necesario hacer planificación y análisis a largo plazo
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Una planificación cuidadosa y análisis a largo plazo
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué se necesita para asegurar el éxito de los servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Una estrategia de mercadotecnia a corto plazo
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Una estrategia de mercadotecnia a largo plazo
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> No se necesita una estrategia de mercadotecnia
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Qué beneficio puede obtener un profesional del turismo al invertir en estrategias de marketing para servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Potencial de crecimiento
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)">Ventaja competitiva sostenible 
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)">Ambas respuestas son correctas
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Por qué el uso de tácticas de marketing innovadoras y futuristas puede ser beneficioso para los servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Ayuda a asegurar una ventaja competitiva sostenible
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)">No tiene ningún beneficio.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Solo es beneficioso a corto plazo
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz5u3.js') ?>"></script>	
<?= $this->endSection()?>