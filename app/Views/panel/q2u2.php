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
								Diseño de la mezcla de marketing de servicios turistícos	
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
					<h3>1.-¿Qué es la mezcla de marketing y cuáles son sus componentes?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Es la forma en que las empresas turísticas promueven sus productos y servicios a los clientes. Sus componentes son: la publicidad, las relaciones públicas, las ventas personales y las promociones.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)">  Son las diferentes herramientas de marketing que una empresa turística puede utilizar para influir en la demanda de sus servicios. Sus componentes son: el diseño de productos o servicios, el precio, la distribución y la promoción
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)">  Es la forma en que las empresas turísticas segmentan su mercado y seleccionan sus clientes. Sus componentes son: la imagen de marca, la calidad del servicio, la personalización y la innovación.

					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué aspectos se deben investigar y analizar para diseñar un producto turístico atractivo y relevante?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Las tendencias del mercado, la competencia y las preferencias del cliente.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> El costo de los servicios turísticos, la calidad de los proveedores y la ubicación geográfica.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> La experiencia del cliente, el número de empleados y la cantidad de reservas mensuales.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué es la segmentación de mercado para servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Es la forma en que las empresas turísticas diseñan sus productos y servicios para satisfacer las necesidades y expectativas de los clientes.
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Es la forma en que las empresas turísticas identifican y seleccionan segmentos de mercado específicos para los servicios turísticos y diseñan ofertas de servicios personalizadas para cada segmento.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Es la forma en que las empresas turísticas establecen precios efectivos para los servicios turísticos.
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Por qué es importante establecer un precio competitivo en relación a la competencia?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Para ganar más dinero que la competencia.
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Para reflejar el valor del servicio turístico ofrecido.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)">Para asegurar que los clientes tengan acceso al servicio turístico.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué son las estrategias de distribución para servicios turísticos? </h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> La forma en que las empresas turísticas promocionan sus servicios turísticos para atraer a los clientes potenciales.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> La forma en que las empresas turísticas diseñan sus productos y servicios para satisfacer las necesidades y expectativas de los clientes.
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> La forma en que los servicios turísticos pueden ser distribuidos eficazmente a través de diferentes canales, incluyendo agencias de viajes, sitios web de reservas y canales de venta directa.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué es la mezcla de marketing para servicios turísticos? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Una herramienta que incluye el diseño de productos, el precio, la distribución y la promoción.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Un conjunto de herramientas para el análisis FODA de servicios turísticos.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Un método para la selección de segmentos de mercado.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué factores deben considerarse al establecer el precio de un servicio turístico?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Solo los costos asociados con la prestación del servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Solo la fijación de precios utilizada por la competencia.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> El valor del servicio ofrecido, los costos asociados y la fijación de precios utilizada por la competencia.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué son las estrategias de distribución para servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Cómo los servicios turísticos pueden ser promocionados para atraer a los clientes.
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Cómo los servicios turísticos pueden ser distribuidos eficazmente a través de diferentes canales. 
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Cómo los servicios turísticos pueden ser diseñados para satisfacer las necesidades de los clientes.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.¿Qué es el análisis FODA para la mezcla de marketing de servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Una herramienta para el diseño de productos o servicios.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Una herramienta para identificar los factores internos y externos que pueden afectar el diseño de la mezcla de marketing de servicios turísticos.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Una herramienta para la fijación de precios de servicios turísticos.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué son las estrategias de segmentación de mercado para servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Cómo mantener a los clientes existentes y aumentar su lealtad.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Cómo crear una imagen de marca distintiva y atractiva para los servicios turísticos.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Cómo identificar y seleccionar segmentos de mercado específicos para los servicios turísticos.
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz2u2.js') ?>"></script>	
<?= $this->endSection()?>