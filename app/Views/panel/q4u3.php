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
								Planes alternativos de acción		
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
					<h3>1.-¿Qué son las juntas turísticas?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Un conjunto de empresas y organizaciones que trabajan en diferentes sectores.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Un grupo de personas que se reúnen para discutir temas de interés general.
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Un conjunto de empresas y organizaciones relacionadas con la industria turística que trabajan juntas para promover y mejorar el turismo en una zona determinada.
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Cuáles son algunos de los objetivos de las juntas turísticas?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> El desarrollo de planes de negocios.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> La promoción de actividades deportivas.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> El desarrollo de planes de marketing, la creación de programas de promoción turística, la organización de eventos y actividades turísticas, el desarrollo de infraestructuras turísticas y la colaboración con el sector público y otros grupos de interés.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Por qué puede ser beneficiosa la participación en juntas turísticas para las empresas turísticas?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Les permite trabajar en solitario y sin colaboración con otras empresas.
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Les permite trabajar en colaboración con otros miembros del sector, compartir conocimientos y recursos, y aumentar su visibilidad y presencia en el mercado turístico.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)">Les permite reducir la visibilidad y presencia en el mercado turístico. 
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿Qué objetivo tienen las reuniones entre diferentes empresas turísticas?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Competir entre ellas para ganar clientes
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Intercambiar información y tomar decisiones para mejorar sus servicios
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> Crear barreras para la entrada de nuevos competidores
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿Qué aspectos puede incluir la aplicación de la mercadotecnia en la industria turística?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Solo la investigación de mercado y el desarrollo de planes de marketing
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> La implementación de campañas publicitarias y el uso de tecnología para mejorar la experiencia del cliente
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> Solo la creación de estrategias de precios
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Qué objetivo tienen las reuniones entre diferentes departamentos en una empresa turística?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Compartir recursos y establecer planes para mejorar sus servicios
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Discutir temas personales entre los empleados
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Competir entre departamentos para ver quién es el mejor
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Por qué es importante que los departamentos de una empresa turística trabajen coordinadamente?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)">Para ocultar información y no compartir recursos
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Para tener una ventaja sobre los competidores y monopolizar el mercado
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Para ofrecer una experiencia satisfactoria al cliente y lograr una ventaja competitiva en el mercado
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz4u3.js') ?>"></script>	
<?= $this->endSection()?>