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
								Interpretación de resultados		
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
								<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/Interpretación-de-resultados.jpg') ?>" alt="">
							</div>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Cualitativos</div>
	                                <div class="jq-tab-title" data-tab="2">Cuantitativos</div>

	                            </div>
	                            <div class="jq-tab-content-wrapper" style="text-align: justify;">
	                                <div class="jq-tab-content active" data-tab="1">
                                        <center><b><h3>Cualitativos</h3></b></center><br><br>
										<p>La <b>interpretación de resultados cualitativos</b> implica analizar la información obtenida a través de herramientas de investigación de mercado <b>cualitativas</b>, como las entrevistas y los grupos focales.</p><br>
                                        <p>En primer lugar, se deben revisar todas las respuestas de los participantes y <b>agruparlas por temas o patrones comunes</b>. Luego, se debe analizar cada grupo de respuestas para obtener una comprensión más profunda de las <b>actitudes, percepciones y opiniones de los consumidores</b> en relación con los servicios turísticos. Este análisis puede proporcionar información valiosa sobre las <b>fortalezas y debilidades</b> de la empresa en relación con su oferta de servicios turísticos.</p><br>
                                        <p>Es importante tener en cuenta que la interpretación de resultados cualitativos puede ser <b>subjetiva</b> y depender de la habilidad y experiencia del investigador. Por esta razón, es recomendable que varios investigadores analicen los datos y discutan los resultados para llegar a una conclusión más objetiva.</p><br>
									</div>
										<div class="jq-tab-content" data-tab="2">
                                        <center><b><h3>Cuantitativos</h3></b></center><br><br>
										<p>La interpretación de resultados cuantitativos  implica el análisis de datos numéricos obtenidos a través de herramientas de investigación de mercado cuantitativas, como encuestas y cuestionarios.</p><br>
                                        <p>Es importante presentar los resultados de manera clara y concisa, utilizando <b>gráficos y tablas para resumir los hallazgos más importantes</b>. También es importante interpretar los resultados en términos de lo que significan para la empresa en relación con su oferta de servicios turísticos y su competitividad en el mercado.</p><br>
                                        <p>Es posible que se necesite realizar un análisis comparativo con datos de la competencia o con datos previos para identificar <b>tendencias a largo plazo y oportunidades de mejora</b>.</p><br>

									</div>
	                                                            
	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
			
			<br><br><br><br><br>
			<center>
			<a href="<?=route_to('q3u3')?>" class="primary-btn text-uppercase">Iniciar Quiz</a>
			</center>
			<br><br><br><br><br>
			
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>