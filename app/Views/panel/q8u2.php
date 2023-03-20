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
							Aplicación mercadotécnica de Producción		
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
					<h3>1.-¿Cuál es el objetivo de la publicidad dentro de la promoción?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Crear conciencia de marca y fomentar la compra del producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Incentivar la compra del producto o servicio a través de descuentos y regalos.
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Mantener una buena imagen y reputación ante los diferentes públicos.
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Cuál es el objetivo de la promoción de ventas dentro de la promoción?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Crear conciencia de marca y fomentar la compra del producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Incentivar la compra del producto o servicio a través de descuentos y regalos.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Mantener una buena imagen y reputación ante los diferentes públicos.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué son las relaciones públicas dentro de la promoción?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> La difusión de un mensaje a través de medios de comunicación masivos.
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Actividades que incentivan la compra del producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Las acciones que realiza la empresa para mantener una buena imagen y reputación ante sus diferentes públicos.
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué es el marketing directo dentro de la promoción?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> La comunicación directa con el cliente.
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Actividades que incentivan la compra del producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Las acciones que realiza la empresa para mantener una buena imagen y reputación ante sus diferentes públicos.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué son los intermediarios en la promoción de productos o servicios?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Personas físicas o jurídicas que actúan como un enlace entre la empresa y sus clientes.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Personas que trabajan en una empresa y se encargan de promocionar los productos.
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Clientes que compran los productos directamente de la empresa.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué papel desempeña un minorista como intermediario?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Ayuda a promocionar los productos de una empresa al colocarlos en lugares destacados en su tienda, en su sitio web o en su catálogo.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Ayuda a producir los productos de una empresa y a llevarlos al mercado.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Ayuda a diseñar los productos de una empresa y a mejorar su calidad.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Por qué es importante elegir los intermediarios adecuados en una campaña de promoción?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Porque los intermediarios pueden ayudar a la empresa a llegar a nuevos clientes y a ampliar su alcance.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Porque los intermediarios son los únicos que conocen el mercado y los consumidores.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Porque los intermediarios son los únicos que pueden vender los productos de la empresa.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué implica la programación de la promoción de una empresa?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> La producción de los productos o servicios que se promocionarán.
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> La planificación y organización de todas las actividades promocionales que se llevarán a cabo para promover los productos o servicios de la empresa a su público objetivo. 
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> La venta directa de los productos o servicios a los consumidores.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Cuáles son los recursos que se deben tener en cuenta en la estrategia de promoción?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Sólo los recursos financieros.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Los recursos financieros, humanos y tecnológicos.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Sólo los recursos humanos.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué función cumple la promoción en relación al producto?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Presentar nuevos productos o variantes del producto actual.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Incrementar la presencia del producto en el mercado.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Ambas
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Para qué se puede utilizar la promoción en relación al precio?</h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> Impulsar ventas en momentos específicos del año.
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> Comunicar precios especiales y descuentos.
					</label>
					<label>
						<input type="radio" value="3" name="p10"onclick="respuesta(10,this)"> Incrementar la presencia del producto en el mercado.
					</label>
				</section>
				<br>
				<section id="p11">
					<h3>12.-¿Para qué se puede utilizar la promoción en relación a la distribución?</h3>
					<label>
						<input type="radio" value="1" name="p11" onclick="respuesta(11,this)"> Incrementar la presencia del producto en el mercado.
					</label>
					<label>
						<input type="radio" value="2" name="p11" onclick="respuesta(11,this)"> Presentar nuevos productos o variantes del producto actual.
					</label>
					<label>
						<input type="radio" value="3" name="p11"onclick="respuesta(11,this)"> Comunicar precios especiales y descuentos.
					</label>
				</section>
				<br>
				<section id="p12">
					<h3>13.-¿Por qué es importante que la promoción se ajuste a las particularidades del producto, el precio, la distribución y la demanda?</h3>
					<label>
						<input type="radio" value="1" name="p12" onclick="respuesta(12,this)"> Para crear una imagen positiva en la mente del consumidor.
					</label>
					<label>
						<input type="radio" value="2" name="p12" onclick="respuesta(12,this)"> Para lograr una estrategia de marketing mix integrada.
					</label>
					<label>
						<input type="radio" value="3" name="p12"onclick="respuesta(12,this)"> Para segmentar el mercado y diseñar promociones específicas.
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz8u2.js') ?>"></script>	
<?= $this->endSection()?>