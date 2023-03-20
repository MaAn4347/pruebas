<?= $this->extend('plantilla/panel_base') ?>
<?= $this->section('css')?>

<?= $this->endSection()?>


<?= $this->section('banner')?>
<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
							Juntos haremos que Mercadotecnia sea más fácil de aprender			
							</h1>
							<p class="pt-10 pb-10">
							Está comprobado científicamente que el uso de software especializado ayuda a los estudiantes a comprender los temas más facilmente.
							</p>
						</div>										
					</div>
				</div>					
			</section>
<?= $this->endSection('banner')?>

<?= $this->section('contenido')?>
<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Unidad 1 </h4>
								</div>
								<div class="desc-wrap">
									
								<h4>Planeación del marketing para los servicios turísticos</h4>
									<p>
										En esta unidad aprenderás como realizar la planeación de marketing a diferentes servicios turísticos, utilizando las técnicas y procedimientos a fin de comercializarlos.
									</p>
									<a href="<?=route_to("unidad1")?>">Iniciar unidad</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Unidad 2</h4>
								</div>
								<div class="desc-wrap">
									<h4>Aplicación del resultado de marketing de los servicios turísticos</h4>
									<p>
										En esta unidad aprenderás a diseñar y aplicar estrategias de comercialización de servicios turísticosque permitan comercializar frente a su mercado.
									</p>
									<a href="<?=route_to("unidad2")?>">Iniciar unidad</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Unidad 3</h4>
								</div>
								<div class="desc-wrap">
									<h4>Evaluación mercadológica</h4>
									<p>
										En esta unidad aprenderás a realizar la evaluación mercadológica a tráves de los datos cuantitativos y cualitativos obtenidos en el proceso a fin de medir su efectividad.
									</p>
									<a href="<?=route_to("unidad3")?>">Iniciar unidad</a>									
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">¿Realmente aprendiste lo necesario?</h1>
								<p>Si sientes que ya sabes lo necesario de la materia, puedes intentar realizar algunos de los test finales de cada unidad para comprobarlo, si fallas no te preocupes, te diremos que temas debes de estudiar :)</p>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/mercadotecnia.jpg') ?>" alt="">
								</div>
								<div class="detials col-12 col-md-6">
								<p>Examen final</p>
									<a href="#"><h4>Unidad 1<br>Planeación del marketing para los servicios turísticos</h4></a>
									<p>
										Los temas tratados en el quiz son: <br>
										*Mercadotecnia turística <br>
										*Planeación del marketing <br>
										*Análisis FODA <br>
										*Diseño de políticas comerciales <br>
										*Proyección de aspectos de las empresas turísticas <br>
									</p>
									
											
								 
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/productos.jpg') ?>" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>Examen final</p>
									<a href="#"><h4>Unidad 2<br>Aplicación del resultado de marketing de los servicios turísticos</h4></a>
								
									<p>
										Los temas tratados en el quiz son: <br>
										*Segmentación del mercado <br>
										*Mezcla de marketing de servicios turísticos <br>
										*Características de mercadotecnia producto/servicio <br>
										*Elaboración de presupuestos <br>
										*Mercadotecnia de Precio, Plaza, Promoción y Producto <br>
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/evaluacion.jpg') ?>" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>Examen final</p>
									<a href="#"><h4>Unidad 3<br>Evaluación mercadológica</h4></a>
									<p>
										Los temas tratados en el quiz son: <br>
										*Métodos de investigación <br>
										*Interpretación de resultados<br>
										*Planes alternativos de acción<br>
										*Estrategias de mercadotecnia<br>
										*Elementos correctivos<br>
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/final.jpg') ?>" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>Reto Final</p>
									<a href="#"><h4>Examen final de la materia</h4></a>
									<p>
										Este quiz contiene todos los temas vistos en el software, toma este quiz si ya terminaste de estudiar todas las unidades y sientes que tienes conocimiento de todo.
									</p>
								</div>
							</div>
																											
						</div>
					</div>
				</div>	
			</section>
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
	
<?= $this->endSection()?>