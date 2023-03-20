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
							Elementos correctivos		
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
					<h3>1.-¿Cuál es uno de los principales problemas en la industria de servicios turísticos que se menciona en la lista?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Falta de innovación en la oferta de servicios
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Escasez de personal capacitado
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Deficiencias en el diseño y la entrega de paquetes turísticos
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué problemática se menciona en la lista que podría afectar directamente la satisfacción de los clientes?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Escasa calidad de los servicios turísticos
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Falta de innovación en la oferta de servicios
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Deficiencias en el diseño y la entrega de paquetes turísticos
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué falta se menciona en la lista que podría dificultar el desarrollo de la industria turística?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Escasez de personal capacitado
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Baja satisfacción de los clientes
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Escasa calidad de los servicios turísticos
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué estrategia se sugiere para mejorar la calidad de los servicios turísticos en el texto?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Ofrecer precios más bajos
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Usar nuevas tecnologías
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Reducir la cantidad de servicios ofrecidos
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Cuál es una de las acciones que se pueden tomar para aumentar la demanda de servicios turísticos según el texto?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Ofrecer los mismos paquetes turísticos que la competencia
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> No realizar publicidad 
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Crear nuevas experiencias únicas para los turistas
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué se sugiere como una solución para la falta de innovación en la oferta de servicios turísticos en el texto?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)">No ofrecer nuevos servicios
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Ofrecer paquetes turísticos más baratos
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)">Ofertar nuevos paquetes turísticos
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Cuál de las siguientes características puede ayudar a una empresa turística a tener una ventaja competitiva en el mercado?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Buena ubicación
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)">Personal amable y servicial
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Instalaciones modernas y cómodas
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué ventaja puede tener una empresa turística que tenga una marca sólida y reconocida en el mercado turístico?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Atraer más turistas extranjeros
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Tener una mayor rentabilidad 
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)">Competir en precio con otras empresas turísticas
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Por qué es importante que una empresa turística tenga buenos recursos humanos calificados?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Para ofrecer un servicio de calidad y diferenciarse de la competencia
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Para poder ofrecer paquetes turísticos más variados
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Para poder cobrar precios más altos a los turistas
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Cuál es una de las posibles causas de la competencia desleal en el mercado turístico? </h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Nuevos operadores turísticos en el mercado.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)">Cambios en las preferencias de los turistas.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Variaciones en los precios de los servicios turísticos.
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Qué puede afectar las preferencias de los turistas y, por lo tanto, el mercado turístico?</h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> Competencia desleal por parte de los proveedores.
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> Nuevos operadores turísticos en el mercado.
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> Cambios en las preferencias de los turistas.
					</label>
				</section>
				<br>
				<section id="p11">
					<h3>12.-¿Qué puede afectar los precios de los servicios turísticos en el mercado?</h3>
					<label>
						<input type="radio" value="1" name="p11" onclick="respuesta(11,this)">Competencia desleal por parte de los proveedores.
					</label>
					<label>
						<input type="radio" value="2" name="p11" onclick="respuesta(11,this)"> Cambios en las preferencias de los turistas.
					</label>
					<label>
						<input type="radio" value="3" name="p11"onclick="respuesta(11,this)"> Variaciones en los precios de los servicios turísticos.
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz6u3.js') ?>"></script>	
<?= $this->endSection()?>