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
								Selección del mercado para la segmentación		
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
					<h3>1.-¿Cuál es el objetivo de la selección del mercado para la segmentación?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Identificar los criterios adecuados para dividir un mercado en segmentos más pequeños y específicos.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Desarrollar productos y servicios personalizados para satisfacer las necesidades de los consumidores. 
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Analizar el comportamiento del consumidor, como las preferencias y las motivaciones.
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Por qué es importante la selección del mercado para la segmentación en la industria turística?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Porque permite a las empresas desarrollar una estrategia de marketing más efectiva y enfocada. 
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Porque mejora la eficacia y la eficiencia de la estrategia de marketing de la empresa.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Porque ayuda a identificar las variables relevantes para la segmentación de los clientes del sector turístico. 
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué factores clave deben considerar las empresas al seleccionar el mercado para la segmentación?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> El tamaño del mercado, el potencial de crecimiento, la rentabilidad y la accesibilidad.
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> El comportamiento del consumidor, como las preferencias y las motivaciones. 
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> La creación de productos y servicios personalizados para satisfacer las necesidades de los consumidores.
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué implica la identificación del mercado objetivo?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Evaluar cada segmento de mercado en función de su tamaño, potencial de crecimiento, rentabilidad y atractivo. 
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Seleccionar las variables que se utilizarán para dividir el mercado en grupos más pequeños y homogéneos.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Desarrollar una estrategia de marketing específica para cada segmento de mercado identificado.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Por qué es importante revisar y ajustar el mercado objetivo de forma regular? </h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Porque las condiciones del mercado y las necesidades del consumidor pueden cambiar con el tiempo.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Porque las empresas deben adaptarse constantemente a las circunstancias cambiantes del mercado.
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Porque las empresas necesitan evaluar y mejorar constantemente su eficacia y eficiencia de la estrategia de marketing.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Cómo pueden las empresas desarrollar una estrategia de marketing específica para cada segmento de mercado?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Creando mensajes de marketing específicos para cada segmento y la identificación de canales de distribución específicos.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Creando mensajes de marketing específicos para cada segmento y creando productos o servicios personalizados para satisfacer las necesidades de cada segmento.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Creando productos o servicios personalizados para satisfacer las necesidades de cada segmento y la identificación de canales de distribución específicos.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Cuál es el objetivo final de la selección del mercado para la segmentación? </h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Identificar los criterios adecuados para dividir un mercado en segmentos más pequeños y específicos.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Mejorar la eficacia y eficiencia de la estrategia de marketing de la empresa.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Ofrecer productos o servicios personalizados que satisfagan las necesidades de cada segmento de mercado.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué es la segmentación demográfica?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Una técnica de segmentación de mercado que se basa en la ubicación geográfica de los consumidores.
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Una técnica de segmentación de mercado que se basa en el comportamiento del consumidor hacia un producto o servicio.
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Una variable de segmentación del mercado que se refiere a características de la población tales como edad, género, nivel de ingresos, educación, entre otros.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Por qué las variables demográficas son ampliamente utilizadas en la segmentación del mercado?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Porque son muy difíciles de medir.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Porque no son relevantes para los consumidores.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Porque son accesibles y fáciles de medir.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Para qué empresas es particularmente útil la segmentación geográfica?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Para empresas que ofrecen productos o servicios que varían según la ubicación geográfica.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Para empresas que ofrecen productos o servicios que tienen diferentes niveles de uso.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Para empresas que buscan fidelizar a sus clientes existentes.
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Qué variables conductuales se utilizan en la segmentación del mercado?</h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> La región geográfica, el tamaño de la ciudad, el clima y la densidad de población.
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> La frecuencia de compra, la lealtad de marca, la ocasión de uso, la actitud hacia el producto, el nivel de conocimiento del producto y el beneficio buscado.
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> Características de la población tales como edad, género, nivel de ingresos, educación, entre otros.
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz1u2.js') ?>"></script>	
<?= $this->endSection()?>