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
								Unidad 1		
							</h1>	
                            <p class="text-white" >A continuación encontrarás el listado del temas de conforman la Unidad 1, no te preocupes si notas que son muchos temas, recuerda que este software está diseñado para que estudias los temas a tu ritmo y los consultes cada que los necesites</p>
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
								<h1 class="mb-10">Planeación del marketing para los servicios turísticos</h1>
								<p>PROPOSITO DE LA UNIDAD: Realizará la planeación de marketing a diferentes servicios turísticos, utilizando las técnicas y procedimientos a fin de comercializarlos.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/administracion.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u1tema1')?>">
									<h4>
										Identificación de la mercadotecnia turística
									</h4>
								</a>
								<p>
									Conocerás el origen, las características, los conceptos fundamentales, los componentes, la mezcla de mercadotécnica, las cuatro P y las empresas de servicios turísticos.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/planeacion-estrategica.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u1tema2')?>">
									<h4>
										Planeación del marketing
									</h4>
								</a>
								<p>
									Encontrarás la definición, el periodo de planeación, la estructura, el proceso y el objetivo.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/analisis.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u1tema3')?>">
									<h4>
										Análisis "DOFA","FODA"
									</h4>
								</a>
								<p>
									Se tratan temas como el prodecimiento, la finalidad, el análisis interno y el análisis externo.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/administracion.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u1tema4')?>">
									<h4>
										Administración de la información
									</h4>
								</a>
								<p>
									Los temas tratados son la finalidad y el procedimiento.										
								</p>
							</div>
						</div>
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/Posicionamiento-de-mercado.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u1tema5')?>">
									<h4>
										Diseño del concepto de posicionamiento
									</h4>
								</a>
								<p>
									Aprenderás sobre el uso de información DOFA, el procedimiento y los tipos de posicionamiento										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/objetivos.png') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u1tema6')?>">
									<h4>
										Fijación de objetivos
									</h4>
								</a>
								<p>
									Será tratada la finalidad, el procedimiento, las características y los tipos de objetivos.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/diseño.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u1tema7')?>">
									<h4>
										Diseño de las politícas comerciales
									</h4>
								</a>
								<p>
									Aprenderás sobre la finalidad, el procedimiento, las características y los tipos de políticas.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/proyeccion.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u1tema8')?>">
									<h4>
										Proyección de Aspectos de las empresas turísticas
									</h4>
								</a>
								<p>
                                    Como temas finales de la unidad tenemos la misión, visión y valores.
								</p>
							</div>
						</div>								
																			
					</div>
				</div>	
			</section>
			
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>