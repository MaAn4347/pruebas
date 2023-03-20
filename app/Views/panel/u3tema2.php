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
								Manejo de métodos de investigación		
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
								<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/Manejo-de-métodos-de-investigación.jpg') ?>" alt="">
							</div>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Observación</div>
	                                <div class="jq-tab-title" data-tab="2">Experimental</div>
                                    <div class="jq-tab-title" data-tab="3">Encuestas</div>
	                                <div class="jq-tab-title" data-tab="4">Entrevistas</div>

	                            </div>
	                            <div class="jq-tab-content-wrapper" style="text-align: justify;">
	                                <div class="jq-tab-content active" data-tab="1">
                                        <center><b><h3>Observación</h3></b></center><br><br>
										
                                        <p>La observación puede ser realizada de manera <b>no participante</b>, en la cual el investigador no interactúa con los consumidores ni los interrumpe en sus actividades; o <b>participante</b>, en la que el investigador se involucra en las actividades de los consumidores para obtener una comprensión más profunda de su comportamiento.</p><br>
                                        <p>En la aplicación de la mercadotecnia a los servicios turísticos, la observación puede ser útil para:</p><br>
                                        <ul>
                                            <li> <b>Identificar las necesidades y preferencias de los consumidores:</b> al observar directamente a los consumidores en el entorno turístico, se puede obtener información valiosa sobre sus necesidades y preferencias en cuanto a productos, servicios y experiencias turísticas.</li><br>
                                            <li> <b>Evaluar la calidad de los productos y servicios turísticos:</b> la observación de los productos y servicios turísticos puede ayudar a evaluar su calidad y detectar problemas o áreas de mejora.</li><br>
                                            <li> <b>Analizar la competencia:</b> la observación de la competencia puede proporcionar información valiosa sobre sus estrategias de marketing, productos y servicios, y ayudar a identificar oportunidades para diferenciarse y mejorar la oferta de la empresa.</li><br>
                                            <li> <b>Identificar tendencias del mercado:</b> la observación del entorno turístico puede proporcionar información sobre las tendencias del mercado, incluyendo las preferencias de los consumidores, las innovaciones en productos y servicios, y los cambios en la demanda.</li><br>
                                        </ul>
									</div>
	                                <div class="jq-tab-content" data-tab="2">
                                        <center><b><h3>Experimental</h3></b></center><br><br>
										<p>Este método implica la manipulación de una o varias variables independientes para evaluar su efecto en una o varias variables dependientes.</p><br>
                                        <p>En la aplicación de la mercadotecnia a los servicios turísticos, el método experimental puede ser útil para:</p><br>
                                        <p><b>Evaluar la efectividad de una nueva estrategia de marketing:</b> al manipular una variable independiente, como el precio de un producto turístico, y evaluando su efecto en una variable dependiente, como la demanda de ese producto, se puede determinar la efectividad de una nueva estrategia de marketing.</p><br>
                                        <p><b>Medir la satisfacción del cliente:</b> al manipular una variable independiente, como la calidad de servicio, y evaluando su efecto en una variable dependiente, como la satisfacción del cliente, se puede determinar qué aspectos del servicio son más importantes para los consumidores y cómo mejorar la satisfacción del cliente.</p><br>
                                        <p><b>Evaluar la eficacia de los programas de fidelización de clientes:</b> al manipular una variable independiente, como la oferta de incentivos para los clientes que regresan, y evaluando su efecto en una variable dependiente, como la tasa de retención de clientes, se puede evaluar la eficacia de los programas de fidelización de clientes.</p><br>
									</div>
	                                <div class="jq-tab-content" data-tab="3">
										<center><b><h3>Encuestas</h3></b></center> <br><br>
										<p>Una <b>encuesta en aplicación mercadotécnica a servicios turísticos</b> es una herramienta de <b>investigación de mercado</b> que se utiliza para recopilar información de los consumidores acerca de los servicios turísticos que se ofrecen. Esta encuesta puede ser realizada en línea, por correo electrónico, por teléfono o en persona, y se utiliza para obtener información sobre las <b>preferencias y necesidades de los consumidores</b> en relación con los servicios turísticos, como hoteles, actividades turísticas, restaurantes, entre otros.</p><br>
                                        <p>La encuesta puede contener preguntas sobre la <b>calidad de los servicios ofrecidos</b>, el <b>precio</b>, la <b>satisfacción del cliente</b>, la <b>percepción de la marca y la imagen de la empresa</b>, así como también sobre las <b>preferencias de los consumidores</b> en cuanto a los servicios turísticos que se ofrecen.</p><br>
                                        <p>La información recopilada a través de la encuesta puede ser utilizada por la empresa para tomar <b>decisiones estratégicas</b> en cuanto a su oferta de servicios turísticos y para mejorar la <b>satisfacción del cliente</b>, lo que puede llevar a un <b>aumento en la lealtad y en las recomendaciones de los clientes</b> hacia la empresa.</p><br>
	                                </div>
	                                <div class="jq-tab-content" data-tab="4">
                                        <center><b><h3>Entrevistas</h3></b></center> <br><br>
                                        <p>Las <b>entrevistas en aplicación mercadotécnica a servicios turísticos</b> son una herramienta de <b>investigación de mercado</b> que se utiliza para obtener información más detallada de los consumidores acerca de los servicios turísticos que se ofrecen.</p><br>
                                        <p>En este caso, el investigador entrevista a los consumidores de manera personal para obtener información sobre sus <b>experiencias</b>, <b>opiniones</b>, <b>preferencias</b> y <b>necesidades</b> en cuanto a los servicios turísticos. Estas entrevistas pueden ser realizadas por teléfono, en línea o en persona.</p><br>
                                        <p>La información obtenida a través de las entrevistas puede ser muy valiosa para la empresa, ya que le permite obtener una visión más detallada de las necesidades y deseos de los consumidores en relación con los servicios turísticos, y también para identificar áreas de oportunidad en su oferta de servicios.</p><br>
                                        <p>Las entrevistas pueden ser estructuradas, con preguntas específicas sobre temas particulares, o no estructuradas, permitiendo que el entrevistado exprese sus opiniones e ideas libremente. Dependiendo del enfoque, las entrevistas pueden ser cualitativas o cuantitativas, y pueden requerir diferentes niveles de capacitación y habilidades para llevar a cabo.</p><br>

	                                </div>
	                                                            
	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
			
			<br><br><br><br><br>
			<center>
			<a href="<?=route_to('q2u3')?>" class="primary-btn text-uppercase">Iniciar Quiz</a>
			</center>
			<br><br><br><br><br>
			
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>