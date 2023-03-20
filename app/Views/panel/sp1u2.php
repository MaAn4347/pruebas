<?= $this->extend('plantilla/panel_base') ?>
<?= $this->section('css')?>
<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/sopas/estilo.css') ?>">
<?= $this->endSection()?>


<?= $this->section('banner')?>
<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Identificación de la mercadotecnia turística		
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html"> Popular Courses</a></p>
						</div>	
					</div>
				</div>
			</section>
<?= $this->endSection('banner')?>

<?= $this->section('contenido')?>	

			
<div class="container2">
    
<body>
    
	<h1><i>Juega la sopa de Letras</i> </h1>
		<h3>Para encontrar la palabra te daremos una ayuda y tu tendras que descubrir la palabra:</h3>
			<ul>
				<li>Es identificar los criterios adecuados para dividir un mercado en segmentos más pequeños.</li>
				<li>Estas variables incluyen la ubicación geográfica, el clima y la densidad de población. </li>
				<li>Puede realizarse mediante la realización de encuestas, entrevistas, grupos focales.</li>
				<li>Estas variables incluyen la frecuencia de compra, el grado de lealtad, la sensibilidad al precio.</li>
				<li>Estas variables incluyen edad, género, ingresos, educación y estado civil.</li>
			<!--Objetivo
				Geográfica
				Análisis
				conductuales-->
			</ul>
			<center>
	<form id= "espacio">
		<table border="2px" bordercolor="#050430" bgcolor="#e2dee1">
			<tr>
				<th width="30" height="30" id="celda1" onclick="comprobar1()">O</th>
				<th width="30" height="30" id="celda2" onclick="comprobar2()">B</th>
				<th width="30" height="30" id="celda3" onclick="comprobar3()">J</th>
				<th width="30" height="30" id="celda4" onclick="comprobar4()">E</th>
				<th width="30" height="30" id="celda5" onclick="comprobar5()">T</th>
				<th width="30" height="30" id="celda6" onclick="comprobar6()">I</th>
				<th width="30" height="30" id="celda7" onclick="comprobar7()">V</th>
				<th width="30" height="30" id="celda8" onclick="comprobar8()">O</th>
				<th width="30" height="30" >P</th>
				<th width="30" height="30" >T</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">G</th>
			</tr>

			<tr>
				<th width="30" height="30">M</th>
				<th width="30" height="30">N</th>
				<th width="30" height="30">K</th>
				<th width="30" height="30">O</th>
				<th width="30" height="30">P</th>
				<th width="30" height="30">R</th>
				<th width="30" height="30">A</th>
				<th width="30" height="30">B</th>
				<th width="30" height="30">C</th>
				<th width="30" height="30">H</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">E</th>
			</tr>

			<tr>
				<th width="30" height="30">Z</th>
				<th width="30" height="30">Q</th>
				<th width="30" height="30">I</th>
				<th width="30" height="30">S</th>
				<th width="30" height="30">T</th>
				<th width="30" height="30">G</th>
				<th width="30" height="30">U</th>
				<th width="30" height="30">W</th>
				<th width="30" height="30">X</th>
				<th width="30" height="30">E</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">O</th>
			</tr>

			<tr>
				<th width="30" height="30">J</th>
				<th width="30" height="30">C</th>
				<th width="30" height="30">D</th>
				<th width="30" height="30">T</th>
				<th width="30" height="30">O</th>
				<th width="30" height="30" >A</th>
				<th width="30" height="30">F</th>
				<th width="30" height="30">L</th>
				<th width="30" height="30">O</th>
				<th width="30" height="30">H</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">G</th>
			</tr>
			
			<tr>
				<th width="30" height="30" id="celdaE1" onclick="comprobarE1()">C</th>
				<th width="30" height="30" id="celdaE2" onclick="comprobarE2()">O</th>
				<th width="30" height="30" id="celdaE3" onclick="comprobarE3()">N</th>
				<th width="30" height="30" id="celdaE4" onclick="comprobarE4()">D</th>
				<th width="30" height="30" id="celdaE5" onclick="comprobarE5()">U</th>
				<th width="30" height="30" id="celdaE6" onclick="comprobarE6()">C</th>
				<th width="30" height="30" id="celdaE7" onclick="comprobarE7()">T</th>
				<th width="30" height="30" id="celdaE8" onclick="comprobarE8()">U</th>
				<th width="30" height="30" id="celdaE9" onclick="comprobarE9()">A</th>
				<th width="30" height="30" id="celdaE10" onclick="comprobarE10()">L</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">R</th>
			</tr>

			<tr>
				<th width="30" height="30">Z</th>
				<th width="30" height="30">Q</th>
				<th width="30" height="30">M</th>
				<th width="30" height="30">X</th>
				<th width="30" height="30">H</th>
				<th width="30" height="30">U</th>
				<th width="30" height="30">R</th>
				<th width="30" height="30">T</th>
				<th width="30" height="30">V</th>
				<th width="30" height="30">Z</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">A</th>
			</tr>

			<tr>
				<th width="30" height="30">V</th>
				<th width="30" height="30">Y</th>
				<th width="30" height="30">N</th>
				<th width="30" height="30">J</th>
				<th width="30" height="30">A</th>
				<th width="30" height="30">G</th>
				<th width="30" height="30">L</th>
				<th width="30" height="30">O</th>
				<th width="30" height="30">R</th>
				<th width="30" height="30">T</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">F</th>
			</tr>

			<tr>
				<th width="30" height="30">T</th>
				<th width="30" height="30">B</th>
				<th width="30" height="30">E</th>
				<th width="30" height="30">O</th>
				<th width="30" height="30">K</th>
				<th width="30" height="30">N</th>
				<th width="30" height="30">I</th>
				<th width="30" height="30">Q</th>
				<th width="30" height="30">F</th>
				<th width="30" height="30">D</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">I</th>
			</tr>

			<tr>
				<th width="30" height="30">A</th>
				<th width="30" height="30">Q</th>
				<th width="30" height="30" id="celdaI3" onclick="comprobarI3()">A</th>
				<th width="30" height="30" id="celdaI4" onclick="comprobarI4()">N</th>
				<th width="30" height="30" id="celdaI5" onclick="comprobarI5()">A</th>
				<th width="30" height="30" id="celdaI6" onclick="comprobarI6()">L</th>
				<th width="30" height="30" id="celdaI7" onclick="comprobarI7()">I</th>
				<th width="30" height="30" id="celdaI8" onclick="comprobarI8()">S</th>
				<th width="30" height="30" id="celdaI9" onclick="comprobarI9()">I</th>
				<th width="30" height="30" id="celdaI10" onclick="comprobarI10()">S</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">C</th>
			</tr>

			<tr>
				<th width="30" height="30">H</th>
				<th width="30" height="30">J</th>
				<th width="30" height="30">D</th>
				<th width="30" height="30">C</th>
				<th width="30" height="30">P</th>
				<th width="30" height="30">L</th>
				<th width="30" height="30">A</th>
				<th width="30" height="30">B</th>
				<th width="30" height="30">X</th>
				<th width="30" height="30">T</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">A</th>
			</tr>

			<tr>
				<th width="30" height="30">I</th>
				<th width="30" height="30">Z</th>
				<th width="30" height="30">F</th>
				<th width="30" height="30">Q</th>
				<th width="30" height="30">B</th>
				<th width="30" height="30">O</th>
				<th width="30" height="30">M</th>
				<th width="30" height="30">D</th>
				<th width="30" height="30">X</th>
				<th width="30" height="30">U</th>
				<th width="30" height="30" id="celda11" onclick="comprobar11()">S</th>
			</tr>
		</table>



	</form></center>
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<script src="<?= base_url(RECURSOS_PANEL_JS.'/sopaLetras.js') ?>"></script>	
<?= $this->endSection()?>