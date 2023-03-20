<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?= base_url(RECURSOS_PANEL_IMAGENES.'/logo2.png') ?>">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Inicio</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/linearicons.css') ?>">
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/font-awesome.min.css') ?>">
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/bootstrap.css') ?>">
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/magnific-popup.css') ?>">
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/nice-select.css') ?>">							
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/animate.min.css') ?>">
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/owl.carousel.css') ?>">			
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/jquery-ui.css') ?>">			


			<?= $this->renderSection('css')?>
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/main.css') ?>">

		</head>
		<body>	
		  <header id="header" id="home">
	  		
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="<?=route_to('inicio')?>">
                        <img src="<?= base_url(RECURSOS_PANEL_IMAGENES.'/logo2.png') ?>" width=40px alt="" title=""/>
                    </a>
			      </div>
                  <?= $menu?>	    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<?= $this->renderSection('banner')?>
            <section>
                <div>
				<?= $this->renderSection('contenido')?>
                </div>
            </section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			
			<!-- End feature Area -->
					
			<!-- Start popular-course Area -->
			
			<!-- End popular-course Area -->
			

			<!-- End search-course Area -->
			
		
			<!-- Start upcoming-event Area -->
			
			<!-- End upcoming-event Area -->
						
			<!-- Start review Area -->
			
			<!-- End review Area -->	
			
			<!-- Start cta-one Area -->
    
			<!-- End cta-one Area -->

				
			

			
						
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						
													
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<a href="<?=route_to('cerrar_sesion')?>">Cerrar sesión</a>
						
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


			<script src="<?= base_url(RECURSOS_PANEL_JS.'/vendor/jquery-2.2.4.min.js') ?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?= base_url(RECURSOS_PANEL_JS.'/vendor/bootstrap.min.js') ?>"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<?= $this->renderSection('js')?>

  			<script src="<?= base_url(RECURSOS_PANEL_JS.'/easing.min.js') ?>"></script>			
			<script src="<?= base_url(RECURSOS_PANEL_JS.'/hoverIntent.js') ?>"></script>
			<script src="<?= base_url(RECURSOS_PANEL_JS.'/superfish.min.js') ?>"></script>	
			<script src="<?= base_url(RECURSOS_PANEL_JS.'/jquery.ajaxchimp.min.js') ?>"></script>
			<script src="<?= base_url(RECURSOS_PANEL_JS.'/jquery.magnific-popup.min.js') ?>"></script>	
    		<script src="<?= base_url(RECURSOS_PANEL_JS.'/jquery.tabs.min.js') ?>"></script>						
			<script src="<?= base_url(RECURSOS_PANEL_JS.'/jquery.nice-select.min.js') ?>"></script>	
			<script src="<?= base_url(RECURSOS_PANEL_JS.'/owl.carousel.min.js') ?>"></script>									
			<script src="<?= base_url(RECURSOS_PANEL_JS.'/mail-script.js') ?>"></script>
			
			<script src="<?= base_url(RECURSOS_PANEL_JS.'/main.js') ?>"></script>	



		</body>
	</html>