<?= $this->extend('plantilla/panel_base') ?>
<?= $this->section('css')?>
<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/juego/style.scss') ?>">

<?= $this->endSection()?>


<?= $this->section('banner')?>
<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
                            Fijación de objetivos comerciales del proyecto		
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html"> Popular Courses</a></p>
						</div>	
					</div>
				</div>
			</section>
			
<?= $this->endSection('banner')?>

<?= $this->section('contenido')?>	
<div class="wrapper">
   <h1>Ahorcado</h1>
    <h2>Fijación de objetivos comerciales del proyecto</h2>
    <p>Use el alfabeto a continuación para adivinar la palabra o utiliza una pista</p>
</div>
<div class="wrapper">
    <div id="buttons">
    </div>  
    <br><br><br><br>
    <p id="catagoryName"></p>
    <div id="hold">
    </div>
    <p id="mylives"></p>
    <p id="clue">clave</p>  
    <canvas id="stickman">Este texto se mostrará si el navegador NO es compatible con la etiqueta HTML5 Canvas</canvas>
    <div class="container">
      <button id="hint">Pista</button>
      <button id="Reiniciar">Jugar de nuevo</button>
    </div>
</div>
			
<?= $this->endSection('contenido')?>

<?= $this->section('js')?>
<script src="<?= base_url(RECURSOS_PANEL_JS.'/ahorcado/juego6u1.js') ?>"></script>	
<?= $this->endSection()?>