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
                            Aplicación mercadotécnia de precio.	
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
								<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/mercadotecnia-precio.png') ?>" alt="">
							</div>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Instrumentos</div>
	                                <div class="jq-tab-title" data-tab="2">Formas</div>
	                                <div class="jq-tab-title" data-tab="3">Intermediarios</div>
									<div class="jq-tab-title" data-tab="4">Programación</div>
									<div class="jq-tab-title" data-tab="5">Recursos</div>
									<div class="jq-tab-title" data-tab="6">Variables</div>

	                            </div>
	                            <div class="jq-tab-content-wrapper" style="text-align: justify;">
	                                <div class="jq-tab-content active" data-tab="1">
                                    <center><b><h3>Instrumentos</h3></b></center> <br><br>
									
									<b>Análisis de precios:</b> Esta herramienta permite a los negocios comparar los precios de los productos de sus competidores. <br><br>
									<b>Software de análisis de precios:</b> Este software permite a los negocios monitorear y analizar los precios de sus productos y los de sus competidores. <br><br>
									<b>Herramientas de promoción: </b>Estas herramientas permiten a los negocios ofrecer descuentos y ofertas especiales a los clientes. <br><br>

									</div>
	                                <div class="jq-tab-content" data-tab="2">
									<center><b><h3>Formas</h3></b></center><br><br>
									<b>Fijación de precios basada en el mercado:</b> Esta estrategia se basa en el análisis de los precios de los competidores para determinar el mejor precio para los productos. <br><br>
									<b>Fijación de precios basada en la demanda:</b> Esta estrategia se basa en el análisis de la demanda de los productos para determinar el mejor precio. <br><br>
									<b>Fijación de precios basada en costes:</b> Esta estrategia se basa en el análisis de los costes de los productos para determinar el mejor precio. <br><br>

									</div>
	                                <div class="jq-tab-content" data-tab="3">
									<center><b><h3>Intermediarios</h3></b></center> <br><br>
									<b>Distribuidores:</b> Estos intermediarios se encargan de llevar los productos de los fabricantes a los minoristas. <br><br>
									<b>Mayoristas:</b> Estos intermediarios se encargan de llevar los productos de los fabricantes a los distribuidores. <br><br>
									<b>Minoristas:</b> Estos intermediarios se encargan de llevar los productos de los fabricantes y distribuidores al público. <br><br>

									</div>
                                    <div class="jq-tab-content" data-tab="4">	
									<center><b><h3>Programación</h3></b></center> <br><br>
	                                <b>Planificación de precios:</b> Esta herramienta permite a los negocios planificar y programar los precios de sus productos. <br><br>
									<b>Gestión de precios:</b> Esta herramienta permite a los negocios controlar y gestionar los precios de sus productos. <br><br>
									<b>Administración de precios:</b> Esta herramienta permite a los negocios administrar y administrar los precios de sus productos. <br><br>

																	
								</div>
									<div class="jq-tab-content" data-tab="5">	
									<center><b><h3>Recursos</h3></b></center> <br><br>
									<b>Bases de datos de precios:</b>  Estas bases de datos permiten a los negocios obtener información sobre los precios de los productos de sus competidores. <br><br>									<b>Informes de mercado: </b> Estos informes permiten a los negocios obtener información sobre los precios y tendencias del mercado.
									<b>Encuestas de precios: </b> Estas encuestas permiten a los negocios obtener información sobre la percepción de los precios de sus productos. <br><br>
														
                                    </div>   
									<div class="jq-tab-content" data-tab="6">	
									<center><b><h3>Variables</h3></b></center><br><br>
	                                <b>Costos:</b> Esta variable determina el precio de los productos. <br><br>
									<b>Demanda:</b> Esta variable determina el precio de los productos. <br><br>
									<b>Competencia:</b> Esta variable determina el precio de los productos. <br><br>
									<b>Calidad:</b> Esta variable determina el precio de los productos. <br><br>
	                      	
                                    </div>                                 
	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
			
			<br><br><br><br><br>
			<center>
			<a href="<?=route_to('q6u2')?>" class="primary-btn text-uppercase">Iniciar Quiz</a>
			</center>
			<br><br><br><br><br>
			
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>