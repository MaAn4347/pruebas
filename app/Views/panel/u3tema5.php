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
								Estrategias de mercadotecnia	
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
								<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/Estrategias-de-mercadotecnia.jpg') ?>" alt="">
							</div>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Prospectiva </div>
	                                <div class="jq-tab-title" data-tab="2">Enfoques innovadores</div>
                                    <div class="jq-tab-title" data-tab="3">Enfoques futuristas</div>
	                                <div class="jq-tab-title" data-tab="4">Justificación</div>

	                            </div>
	                            <div class="jq-tab-content-wrapper" style="text-align: justify;">
	                                <div class="jq-tab-content active" data-tab="1">
                                        <center><b><h3>Prospectiva</h3></b></center>
										<p>La <b>prospectiva en la aplicación de marketing en servicios turísticos</b> implica la identificación y análisis de las tendencias y cambios que pueden afectar el mercado turístico en el futuro. Esto permite a las empresas anticipar y prepararse para los cambios en el entorno, identificar oportunidades y desarrollar estrategias para mantenerse competitivos y adaptarse a los nuevos desafíos.</p>
                                        <p>La prospectiva en el marketing turístico puede incluir el análisis de factores como los cambios demográficos, las nuevas tecnologías, las tendencias de viaje, la competencia y los cambios en las políticas gubernamentales y regulaciones. Esto puede implicar la realización de estudios de mercado, la recopilación de información y datos, y la colaboración con expertos en el campo.</p>
                                        <p>La prospectiva en el marketing turístico es un proceso continuo y dinámico, que requiere una evaluación constante del entorno y una adaptación constante a los cambios y tendencias emergentes. Al adoptar un enfoque prospectivo, las empresas turísticas pueden estar mejor preparadas para enfrentar los desafíos y aprovechar las oportunidades que surjan en el futuro.</p>
</div>
										<div class="jq-tab-content" data-tab="2">
                                        <center><b><h3>Enfoques innovadores</h3></b></center><br>
										<p>Los profesionales de turismo deben abrazar los cambios y adaptarse a las nuevas tendencias. Esto significa aprovechar las nuevas tecnologías para ofrecer servicios más útiles a los clientes, como reservas en línea y notificaciones push. Esto también significa adoptar nuevos enfoques de mercadotecnia, como el marketing de contenido para generar conciencia de marca y la publicidad digital para llegar a una audiencia más amplia</p>
                                    </div>
	                                <div class="jq-tab-content" data-tab="3">
										<center><b><h3>Enfoques futuristas</h3></b></center> <br>
										<p>El éxito a largo plazo de los servicios turísticos requiere una planificación y un análisis a largo plazo. Esto significa considerar no solo la situación actual, sino también los cambios en el entorno de mercado que se pueden esperar. Esto requiere una planificación cuidadosa, el uso de información recopilada del mercado y una estrategia de mercadotecnia a largo plazo para asegurar el éxito de los servicios turísticos.</p>
                                    </div>
	                                <div class="jq-tab-content" data-tab="4">
                                        <center><b><h3>Justificación</h3></b></center> <br>
                                        <p>Los servicios turísticos tienen un alto potencial de crecimiento, lo que significa que hay un gran mercado para los profesionales del turismo que estén dispuestos a aprovechar el potencial. Esto significa que la inversión en estrategias de mercadotecnia para los servicios turísticos puede ser muy rentable. Además, el uso de tácticas de mercadotecnia innovadoras y futuristas puede ayudar a los profesionales del turismo a asegurar una ventaja competitiva sostenible.</p>
	                                </div>
                                   
	                                                            
	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
			
			<br><br><br><br><br>
			<center>
			<a href="<?=route_to('q5u3')?>" class="primary-btn text-uppercase">Iniciar Quiz</a>
			</center>
			<br><br><br><br><br>
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>