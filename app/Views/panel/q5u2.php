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
								Elaboración de presupuesto		
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
					<h3>1.-¿Qué es la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> La manera en que los productos o servicios son llevados al mercado para ser adquiridos por los consumidores.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> La selección de puntos de venta.
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> La exhibición y el empaque del producto.
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Cuáles son algunos de los instrumentos de la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Publicidad en línea, estrategia de contenido, marketing de influencia y promociones.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Selección de canales de distribución, diseño y gestión de la cadena de suministro, logística y transporte, y gestión del inventario.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Sorteos, concursos, cupones y descuentos.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Cuál es una forma común de distribución?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Distribución directa.
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)">Distribución indirecta.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Distribución en línea.
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué ventaja tiene la distribución indirecta?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Permite al productor tener un mayor control sobre el proceso de venta.
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Es adecuada para productos/servicios personalizados.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Permite una mayor cobertura del mercado y puede ser más rentable que la distribución directa.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Cuál es una forma más reciente de distribución?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Distribución directa.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Distribución indirecta.
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Distribución en línea.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué es la programación en la aplicación de la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> La creación de anuncios publicitarios para promocionar el producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> La planificación y organización de los aspectos de la distribución del producto o servicio, desde la producción hasta la entrega al cliente final.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)">La investigación de mercado para identificar los hábitos de consumo del público objetivo.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué aspectos deben considerarse al programar la distribución del producto o servicio?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> La temporada y las tendencias de la moda.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> La cantidad de capital invertido en la empresa.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> La planificación de la producción, el almacenamiento, el transporte y la entrega del producto o servicio.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Por qué es importante considerar factores como la temporada, las tendencias del mercado y los cambios en la demanda del consumidor al programar la distribución?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Para maximizar los beneficios de la empresa.
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Para ajustar los precios del producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Para cumplir con las demandas cambiantes del mercado.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Qué recursos son necesarios para llevar a cabo una estrategia efectiva de mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Recursos financieros, recursos humanos, recursos tecnológicos, recursos de información y recursos materiales.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Recursos artísticos, recursos culturales, recursos turísticos, recursos deportivos y recursos educativos.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Recursos de entretenimiento, recursos alimenticios, recursos de vestimenta, recursos de belleza y recursos de transporte.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué es la variable de Plaza en la mercadotecnia de plaza?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> La selección del precio del producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> La selección del segmento de mercado específico donde se distribuirá el producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> La selección de los canales por los que el producto o servicio será distribuido.
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Qué implica la variable de logística y transporte en la distribución del producto o servicio?  </h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> La selección del territorio geográfico específico donde se distribuirá el producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> La selección del lugar físico donde se ofrecerá el producto o servicio al consumidor final.
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> La selección del medio de transporte y el diseño de la cadena de suministro que permita la distribución eficiente del producto o servicio.
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz5u2.js') ?>"></script>	
<?= $this->endSection()?>