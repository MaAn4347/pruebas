<?= $this->extend('plantilla/panel_base') ?>
<?= $this->section('css')?>
<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/estilo.css') ?>">
<?= $this->endSection()?>


<?= $this->section('banner')?>
<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							Proyección de Aspectos de las empresas turísticas		
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html"> Popular Courses</a></p>
						</div>	
					</div>
				</div>
			</section>
<?= $this->endSection('banner')?>

<?= $this->section('contenido')?>	

			
<div class="container2">
				<section id="p0">
					<h3>1.-¿Cuál es la misión de las empresas turísticas?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Maximizar sus ganancias
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Proporcionar productos y servicios turísticos de alta calidad que satisfagan las necesidades y expectativas de los turistas, mientras se promueve el desarrollo sostenible del turismo en la región donde operan.
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Expandirse globalmente sin importar el impacto en el medio ambiente
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Por qué las empresas turísticas deben ser responsables y comprometidas con la sostenibilidad del turismo?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Para maximizar sus ganancias
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Para minimizar el impacto negativo del turismo en el medio ambiente y en la comunidad local
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Para obtener beneficios fiscales
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué es la visión de las empresas turísticas?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> La descripción de lo que la empresa quiere ser y a dónde quiere llegar a corto plazo.
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> La descripción de los productos y servicios turísticos que la empresa ofrece.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> La imagen a futuro que la empresa desea lograr a largo plazo.
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué aspectos se enfoca la visión de las empresas turísticas?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> El crecimiento y desarrollo sostenible de la empresa, la mejora continua de la calidad de sus productos y servicios, la fidelización de los clientes y el fortalecimiento de su posición en el mercado.
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> La reducción de costos y la maximización de beneficios.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> La satisfacción de los empleados y la responsabilidad social.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Cuál es un ejemplo de visión de una empresa turística? </h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Ser la empresa líder en la producción de alimentos orgánicos en la región, ofreciendo experiencias únicas y personalizadas a nuestros clientes.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Convertirnos en la cadena de tiendas más grande en la región, ofreciendo servicios de alta calidad en nuestras instalaciones.
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Ser la agencia de viajes más confiable y reconocida por nuestros clientes, ofreciendo una amplia gama de productos y servicios turísticos.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Por qué es importante que la visión de las empresas turísticas se enfoque en el crecimiento sostenible? </h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Porque el crecimiento no sostenible puede generar problemas económicos a largo plazo.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Porque el crecimiento sostenible garantiza la protección del medio ambiente y la comunidad local.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Porque el crecimiento sostenible es más rentable que el crecimiento no sostenible.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué son los valores de las empresas turísticas? </h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Los principios éticos y morales que guían el comportamiento y actuación de la empresa.
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> La descripción de lo que la empresa quiere ser y a dónde quiere llegar a largo plazo.
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Los productos y servicios turísticos que ofrece la empresa.
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué valor de las empresas turísticas se enfoca en minimizar el impacto negativo del turismo en el medio ambiente?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)"> Honestidad.
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Responsabilidad social. 
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Compromiso con la sostenibilidad.
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Cuál es uno de los valores de las empresas turísticas que se enfoca en ofrecer productos y servicios turísticos de alta calidad que satisfagan las necesidades y expectativas de sus clientes?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Honestidad.
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Responsabilidad social.
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Calidad.
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué valor de las empresas turísticas se enfoca en estar a la vanguardia de las tendencias y cambios en el mercado turístico?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Innovación.
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Compromiso con la sostenibilidad.
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Excelencia en el servicio al cliente.
					</label>
				</section>
				
				<br><br>
				<div class="text-center"> 
				<button onclick="history.go(-1);" class="primary-btn text-uppercase">Regresar</button>

<button onclick="corregir()" class="primary-btn text-uppercase">Enviar</button>
<button onclick="reiniciar()" class="primary-btn text-uppercase">Reiniciar</button>
				</div>
				<br><br>
				<div>
					<h2></h2>
					<h2 id="resultado"></h2>
				</div>
				<div id="incorrectas">

				</div>
			</div>
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz8u1.js') ?>"></script>	
<?= $this->endSection()?>