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
							Aplicación de la mercadotécnica de Plaza		
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
					<h3>1.-¿Qué son los canales de distribución en la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Los medios utilizados para hacer publicidad en línea.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Los lugares donde se venden los productos al consumidor final.
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Los vehículos utilizados para transportar los productos.
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué implica la gestión de inventario en la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> El control de los niveles de inventario y la gestión de la rotación de los productos.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> La elección del medio de transporte adecuado.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> La gestión de los productos en el momento en que están en tránsito o esperando a ser distribuidos.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué es la distribución intensiva en la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Cuando el producto o servicio solo está disponible en un punto de venta exclusivo.
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Cuando el producto o servicio solo está disponible en algunos puntos de venta seleccionados cuidadosamente.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Cuando el producto o servicio está disponible en el mayor número posible de puntos de venta.
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿En qué consiste la distribución exclusiva en la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Cuando el producto o servicio solo está disponible en algunos puntos de venta seleccionados cuidadosamente.
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Cuando el producto o servicio está disponible en el mayor número posible de puntos de venta.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Cuando el producto o servicio solo está disponible en un punto de venta exclusivo.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Por qué es importante seleccionar la forma de distribución adecuada en la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)">Para asegurar una distribución efectiva, eficiente y rentable de la oferta en el mercado.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Para ofrecer un buen servicio al cliente.
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Para controlar los niveles de inventario y la gestión de la rotación de los productos.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué son los intermediarios en la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Empresas que fabrican el producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Entidades que actúan como canal entre el fabricante y el consumidor final.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Personas encargadas de la publicidad del producto o servicio.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Cuál es la función de los intermediarios en la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)">Fabricar el producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Promocionar el producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Llevar el producto o servicio al consumidor final de manera eficiente y efectiva.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué beneficios proporcionan los intermediarios al fabricante?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Reducir los costos de producción.
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)">  Ofrecer servicios de almacenamiento y entrega eficientes. 
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Proporcionar acceso a una red de distribución ya establecida.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.¿Por qué es importante seleccionar intermediarios adecuados en la estrategia de mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Porque los intermediarios pueden marcar la diferencia entre el éxito y el fracaso de la estrategia de mercadotecnia de plaza.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Porque los intermediarios tienen el control del precio del producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)">  Porque los intermediarios son los encargados de fabricar el producto o servicio.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué implica la programación en la aplicación de la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Planificar y coordinar las actividades necesarias para poner el producto o servicio a disposición del consumidor final en el lugar y momento adecuados.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Realizar la publicidad del producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Determinar el precio del producto o servicio.
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Qué es la variable de plaza en la mercadotecnia?</h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> Se enfoca en el diseño de productos y servicios.
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> Se enfoca en cómo los productos o servicios serán transportados y entregados al cliente final.
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)">  Se enfoca en la promoción y publicidad de productos y servicios.
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz7u2.js') ?>"></script>	
<?= $this->endSection()?>