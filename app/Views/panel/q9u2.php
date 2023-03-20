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
							Aplicación mercadotécnica de Producto		
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
					<h3>1.-¿Qué función cumplen los intermediarios en la distribución de productos?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Fabricar el producto y llevarlo al mercado
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Vender el producto directamente al consumidor final
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Facilitar la distribución y venta del producto
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Cuál es uno de los principales beneficios de contar con intermediarios en la distribución de productos?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Reducción del costo final del producto
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Mayor control sobre la promoción del producto
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Mayor alcance a través de una red más amplia de distribución
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué factores deben considerarse al elegir los intermediarios adecuados para la distribución de productos?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Su capacidad para fabricar el producto y llevarlo al mercado
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Su éxito en la promoción de productos de otros sectores
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Su conocimiento profundo del mercado y del público objetivo
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Cómo puede afectar la elección de los intermediarios al precio final del producto y su margen de ganancia?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> No tiene ningún efecto en el precio y el margen de ganancia
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Puede aumentar el precio final del producto y reducir el margen de ganancia.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Puede reducir el precio final del producto y aumentar el margen de ganancia
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Cuál es el objetivo principal de las agencias de marketing digital?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Ofrecer servicios de promoción de anuncios en línea
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Generar contenido de marketing de contenido
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)">Realizar campañas de patrocinio
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué tipo de empresas se dedican al marketing de influencia?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Empresas especializadas en colaboraciones con influencers
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Agencias de marketing digital
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Servicios de promoción de anuncios en línea
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Cuál es una de las variables en la promoción de productos o servicios?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Presupuesto para promociones
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Segmentos de público objetivo
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Ambas
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué se debe analizar en la variable de "Análisis de resultados de promoción"?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Los resultados de las campañas de anuncios en línea
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> La efectividad de las campañas de patrocinio
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> El contenido de marketing de contenido
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Qué recursos creativos son necesarios para la promoción de un producto o servicio?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Presupuesto para promociones
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Recursos creativos
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Herramientas de promoción
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué forma es importante considerar al momento de segmentar el público objetivo en una campaña de promoción?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Presupuesto
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Segmentos de público objetivo
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Tiempo de campaña
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz9u2.js') ?>"></script>	
<?= $this->endSection()?>