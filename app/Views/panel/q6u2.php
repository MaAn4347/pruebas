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
							Aplicación de mercadotécnica de precio		
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
					<h3>1.-¿Qué permite la herramienta de análisis de precios?</h3>
					<label>
						<input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Monitorear y analizar los precios de los productos propios.
					</label>
					<label>
						<input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Comparar los precios de los productos propios con los de la competencia.
					</label>
					<label>
						<input type="radio" value="3" name="p0" onclick="respuesta(0,this)"> Ofrecer descuentos y ofertas especiales a los clientes.
					</label>
				</section>
				<br>
				<section id="p1">
					<h3>2.-¿Qué permite el software de análisis de precios?</h3>
					<label>
						<input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Monitorear y analizar los precios de los productos propios.
					</label>
					<label>
						<input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Comparar los precios de los productos propios con los de la competencia.
					</label>
					<label>
						<input type="radio" value="3" name="p1"onclick="respuesta(1,this)"> Ofrecer descuentos y ofertas especiales a los clientes.
					</label>
				</section>
				<br>
				<section id="p2">
					<h3>3.-¿Qué permiten las herramientas de promoción?</h3>
					<label>
						<input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Monitorear y analizar los precios de los productos propios.
					</label>
					<label>
						<input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Comparar los precios de los productos propios con los de la competencia.
					</label>
					<label>
						<input type="radio" value="3" name="p2"onclick="respuesta(2,this)"> Ofrecer descuentos y ofertas especiales a los clientes.
					</label>
				</section>
				<br>
				<section id="p3">
					<h3>4.-¿En qué se basa la fijación de precios basada en el mercado?</h3>
					<label>
						<input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> En el análisis de los precios de los competidores.
					</label>
					<label>
						<input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> En el análisis de la demanda de los productos.
					</label>
					<label>
						<input type="radio" value="3" name="p3"onclick="respuesta(3,this)"> En el análisis de los costes de los productos.
					</label>
				</section>
				<br>
				<section id="p4">
					<h3>5.-¿En qué se basa la fijación de precios basada en la demanda?</h3>
					<label>
						<input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> En el análisis de los precios de los competidores.
					</label>
					<label>
						<input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> En el análisis de la demanda de los productos.
					</label>
					<label>
						<input type="radio" value="3" name="p4"onclick="respuesta(4,this)"> En el análisis de los costes de los productos.
					</label>
				</section>
				<br>
				<section id="p5">
					<h3>6.-¿Quiénes son los intermediarios que se encargan de llevar los productos de los fabricantes a los minoristas?</h3>
					<label>
						<input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Distribuidores.
					</label>
					<label>
						<input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Mayoristas.
					</label>
					<label>
						<input type="radio" value="3" name="p5"onclick="respuesta(5,this)"> Minoristas.
					</label>
				</section>
				<br>
				<section id="p6">
					<h3>7.-¿Qué herramienta permite a los negocios comparar los precios de los productos de sus competidores?</h3>
					<label>
						<input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Planificación de precios
					</label>
					<label>
						<input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Gestión de precios
					</label>
					<label>
						<input type="radio" value="3" name="p6"onclick="respuesta(6,this)"> Análisis de precios
					</label>
				</section>
				<br>
				<section id="p7">
					<h3>8.-¿Qué herramienta permite a los negocios controlar y gestionar los precios de sus productos?</h3>
					<label>
						<input type="radio" value="1" name="p7" onclick="respuesta(7,this)">Planificación de precios
					</label>
					<label>
						<input type="radio" value="2" name="p7" onclick="respuesta(7,this)"> Gestión de precios
					</label>
					<label>
						<input type="radio" value="3" name="p7"onclick="respuesta(7,this)"> Administración de precios
					</label>
				</section>
				<br>
				<section id="p8">
					<h3>9.-¿Qué variable determina el precio de los productos?</h3>
					<label>
						<input type="radio" value="1" name="p8" onclick="respuesta(8,this)"> Costos
					</label>
					<label>
						<input type="radio" value="2" name="p8" onclick="respuesta(8,this)"> Demanda
					</label>
					<label>
						<input type="radio" value="3" name="p8"onclick="respuesta(8,this)"> Ambas
					</label>
				</section>
				<br>
				<section id="p9">
					<h3>10.-¿Qué herramienta permite a los negocios planificar y programar los precios de sus productos?</h3>
					<label>
						<input type="radio" value="1" name="p9" onclick="respuesta(9,this)"> Planificación de precios
					</label>
					<label>
						<input type="radio" value="2" name="p9" onclick="respuesta(9,this)"> Gestión de precios
					</label>
					<label>
						<input type="radio" value="3" name="p9"onclick="respuesta(9,this)"> Administración de precios 
					</label>
				</section>
				<br>
				<section id="p10">
					<h3>11.-¿Qué intermediario se encarga de llevar los productos de los fabricantes a los minoristas?</h3>
					<label>
						<input type="radio" value="1" name="p10" onclick="respuesta(10,this)"> Distribuidores 
					</label>
					<label>
						<input type="radio" value="2" name="p10" onclick="respuesta(10,this)"> Mayoristas
					</label>
					<label>
						<input type="radio" value="3" name="p10" onclick="respuesta(10,this)"> Minoristas
					</label>
				</section>
				<br>
				<section id="p11">
					<h3>12.-¿Qué bases de datos permiten a los negocios obtener información sobre los precios de los productos de sus competidores?</h3>
					<label>
						<input type="radio" value="1" name="p11" onclick="respuesta(11,this)"> Bases de datos de precios
					</label>
					<label>
						<input type="radio" value="2" name="p11" onclick="respuesta(11,this)"> Informes de mercado
					</label>
					<label>
						<input type="radio" value="3" name="p11"onclick="respuesta(11,this)"> Encuestas de precios
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
<script src="<?= base_url(RECURSOS_PANEL_JS.'/quiz/quiz6u2.js') ?>"></script>	
<?= $this->endSection()?>