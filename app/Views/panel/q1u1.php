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
								Identificación de la mercadotecnia turística		
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
					<h3>1.-¿Cuál es el origen etimológico de la palabra "mercadotecnia"?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Mercado y tecnología
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Mercado y tecnología 
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Marketing y tecnología
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿En qué década se aplica la psicología y la sociología al estudio del comportamiento del consumidor?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Década de 1910 
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Década de 1920
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Década de 1930 
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Cuál es uno de los objetivos de la mercadotecnia?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Maximizar la producción de la empresa 
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Satisfacer las necesidades y deseos del cliente 
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Reducir los costos de la empresa
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué herramienta utiliza la mercadotecnia para dar a conocer los productos y servicios de la empresa? </h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Comunicación 
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Distribución .
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Rentabilidad
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué función tiene la mercadotecnia en el diseño y desarrollo de productos? </h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Reducir los costos de producción
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Maximizar la rentabilidad de la empresa
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Satisfacer las necesidades y deseos del cliente 
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿En qué se basa la mercadotecnia para determinar el precio de los productos y servicios de la empresa? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> En la cantidad de productos vendidos
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> En la calidad de los productos ofrecidos
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> En el valor que tienen para el cliente y la competencia en el mercado 
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué es el marketing mix? </h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> El conjunto de herramientas de marketing que una empresa utiliza para promocionar y vender sus productos o servicios.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> El proceso de crear relaciones duraderas con los clientes para lograr su lealtad y repetición de compra.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> La investigación de mercado para comprender a los clientes y sus necesidades.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Cuál es el objetivo del posicionamiento?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Diferenciarse de la competencia y crear una imagen positiva y atractiva en la mente del consumidor.
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Segmentar el mercado en grupos de consumidores que comparten necesidades y características similares.
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Promocionar y vender productos y servicios a través de medios digitales.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Qué es la segmentación de mercado?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> La recopilación y análisis de información sobre los consumidores, la competencia y el mercado en general.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> La división del mercado en grupos más pequeños de consumidores que tienen necesidades y deseos similares.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> La creación de una imagen de marca y una posición en el mercado que diferencie a la empresa de su competencia.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Cuál es el componente de la mercadotecnia que se refiere a cómo los productos y servicios se entregan a los consumidores?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Investigación de mercado.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Segmentación de mercado.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Distribución.
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Qué elementos conforman la mezcla de mercadotecnia tradicional? </h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> Cliente, Costo y Comunicación
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> Producto, Precio, Distribución y Promoción
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> Investigación de mercado, Segmentación de mercado y Posicionamiento de mercado
					</label>
				</section>
				<br>
				<section id="p11">
					<h3>12.-¿Qué es la mezcla de mercadotecnia?</h3>
					<label>
						<input type="radio" value="1" name="p11" onclick="respuesta(11,this)"> Un conjunto de estrategias de publicidad utilizadas para vender un producto o servicio.
					</label>
					<label>
						<input type="radio" value="2" name="p11" onclick="respuesta(11,this)"> Un conjunto de herramientas y estrategias de marketing que las empresas utilizan para promocionar y vender sus productos o servicios en el mercado.
					</label>
					<label>
						<input type="radio" value="3" name="p11"onclick="respuesta(11,this)"> Un conjunto de técnicas de venta utilizadas para convencer a los clientes de que compren un producto o servicio.
					</label>
				</section>
				<br>
				<section id="p12">
					<h3>13.-¿Qué elemento de la mezcla de mercadotecnia se refiere a cómo se llevará el producto al mercado?</h3>
					<label>
						<input type="radio" value="1" name="p12" onclick="respuesta(12,this)"> Producto
					</label>
					<label>
						<input type="radio" value="2" name="p12" onclick="respuesta(12,this)"> Precio
					</label>
					<label>
						<input type="radio" value="3" name="p12"onclick="respuesta(12,this)"> Plaza
					</label>
				</section>
				<br>
				<section id="p13">
					<h3>14.-¿Cuál de las siguientes empresas de servicios turísticos se encarga de proporcionar alojamiento a los turistas y viajeros?</h3>
					<label>
						<input type="radio" value="1" name="p13" onclick="respuesta(13,this)"> Hoteles
					</label>
					<label>
						<input type="radio" value="2" name="p13" onclick="respuesta(13,this)"> Agencias de viajes
					</label>
					<label>
						<input type="radio" value="3" name="p13"onclick="respuesta(13,this)"> Restaurantes
					</label>
				</section>
				<br>
				<section id="p14">
					<h3>15.-¿Qué ofrecen las empresas de actividades turísticas a los turistas y viajeros? </h3>
					<label>
						<input type="radio" value="1" name="p14" onclick="respuesta(14,this)"> Actividades y tours
					</label>
					<label>
						<input type="radio" value="2" name="p14" onclick="respuesta(14,this)"> Comidas y bebidas
					</label>
					<label>
						<input type="radio" value="3" name="p14"onclick="respuesta(14,this)"> Servicios de transporte
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz1u1.js') ?>"></script>	
<?= $this->endSection()?>