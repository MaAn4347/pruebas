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
								Definición y ajuste de proyecto
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html"> Popular Courses</a></p>
						</div>	
					</div>
				</div>
			</section>
<?= $this->endSection('banner')?>

<?= $this->section('contenido')?>	
<section class="course-details-area pt-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 left-contents">
							<div class="main-image">
								<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/Definición-y-ajuste-de-proyecto.jpg') ?>" alt="">
							</div>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Objetivo</div>
	                                <div class="jq-tab-title" data-tab="2">Plazo</div>
                                    <div class="jq-tab-title" data-tab="3">Modificación de metas y objetivos</div>
                                    

	                            </div>
	                            <div class="jq-tab-content-wrapper" style="text-align: justify;">
	                                <div class="jq-tab-content active" data-tab="1">
                                        <center><b><h3>Objetivo</h3></b></center>
										<ul>
                                            <li>Escasa calidad de los servicios turísticos</li>
                                            <li>Falta de innovación en la oferta de servicios</li>
                                            <li>Deficiencias en el diseño y la entrega de paquetes turísticos</li>
                                            <li>Baja satisfacción de los clientes</li>
                                            <li>Escasez de personal capacitado</li>
                                        </ul>
</div>
	                                <div class="jq-tab-content" data-tab="2">
                                        <center><b><h3>Plazo</h3></b></center><br>
										<ul>
                                            <li>Uso de nuevas tecnologías para mejorar la calidad de los servicios turísticos</li>
                                            <li>Oferta de nuevos paquetes turísticos</li>
                                            <li>Creación de experiencias únicas para los turistas</li>
                                            <li>Aumento de la demanda de servicios turísticos</li>
                                        </ul>
                                    </div>
	                                <div class="jq-tab-content" data-tab="3">
										<center><b><h3>Modificación de metas y objetivos</h3></b></center> <br>
										<ul>
                                            <li>Marca sólida y reconocida en el mercado turístico</li>
                                            <li>Recursos humanos calificados</li>
                                            <li>Buenas relaciones con proveedores y colaboradores</li>
                                            <li>Servicios turísticos a precios competitivos</li>
                                            <li>Buena ubicación</li>
                                        </ul>
                                    </div>
	                                
                                   
	                                                            
	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
			
			<br><br><br><br><br>
			<center>
			<a href="<?=route_to('q7u3')?>" class="primary-btn text-uppercase">Iniciar Quiz</a>
			</center>
			<br><br><br><br><br>
			
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>