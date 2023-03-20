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
								Plan de investigación		
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
								<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/Plan-de-investigación.jpg') ?>" alt="">
							</div>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Control</div>
	                                <div class="jq-tab-title" data-tab="2">Evaluación</div>

	                            </div>
	                            <div class="jq-tab-content-wrapper" style="text-align: justify;">
	                                <div class="jq-tab-content active" data-tab="1">
                                        <center><b><h3>Control</h3></b></center><br><br>
										<p>Se refiere al proceso de <b>monitorear</b> y <b>evaluar</b> el <b>desempeño</b> de las actividades de mercadotecnia y su <b>impacto</b> en el <b>mercado turístico</b>.</p>
                                        <p>El objetivo del control es asegurarse de que las <b>estrategias</b> de mercadotecnia sean <b>efectivas</b> y estén generando los resultados deseados en términos de atraer y <b>retener clientes</b>, <b>aumentar</b> la demanda de servicios turísticos y <b>maximizar</b> la <b>rentabilidad</b>.</p>
                                        <p>El control en la aplicación de la mercadotecnia a servicios turísticos implica la <b>medición</b> y <b>análisis</b> de diversos indicadores clave de desempeño, como el <b>número de clientes</b>, la <b>satisfacción del cliente</b>, la <b>tasa de ocupación</b>, la <b>tasa de cancelación</b>, los <b>ingresos generados</b>, los <b>costos de marketing</b> y los <b>retornos de inversión</b>.</p>
	                                </div>
	                                <div class="jq-tab-content" data-tab="2">
                                        <center><b><h3>Evaluación</h3></b></center><br><br>
										<p>El objetivo de la evaluación es obtener información sobre el <b>desempeño de las actividades de marketing</b>, para determinar si se están logrando los resultados esperados, y en caso contrario, identificar las áreas que necesitan mejoras. La evaluación también permite a los gerentes y ejecutivos de las empresas de servicios turísticos tomar decisiones informadas sobre <b>cómo ajustar y mejorar sus estrategias y tácticas de marketing</b> para maximizar el impacto y la eficacia de sus esfuerzos de marketing.</p>
                                        <p>Algunas de las <b>métricas clave</b> que se utilizan para evaluar el desempeño de las actividades de marketing en el mercado turístico incluyen la <b>tasa de ocupación, el índice de satisfacción del cliente, el número de clientes, la tasa de cancelación, los ingresos generados, los costos de marketing, los retornos de inversión</b>, entre otros.</p>
									</div>
	                                
	                                                              
	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
			
			<br><br><br><br><br>
			<center>
			<a href="<?=route_to('q1u3')?>" class="primary-btn text-uppercase">Iniciar Quiz</a>
			</center>
			<br><br><br><br><br>
			
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>