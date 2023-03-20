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
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_CSS.'/main.css') ?>">
			<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_PLUGINS.'/toastr/toastr.min.css') ?>">



		</head>
		<body>	
		  

			<!-- start banner Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								¡Iniciar Sesión!<br>
							</h1>
							<p class="text-white">
								Para poder tener acceso al curso debes de iniciar sesión.
                                A continuación te presentamos algunas de las características del presente software
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Amplio temario</h4></a>		
									<p class="text-white">
										El software cuenta con un amplio temario de la asignatura de "Mercadotecnia aplicada a servicios turísticos"
									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Quizes</h4></a>		
									<p class="text-white">
										Después de cada tema estudiado, deberás de aprobar un quiz para comprobar que realmente comprendiste el tema estudiado.
									</p>						
								</div>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							
								<h4 class="text-white pb-20 text-center mb-30">Iniciar sesión</h4>		
								<?php
                                $parametros=array('id'=>'formlogin','class'=>'form-wrap');
                                echo form_open('loguear_usuario',$parametros);
                            	?>
								<p class="text-white">Correo electrónico</p>

								<?php
                                    $parametros=array(
                                    'type'=>'email',
                                    'class'=>'form-control',
                                    'id'=>'email',
                                    'name'=>'email',
                                    'placeholder'=>'nombre@gmail.com',
                                    'required'=>''
                                    );
                                    echo form_input($parametros);
                                 ?>
								 <p class="text-white">Contraseña</p>
								 <?php
                                    $parametros=array(
                                    'type'=>'password',
                                    'class'=>'form-control',
                                    'id'=>'password',
                                    'name'=>'password',
                                    'placeholder'=>'*********',
                                    'required'=>''
                                    );
                                    echo form_input($parametros);
                                 ?>																	
								<button class="primary-btn text-uppercase" type="submit">Iniciar sesión</button>
                                <br>
                                <p class="text-white text-center">
                                    <br>    
                                    ¿No tienes una cuenta? <br> ¡Regístrate!
								</p>
                                <button class="primary-btn text-uppercase">¡Regístrate!</button>
							
						</div>
						<?= form_close() ?>
					</div>
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
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


			<script src="<?= base_url(RECURSOS_PANEL_JS.'/vendor/jquery-2.2.4.min.js') ?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?= base_url(RECURSOS_PANEL_JS.'/vendor/bootstrap.min.js') ?>"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
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
			
			<script src="<?= base_url(RECURSOS_PANEL_PLUGINS.'/toastr/toastr.min.js') ?>"></script>	
			<script src="<?= base_url(RECURSOS_PANEL_PLUGINS.'/toastr/jquery-3.3.1.min.js') ?>"></script>
			<?= mostrar_mensaje() ?>

		</body>
	</html>