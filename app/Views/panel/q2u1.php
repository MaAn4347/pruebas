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
								Planeación del marketing		
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
					<h3>1.-¿Qué implica la planificación de marketing?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> La colocación de recursos para maximizar el impacto de las actividades de marketing.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> La definición de los objetivos de producción de una empresa.
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> La selección de los empleados adecuados para realizar actividades de marketing.
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué es la mezcla de marketing?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> La combinación adecuada de productos, precios, promoción y distribución.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> La selección de canales de comunicación para llegar a los clientes.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> La identificación de la competencia de una empresa.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué implica la planificación de presupuesto de marketing?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> La definición de los canales de comunicación más efectivos para llegar a los clientes. 
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> La medición de los resultados de las actividades de marketing para realizar ajustes y mejoras continuas.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> La asignación de recursos para maximizar el impacto de las actividades de marketing. 
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Por qué es importante la planificación de marketing?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Porque permite a la empresa adaptarse a los cambios en el mercado y en las necesidades del cliente para mantener su competitividad. 
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Porque ayuda a la empresa a definir sus objetivos financieros.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Porque ayuda a la empresa a seleccionar los empleados adecuados para realizar actividades de marketing. 
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué aspectos incluyen la planificación a largo plazo en marketing? </h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> La solicitud de recursos financieros de una empresa.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> La selección de los empleados adecuados para realizar actividades de marketing.
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> La definición de los productos y servicios que se ofrecen, los segmentos de mercado objetivo, la fijación de precios, las actividades promocionales y los canales de distribución.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Por qué es importante revisar y actualizar el plan de marketing periódicamente? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Para evitar el gasto necesario de recursos.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Para garantizar que siga siendo relevante y efectivo
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Para mantener la estabilidad financiera de la empresa.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Por qué es importante que la planificación a largo plazo en marketing sea flexible? </h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Para cumplir con los objetivos financieros de la empresa.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Para evitar los cambios en la estrategia de marketing.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Para permitir a las empresas adaptarse a los cambios en el mercado y en las necesidades de los clientes.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Cuál es el primer paso en la planeación de marketing?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> La segmentación de mercado
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> La definición de objetivos de marketing 
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> El análisis de la situación
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.¿Qué se busca con la segmentación de mercado?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Identificar oportunidades y amenazas en el mercado
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Adaptar los productos o servicios a las necesidades de cada grupo de consumidores 
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Establecer objetivos de marketing específicos
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué es el posicionamiento de mercado?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> La identificación de los grupos de consumidores más propensos a comprar los productos o servicios de la empresa
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> La combinación adecuada de productos, precios, promoción y distribución que mejor satisfaga las necesidades del cliente
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> La decisión de cómo se quiere que los productos o servicios sean percibidos por los consumidores en comparación con la competencia
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Cuál es el último paso en la estructura de la planeación del marketing? </h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> La segmentación de mercado 
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> La definición de la mezcla de marketing
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> La implementación y control
					</label>
				</section>
				<br>
				<section id="p11">
					<h3>12.-¿Cuáles son los pasos principales del proceso de planeación de marketing?</h3>
					<label>
						<input type="radio" value="1" name="p11" onclick="respuesta(11,this)"> Análisis de la situación, establecimiento de objetivos, evaluación y control
					</label>
					<label>
						<input type="radio" value="2" name="p11" onclick="respuesta(11,this)"> Desarrollo de estrategias de marketing, análisis de la situación, implementación de la estrategia
					</label>
					<label>
						<input type="radio" value="3" name="p11"onclick="respuesta(11,this)"> Evaluación y control, desarrollo de estrategias de marketing, establecimiento de objetivos
					</label>
				</section>
				<br>
				<section id="p12">
					<h3>13.-¿Por qué es importante que los objetivos de marketing sean medibles, realistas y alineados con los objetivos generales de la empresa?</h3>
					<label>
						<input type="radio" value="1" name="p12" onclick="respuesta(12,this)"> Para asegurarse de que se alcancen los resultados esperados
					</label>
					<label>
						<input type="radio" value="2" name="p12" onclick="respuesta(12,this)"> Para que sean fáciles de definir y comunicar a todo el equipo de la empresa
					</label>
					<label>
						<input type="radio" value="3" name="p12"onclick="respuesta(12,this)"> Para asegurarse de que la empresa esté alineada con las necesidades de los clientes
					</label>
				</section>
				<br>
				<section id="p13">
					<h3>14.-¿Qué es lo que debe hacer la empresa en la etapa de evaluación y control del proceso de planeación de marketing?</h3>
					<label>
						<input type="radio" value="1" name="p13" onclick="respuesta(13,this)"> Implementar la estrategia de marketing
					</label>
					<label>
						<input type="radio" value="2" name="p13" onclick="respuesta(13,this)"> Desarrollar nuevas estrategias de marketing
					</label>
					<label>
						<input type="radio" value="3" name="p13"onclick="respuesta(13,this)"> Evaluar los resultados y controlar el progreso para asegurarse de que se alcancen los objetivos establecidos.
					</label>
				</section>
				<br>
				<section id="p14">
					<h3>15.-¿Cuál es el objetivo principal de la planeación del marketing? </h3>
					<label>
						<input type="radio" value="1" name="p14" onclick="respuesta(14,this)"> Identificar oportunidades de mercado
					</label>
					<label>
						<input type="radio" value="2" name="p14" onclick="respuesta(14,this)"> Asegurar que se están utilizando los recursos de manera efectiva
					</label>
					<label>
						<input type="radio" value="3" name="p14"onclick="respuesta(14,this)"> Maximizar el éxito comercial de la empresa
					</label>
				</section>
				<br>
				<section id="p15">
					<h3>16.-¿Por qué es importante que una empresa tenga una estrategia de marketing sólida y flexible en su lugar?</h3>
					<label>
						<input type="radio" value="1" name="p15" onclick="respuesta(15,this)"> Para identificar oportunidades de mercado
					</label>
					<label>
						<input type="radio" value="2" name="p15" onclick="respuesta(15,this)"> Para responder rápidamente y tomar decisiones informadas en un entorno dinámico.
					</label>
					<label>
						<input type="radio" value="3" name="p15"onclick="respuesta(15,this)"> Para maximizar su rentabilidad a largo plazo
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz2u1.js') ?>"></script>	
<?= $this->endSection()?>