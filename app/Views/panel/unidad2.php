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
								Unidad 2		
							</h1>	
                            <p class="text-white">A continuación encontrarás el listado del temas de conforman la Unidad 2, no te preocupes si notas que son muchos temas, recuerda que este software está diseñado para que estudias los temas a tu ritmo y los consultes cada que los necesites</p>
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
								<h1 class="mb-10">Aplicación del resultado del marketing de los servicios turísticos.</h1>
								<p>PROPOSITO DE LA UNIDAD: Diseñara y aplicara estrategias de comercialización de servicios turísticos que permita comercializar frente a su mercado.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/seleccion.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u2tema1')?>">
									<h4>
                                    Selección del mercado para la segmentación. 
									</h4>
								</a>
								<p>
                                Aprenderas sobre los objetivos, proceso de segmentación y las variables.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/diseño_marketing.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u2tema2')?>">
									<h4>
                                    Diseño de la mezcla de marketing de servicios turisticos.
									</h4>
								</a>
								<p>
                                Aprenderas sobre el diseño de estrategias, tipos de estrategias en mercadotécnia y estrategias comerciales.
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/analisis_mercado.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u2tema3')?>">
									<h4>
										
                                    Análisis de las características de la mercadotecnia del producto/servicio.
									</h4>
								</a>
								<p>
                                Aprenderas sobre la intangíbilidad, inseprarabilidad, heterogeneidad y carácter perecedero.								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/niveles.jpg') ?>" alt="">
								</div>									
							</div>
							<div class="details">
								<a href="<?=route_to('u2tema4')?>">
									<h4>
                                    Desarrollo de los niveles del producto/servicio turistico.
									</h4>
								</a>
								<p>
                                Aprenderas sobre los niveles: principal, auxiliar, apoyo y aumentado.									
								</p>
							</div>
						</div>
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/presupuesto.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u2tema5')?>">
									<h4>
                                    Elaboración de presupuesto.
									</h4>
								</a>
								<p>
                                Aprenderas a realizar presupuestos, tipos de presupuestos y sobre la estructura del presupuesto.										
								</p>
							</div>
						</div>
						
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/precio.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u2tema6')?>">
									<h4>
                                    Aplicación mercadotécnica de precio.
									</h4>
								</a>
								<p>
                                Aprenderas todo lo relacionado al precio										
								</p>
							</div>
						</div>
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/plaza.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u2tema7')?>">
									<h4>
                                    Aplicación mercadotécnica de plaza.
									</h4>
								</a>
								<p>
                                Aprenderas todo lo relacionado a la plaza dentro de la mercadotecnia.										
								</p>
							</div>
						</div>
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/promocion.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u2tema8')?>">
									<h4>
                                    Aplicación mercadotécnica de promoción.
									</h4>
								</a>
								<p>
                                Aprenderas todo lo relacionado a la promoción de un producto.										
								</p>
							</div>
						</div>
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/producto.jpg') ?>" alt="">
								</div>								
							</div>
							<div class="details">
								<a href="<?=route_to('u2tema9')?>">
									<h4>
                                    Aplicación mercadotécnica de producto.
									</h4>
								</a>
								<p>
                                Aprenderas todo lo relacionado al producto.										
								</p>
							</div>
						</div>													
					</div>
				</div>	
			</section>
			
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>