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
                            
							Aplicación mercadotécnia de producto.
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
								<img class="img-fluid" src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/mercadotecnia-de-producto.jpg') ?>" alt="">
							</div>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Intermediarios</div>
	                                <div class="jq-tab-title" data-tab="2">Programación</div>
	                                <div class="jq-tab-title" data-tab="3">Recursos</div>
									<div class="jq-tab-title" data-tab="4">Variables</div>
									<div class="jq-tab-title" data-tab="5">Intrumentos</div>
									<div class="jq-tab-title" data-tab="6">Formas</div>

	                            </div>
	                            <div class="jq-tab-content-wrapper" style="text-align: justify;">
	                                <div class="jq-tab-content active" data-tab="1">
                                    <center><b><h3>Intermediarios</h3></b></center><br><br>
									<En la aplicación de la mercadotecnia de producto, los intermediarios son aquellos que facilitan la distribución y venta del producto, haciendo que este llegue de manera efectiva al consumidor final. Estos intermediarios pueden ser mayoristas, minoristas, agentes de ventas, distribuidores y otros proveedores de servicios relacionados.
									<br><br>
									Uno de los principales beneficios de contar con intermediarios en la distribución de productos es que permiten a los fabricantes enfocarse en la producción y mejora del producto, mientras que los intermediarios se encargan de llevarlos al mercado de manera efectiva. Además, los intermediarios pueden proporcionar una mayor visibilidad del producto en los puntos de venta y aumentar su alcance a través de una red más amplia de distribución.
									<br><br>
									Sin embargo, es importante elegir los intermediarios adecuados para garantizar que el producto se presente y se venda de manera efectiva. Los intermediarios deben tener un conocimiento profundo del mercado y del público objetivo, así como un historial de éxito en la distribución de productos similares. También es importante establecer una buena comunicación y una relación sólida con los intermediarios, para asegurar que el producto se promueva adecuadamente y se mantenga disponible en el mercado.
									<br><br>
									La elección de los intermediarios también puede afectar el precio final del producto y su margen de ganancia. 
									</div>
	                                <div class="jq-tab-content" data-tab="2">
									<center><b><h3>Programación</h3></b></center><br><br>
									Promoción por correo electrónico <br><br>
									Promoción a través de noticias y prensa <br><br>
									Promoción por medios sociales <br><br>
									Promoción por SEO <br><br>
									Promoción por SMS <br><br>
									Promoción por anuncios en línea <br><br>

									</div>
	                                <div class="jq-tab-content" data-tab="3">
									<center><b><h3>Recursos</h3></b></center><br><br>
									Agencias de publicidad <br><br>
									Agencias de marketing digital <br><br>
									Servicios de promoción de anuncios en línea <br><br>
									Empresas de marketing de influencia <br><br>

									</div>
                                    <div class="jq-tab-content" data-tab="4">	
									<center><b><h3>Variables</h3></b></center><br><br>
	                                Campañas de anuncios en línea <br><br>
									Contenido de marketing de contenido <br><br>
									Campañas de patrocinio <br><br>
									Campañas de promoción y descuentos <br><br>
									Análisis de resultados de promoción <br><br>

																	
								</div>
									<div class="jq-tab-content" data-tab="5">	
									<center><b><h3>Intrumentos</h3></b></center><br><br>
									Presupuesto para promociones <br><br>
									Herramientas de promoción <br><br>
									Personal de marketing <br><br>
									Recursos creativos <br><br>
				
                                    </div>   
									<div class="jq-tab-content" data-tab="6">	
									<center><b><h3>Formas</h3></b></center> <br><br>
	                                Presupuesto <br><br>
									Tiempo de campaña <br><br>
									Frecuencia de entrega <br><br>
									Segmentos de público objetivo <br><br>

                                    </div>                                
	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
			
			<br><br><br><br><br>
			<center>
			<a href="<?=route_to('q9u2')?>" class="primary-btn text-uppercase">Iniciar Quiz</a>
			</center>
			<br><br><br><br><br>
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<?= $this->endSection()?>