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
								Administración de la información		
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
								<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/Administración-de la-información.jpg') ?>" alt="">
							</div>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Finalidad</div>
	                                <div class="jq-tab-title" data-tab="2">Procedimiento</div>

	                            </div>
	                            <div class="jq-tab-content-wrapper" style="text-align: justify;">
	                                <div class="jq-tab-content active" data-tab="1">
                                        <center><b><h3>Finalidad de la administración de la información</h3></b></center><br><br>
										La finalidad de la administración de información es garantizar que la información sea gestionada de manera eficiente, efectiva y segura en toda la organización. Esto implica recopilar, procesar, almacenar y distribuir información relevante y confiable para apoyar la toma de decisiones y el logro de los objetivos de la empresa. <br><br>

La administración de información también busca garantizar la calidad y la integridad de la información, evitando errores y duplicaciones, y asegurando que los datos estén actualizados y sean precisos. Además, la administración de información tiene como objetivo asegurar la accesibilidad y la disponibilidad de la información cuando se necesita, garantizando que los usuarios puedan acceder a la información de manera oportuna y segura. <br><br>

Otro objetivo clave de la administración de información es garantizar la seguridad y la privacidad de la información. La información es uno de los activos más valiosos de una empresa y debe ser protegida contra el acceso no autorizado y los riesgos de seguridad cibernética. La administración de información busca garantizar la confidencialidad, la integridad y la disponibilidad de la información, lo que significa que solo se comparte con las personas autorizadas, que no se altera de manera no autorizada y que está disponible cuando se necesita. <br><br>

En resumen, la finalidad de la administración de información es garantizar que la información sea gestionada de manera eficiente, efectiva y segura en toda la organización, lo que permite a las empresas tomar decisiones informadas y lograr sus objetivos de negocio de manera efectiva y eficiente. <br><br>
	                                </div>
	                                <div class="jq-tab-content" data-tab="2">
                                        <center><b><h3>Procedimiento de la administración de la información</h3></b></center><br><br>
										El procedimiento de la administración de información puede variar dependiendo de la empresa, pero en general, se pueden seguir los siguientes pasos: <br><br>

<b>Identificación de las necesidades de información</b> En esta etapa se identifican los datos y la información que se necesitan para la toma de decisiones y el cumplimiento de los objetivos de la empresa. Esto puede incluir información sobre el mercado, la competencia, los clientes, los proveedores, el rendimiento financiero y otros aspectos relevantes. <br><br>

<b>Recopilación de datos</b> Una vez que se han identificado las necesidades de información, se procede a recopilar los datos necesarios. Esto puede incluir la recopilación de datos internos de la empresa, como registros financieros y de ventas, así como la recopilación de datos externos, como información de la industria y datos de mercado. <br><br>

<b>Procesamiento de datos</b> En esta etapa, se procesan los datos para convertirlos en información relevante y útil para la empresa. Esto puede implicar el análisis de datos, la interpretación de resultados y la creación de informes. <br><br>

<b>Almacenamiento de datos</b> Los datos procesados se almacenan en sistemas de gestión de información para garantizar su acceso y seguridad. Esto puede incluir bases de datos, sistemas de gestión de archivos y otros sistemas de información. <br><br>

<b>Distribución de información</b> La información relevante se distribuye a los usuarios que la necesitan para tomar decisiones y cumplir con los objetivos de la empresa. Esto puede implicar la creación de informes y la presentación de información en reuniones y presentaciones. <br><br>

<b>Mantenimiento y actualización de la información</b> La información se mantiene actualizada y precisa para garantizar su relevancia y utilidad. Esto puede implicar la revisión regular de datos y la actualización de sistemas de gestión de información. <br><br>

<b>Monitoreo y evaluación</b> El proceso de administración de información se monitorea y evalúa regularmente para garantizar su eficacia y eficiencia. Esto puede implicar la realización de auditorías de información y la implementación de mejoras en los sistemas de gestión de información. <br><br>

En resumen, el procedimiento de administración de información implica la identificación de las necesidades de información, la recopilación y procesamiento de datos, el almacenamiento y distribución de información, el mantenimiento y actualización de la información, y el monitoreo y evaluación del proceso en general <br><br>

	                                </div>                              
	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
			
			<br><br><br><br><br>
			<center>
			<a href="<?=route_to('q4u1')?>" class="primary-btn text-uppercase">Iniciar Quiz</a>
			<a href="<?=route_to('j4u1')?>" class="primary-btn text-uppercase">Jugar al ahorcado</a>
			</center>
			<br><br><br><br><br>
			
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>