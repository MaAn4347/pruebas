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
							Definición y ajustes de proyecto		
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
					<h3>1.-¿Cuál es uno de los principales problemas que enfrenta la industria turística según el texto?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Falta de personal capacitado
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Altos precios de los servicios turísticos
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)">  Exceso de innovación en la oferta de servicios
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué problema específico se menciona en el texto en relación con los paquetes turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Altos precios
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Diseño y entrega deficientes
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Escasez de opciones
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué consecuencia se menciona en el texto en relación con la baja calidad de los servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Aumento de la satisfacción de los clientes
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Disminución de la demanda de servicios turísticos
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Mayor innovación en la oferta de servicios
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Cuál de los problemas mencionados en el texto se puede solucionar con el uso de tecnología?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Escasez de personal capacitado
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Falta de innovación en la oferta de servicios
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Baja satisfacción de los clientes
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué estrategia se menciona para mejorar la calidad de los servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Oferta de nuevos paquetes turísticos
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Creación de experiencias únicas para los turistas
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Uso de nuevas tecnologías
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué estrategia se menciona para aumentar la demanda de servicios turísticos? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Oferta de nuevos paquetes turísticos
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Creación de experiencias únicas para los turistas
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Ambas
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué estrategia se menciona para ofrecer una experiencia única a los turistas?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)">Oferta de nuevos paquetes turísticos
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Creación de experiencias únicas para los turistas
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Uso de nuevas tecnologías
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué aspecto es importante para tener una buena reputación en el mercado turístico?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Recursos humanos calificados
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Marca sólida y reconocida
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Servicios turísticos a precios competitivos
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.¿Qué factor es esencial para mantener relaciones exitosas con proveedores y colaboradores en la industria turística?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Servicios turísticos a precios competitivos
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Buena ubicación
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)">  Buenas relaciones
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué recurso es fundamental para brindar un buen servicio en la industria turística?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Una buena ubicación
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Personal capacitado
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Ofertas de servicios innovadoras
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz7u3.js') ?>"></script>	
<?= $this->endSection()?>