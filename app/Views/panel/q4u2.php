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
								Desarrollo de los niveles del producto/servicio turístico		
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
					<h3>1.-¿Cuál es el núcleo del producto turístico?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> El producto ampliado
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> El producto de imagen
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> El producto básico
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué elementos se consideran parte del producto ampliado?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Alojamiento y transporte
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Comida y bebida
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Ambas
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué es el producto de imagen en el turismo?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> La versión expandida del producto básico 
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Las percepciones y expectativas que los visitantes tienen del destino
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> La forma en que los visitantes interactúan con el destino turístico
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿En qué nivel se promociona el producto o servicio turístico?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Nivel 1
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Nivel 2
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Nivel 3
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué implica el nivel de evaluación en el turismo?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Evaluar el producto o servicio turístico para determinar si se cumplen los objetivos de la empresa y los deseos de los clientes 
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)">Realizar una investigación exhaustiva para determinar las necesidades de los turistas
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)">Promocionar el producto o servicio turístico a través de diversos canales
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué implica la creación y promoción de productos y servicios turísticos? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Identificar los productos y servicios turísticos que pueden atraer a los turistas y luego desarrollar y promocionar estos productos y servicios.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Construir y mantener infraestructuras turísticas atractivas para los turistas.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)">Crear una cultura de servicio de calidad para los turistas.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué implica la mejora de la calidad de los productos y servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Identificar los productos y servicios turísticos que pueden atraer a los turistas y luego desarrollar y promocionar estos productos y servicios.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Mejorar la calidad de los productos y servicios turísticos para satisfacer mejor las expectativas de los turistas.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Construir y mantener infraestructuras turísticas atractivas para los turistas.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué implica la promoción de la experiencia turística?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Mejorar la calidad del producto o servicio turístico para satisfacer mejor las necesidades y expectativas de los clientes.
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Realizar campañas de publicidad y promoción para destacar los productos y servicios turísticos y aumentar la conciencia de la marca.
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Mejorar la experiencia del cliente para hacer que sea más emocionante, memorables e interactiva.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Qué implica la integración en el contexto turístico?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Identificar los productos y servicios turísticos que pueden atraer a los turistas y luego desarrollar y promocionar estos productos y servicios.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Construir y mantener infraestructuras turísticas atractivas para los turistas.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Integrar los productos y servicios turísticos en plataformas digitales para mejorar la experiencia del cliente.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué implica la innovación en el contexto turístico?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Identificar los productos y servicios turísticos que pueden atraer a los turistas y luego desarrollar y promocionar estos productos y servicios.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Implementar nuevas tecnologías y soluciones innovadoras para mejorar la eficiencia, la seguridad y la satisfacción del cliente.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Crear una cultura de servicio de calidad para los turistas.
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz4u2.js') ?>"></script>	
<?= $this->endSection()?>