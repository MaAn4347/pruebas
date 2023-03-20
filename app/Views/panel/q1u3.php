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
								Plan de investigación		
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
					<h3>1.-¿Qué es el control en la aplicación de la mercadotecnia a servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Es el proceso de medición y análisis de diversos indicadores clave de desempeño
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Es el proceso de diseño de estrategias de marketing
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Es el proceso de planificación de actividades de mercadotecnia
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Cuál es el objetivo del control en la aplicación de la mercadotecnia a servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Asegurarse de que las estrategias de mercadotecnia sean eficaces
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Aumentar los costos de marketing
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Reducir la satisfacción del cliente 
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Cuáles son algunos de los indicadores clave de desempeño que se miden en el control de la aplicación de la mercadotecnia a servicios turísticos?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Número de clientes, satisfacción del cliente, tasa de ocupación, tasa de cancelación, ingresos generados, costos de marketing y retornos de inversión
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Número de empleados, satisfacción del empleado, tasa de rotación, ingresos generados, costos de marketing y retornos de inversión 
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Número de habitaciones, satisfacción del huésped, tasa de ocupación, tasa de cancelación, ingresos generados, costos de marketing y retornos de inversión
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Cuál es el propósito del monitoreo y evaluación del desempeño de las actividades de mercadotecnia en el mercado turístico? </h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Aumentar los costos de marketing 
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Asegurarse de que las estrategias de mercadotecnia sean efectivas y generen los resultados deseados.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Reducir la demanda de servicios turísticos
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Cuál es el objetivo de la evaluación de las actividades de marketing en el mercado turístico?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Obtener información sobre el desempeño de las actividades de finanzas
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)">Identificar áreas de mejora en la producción de bienes y servicios
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Obtener información sobre el desempeño de las actividades de marketing 
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Para qué sirve la evaluación de las actividades de marketing en el mercado turístico?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Para evaluar el desempeño de los empleados
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Para identificar los competidores en el mercado
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Para tomar decisiones informadas sobre cómo ajustar y mejorar las estrategias y tácticas de marketing
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Cuáles son algunas de las métricas clave utilizadas para evaluar el desempeño de las actividades de marketing en el mercado turístico?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Número de empleados, ganancias netas, costo de producción
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Tasa de cancelación, ingresos generados, costo de marketing 
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Número de sucursales, costo de publicidad, ingresos brutos
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz1u3.js') ?>"></script>	
<?= $this->endSection()?>