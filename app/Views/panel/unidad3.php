<?= $this->extend('plantilla/panel_base') ?>
<?= $this->section('css')?>
<?= $this->endSection()?>


<?= $this->section('banner')?>
<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Unidad 3		
							</h1>	
                            <p class="text-white">A continuación encontrarás el listado del temas de conforman la Unidad 3, no te preocupes si notas que son muchos temas, recuerda que este software está diseñado para que estudias los temas a tu ritmo y los consultes cada que los necesites</p>
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html"> Popular Courses</a></p>
						</div>	
					</div>
				</div>
			</section>
<?= $this->endSection('banner')?>

<?= $this->section('contenido')?>
<section class="popular-courses-area section-gap courses-page">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Evaluación mercadológica</h1>
								<p>PROPOSITO DE LA UNIDAD: Realiza la evaluación mercadológicaa través de los datos cuantitativos y cualitativos obtenidos en el proceso a fin de medir su efectividad.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/plan.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u3tema1')?>">
									<h4>
										Plan de investigación.
									</h4>
								</a>
								<p>
								    Encontrarás la definición de control y evaluación.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/investigacion.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u3tema2')?>">
									<h4>
										Manejo de métodos de investigación
									</h4>
								</a>
								<p>
									Encontraras información sobre la observación, experimental, encuentas y entrevistas.									
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/resultados.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u3tema3')?>">
									<h4>
										Interpretación de resultados
									</h4>
								</a>
								<p>
									Se tratan temas sobre los resultados cualitativos y cuantitativos.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/planes.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u3tema4')?>">
									<h4>
										Planes Alternativos de acción
									</h4>
								</a>
								<p>
									Conocerás sobre las juntas de asociaciones, juntas departamentales, planes de contigencia y la toma de decisiones.										
								</p>
							</div>
						</div>
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/estrategias.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u3tema5')?>">
									<h4>
										Estrategías de mercadotecnia
									</h4>
								</a>
								<p>
									Aprenderas sobre prespectiva, enfoques innovadores, enfoques futuristas y justificación.							
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/correctivo.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u3tema6')?>">
									<h4>
										Elementos correctivos
									</h4>
								</a>
								<p>
									Los temas a tratar son las debilidades, oportunidades, fuerzas y amenazas.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/definicion.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u3tema7')?>">
									<h4>
										Definición y ajustes proyecto
									</h4>
								</a>
								<p>
									deficiones de objetivo, plazo y modificación de metas y objetivos.										
								</p>
							</div>
						</div>	
													
																			
					</div>
				</div>	
			</section>
			
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>