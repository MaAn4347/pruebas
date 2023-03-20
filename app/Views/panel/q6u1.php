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
							Finalidad de la fijación de objetivos comerciales dentro del proyecto		
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
					<h3>1.-¿Qué finalidad tiene la fijación de objetivos comerciales dentro de un proyecto?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Establecer metas claras y específicas.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Definir la estrategia de marketing
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Reducir el presupuesto del proyecto
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué ventaja tiene la fijación de objetivos comerciales en relación con la toma de decisiones en un proyecto?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Los objetivos permiten tomar decisiones sin evaluar su impacto 
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Las decisiones se basan en la evaluación de su impacto en el logro de los objetivos establecidos
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> La fijación de objetivos no tiene relación con la toma de decisiones
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué beneficio se puede obtener al fijar objetivos comerciales dentro de un proyecto en relación con el equipo de trabajo?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Facilitar el seguimiento y la medición del desempeño
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Mejorar la toma de decisiones
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Motivar al equipo
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Cuál es la importancia de revisar la visión y misión de la empresa en el proceso de fijación de objetivos comerciales?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> No es necesario revisar la visión y misión de la empresa.
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> La revisión de la visión y misión de la empresa es importante porque son la base de sus objetivos.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> La revisión de la visión y misión de la empresa solo es importante para la estrategia comercial.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Por qué es importante establecer objetivos comerciales específicos? </h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> No es importante establecer objetivos específicos.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Los objetivos específicos ayudan a la empresa a medir el progreso hacia el logro de sus metas. 
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Los objetivos específicos no son necesarios si la empresa tiene una buena estrategia comercial.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Cuál es el objetivo del análisis del entorno en el proceso de fijación de objetivos comerciales? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> No hay objetivo específico en el análisis del entorno.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> El análisis del entorno ayuda a la empresa a identificar las oportunidades y amenazas que afectan su mercado objetivo.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> El análisis del entorno solo es necesario para la planificación financiera de la empresa.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Por qué es importante asignar recursos adecuados para lograr los objetivos comerciales establecidos? </h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> No es necesario asignar recursos adecuados.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> La asignación de recursos adecuados no es importante si los objetivos son específicos.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> La provisión de recursos adecuados ayuda a la empresa a desarrollar estrategias efectivas.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Cuáles son las características de los objetivos comerciales?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Son medibles, realistas y motivadores.
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Son sistemáticos, medibles y ajustables. 
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Son realistas, se ajustan a las necesidades del negocio y se revisan periódicamente.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Por qué es importante que los objetivos comerciales sean medibles?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Para poder evaluar el progreso y el éxito.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Para reflejar las prioridades y la visión de la empresa.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Para motivar a los empleados y alinearlos con la visión y los objetivos de la empresa.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Por qué es importante que los objetivos comerciales sean realistas? </h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Para reflejar las prioridades y la visión de la empresa.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Para motivar a los empleados y alinearlos con la visión y los objetivos de la empresa.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Para estar basado en el análisis de datos y en la comprensión de las capacidades de la empresa y del mercado en el que opera. 
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Cuál de los siguientes objetivos comerciales implica mejorar la rentabilidad de la empresa mediante la reducción de costos o el aumento de los ingresos? </h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> Incremento de las ventas 
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> Mejora de la rentabilidad
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> Crecimiento de la cuota de mercado
					</label>
				</section>
				<br>
				<section id="p11">
					<h3>12.-¿Qué objetivo comercial implica aumentar la participación de la empresa en el mercado en el que opera, ya sea en términos de ventas o de valor?</h3>
					<label>
						<input type="radio" value="1" name="p11" onclick="respuesta(11,this)"> Incremento de las ventas
					</label>
					<label>
						<input type="radio" value="2" name="p11" onclick="respuesta(11,this)"> Mejora de la rentabilidad
					</label>
					<label>
						<input type="radio" value="3" name="p11"onclick="respuesta(11,this)"> Crecimiento de la cuota de mercado
					</label>
				</section>
				<br>

				<section id="p12">
					<h3>13.-¿Qué objetivo comercial implica mejorar la percepción que los clientes y el público en general tienen de la marca?</h3>
					<label>
						<input type="radio" value="1" name="p12" onclick="respuesta(12,this)"> Incremento de las ventas
					</label>
					<label>
						<input type="radio" value="2" name="p12" onclick="respuesta(12,this)"> Mejora de la imagen de marca
					</label>
					<label>
						<input type="radio" value="3" name="p12"onclick="respuesta(12,this)"> Mejora de la rentabilidad
					</label>
				</section>
				<br>
				<section id="p13">
					<h3>14.-¿Qué objetivo comercial implica retener y fidelizar a los clientes existentes de la empresa?</h3>
					<label>
						<input type="radio" value="1" name="p13" onclick="respuesta(13,this)"> Incremento de las ventasg
					</label>
					<label>
						<input type="radio" value="2" name="p13" onclick="respuesta(13,this)"> Mejora de la rentabilidad
					</label>
					<label>
						<input type="radio" value="3" name="p13"onclick="respuesta(13,this)"> Fidelización de clientes
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz6u1.js') ?>"></script>	
<?= $this->endSection()?>