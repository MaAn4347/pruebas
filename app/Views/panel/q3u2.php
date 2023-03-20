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
								Análisis de las características del marketing del producto/servicio		
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
					<h3>1.-¿Qué significa que los servicios son intangibles en la mercadotecnia?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Que no se pueden ver, tocar o sentir antes de adquirirlos 
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Que los servicios se pueden almacenar y entregar posteriormente
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Que los servicios dependen de la calidad de la interacción entre el proveedor del servicio y el cliente 
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué estrategias pueden utilizar las empresas para superar la intangibilidad de los servicios?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> La construcción de una imagen de marca sólida y confiable
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> La utilización de garantías de satisfacción
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Todas las anteriores
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué significa que los servicios son inseparables en la mercadotecnia?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)">  Que los servicios se producen y se consumen simultáneamente
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Que los servicios pueden ser almacenados y entregados posteriormente
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)">  Que los servicios no dependen de la calidad de la interacción entre el proveedor del servicio y el cliente
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué herramientas de marketing pueden utilizar las empresas para mejorar la percepción de los clientes sobre la calidad del servicio que se ofrece?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)">  La publicidad y la promoción
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Las opiniones y comentarios de los clientes satisfechos
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Ambas
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Por qué la inseparabilidad puede ser un desafío para la mercadotecnia?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Porque el éxito de un servicio depende de la calidad de la interacción entre el proveedor del servicio y el cliente
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Porque los clientes no pueden probar o examinar los servicios antes de comprarlos
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Porque los servicios no se pueden ver, tocar o sentir antes de adquirirlos
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Cuál es una de las características de los servicios en la mercadotecnia mencionada en el texto?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> La tangibilidad de los servicios.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)">La variabilidad en la calidad del servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)">La capacidad de almacenamiento de los servicios.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué significa la heterogeneidad en la mercadotecnia de servicios?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> La falta de variedad en la calidad del servicio ofrecido. 
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> La capacidad de almacenamiento de los servicios.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> La variabilidad en la calidad del servicio ofrecido debido a la interacción entre el proveedor y el cliente.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Por qué la heterogeneidad puede ser un desafío para la mercadotecnia?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Porque los servicios no tienen una fecha de vencimiento. 
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Porque los proveedores de servicios no están capacitados adecuadamente.
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Porque las empresas deben asegurarse de que sus proveedores de servicios brinden una experiencia consistente y de alta calidad a todos los clientes.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.¿Qué estrategia puede utilizar una empresa para abordar la heterogeneidad de los servicios? </h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> La fijación de precios altos durante los períodos de baja demanda.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> La personalización y segmentación de mercado.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> La falta de capacitación para los proveedores de servicios.

					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué es el carácter perecedero en la mercadotecnia de servicios?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> La capacidad de almacenamiento de los servicios.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> La falta de variedad en la calidad del servicio ofrecido.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> La naturaleza temporal del servicio, lo que significa que no se puede almacenar o revender una vez que se ha producido. 
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz3u2.js') ?>"></script>	
<?= $this->endSection()?>