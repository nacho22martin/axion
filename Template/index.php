<?php include "sitecake/server/sitecake_entry.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Axion - </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/bootstrap-responsive.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />
<!-- boxed bg -->
<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
<link rel="shortcut icon" href="ico/favicon.png" />
</head>

<body>
<div id="wrapper">
	<!-- toggle top area -->
	<div class="hidden-top">
		<div class="hidden-top-inner container">
			<div class="row">
				<div class="span12 sc-content-hidden">
					<ul>
						<li><strong>We are available for any custom works this month</strong></li>
						<li>Main office: Springville center X264, Park Ave S.01</li>
						<li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- end toggle top area -->
	<!-- start header -->
	<header>
	<div class="container " >
		<!-- hidden top area toggle link -->
		<div id="header-hidden-link">
			<a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
		</div>
		<!-- end toggle link -->
		<div class="row nomargin">
			<div class="span12">
				<div class="headnav">
				<!--	<ul>
						<li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
						<li><a href="#mySignin" data-toggle="modal">Sign in</a></li>

					</ul>-->
				</div>
				<!-- Signup Modal -->
				<div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="control-group">
								<label class="control-label" for="inputEmail">Email</label>
								<div class="controls">
									<input type="text" id="inputEmail" placeholder="Email">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputSignupPassword">Password</label>
								<div class="controls">
									<input type="password" id="inputSignupPassword" placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputSignupPassword2">Confirm Password</label>
								<div class="controls">
									<input type="password" id="inputSignupPassword2" placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn">Sign up</button>
								</div>
								<p class="aligncenter margintop20">
									Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
								</p>
							</div>
						</form>
					</div>
				</div>
				<!-- end signup modal -->
				<!-- Sign in Modal -->
				<div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="control-group">
								<label class="control-label" for="inputText">Username</label>
								<div class="controls">
									<input type="text" id="inputText" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputSigninPassword">Password</label>
								<div class="controls">
									<input type="password" id="inputSigninPassword" placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn">Sign in</button>
								</div>
								<p class="aligncenter margintop20">
									Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
								</p>
							</div>
						</form>
					</div>
				</div>
				<!-- end signin modal -->
				<!-- Reset Modal -->
				<div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="control-group">
								<label class="control-label" for="inputResetEmail">Email</label>
								<div class="controls">
									<input type="text" id="inputResetEmail" placeholder="Email">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn">Reset password</button>
								</div>
								<p class="aligncenter margintop20">
									We will send instructions on how to reset your password to your inbox
								</p>
							</div>
						</form>
					</div>
				</div>
				<!-- end reset modal -->
			</div>
		</div>
		<div class="row">
			<div class="span4">
				<div class="logo">
					<a href="index.html"><img src="img/logo.png" alt="" class="logo" /></a>
					<h1>Axion Group</h1>
				</div>
			</div>
			<div class="span8">
				<div class="navbar navbar-static-top">
					<div class="navigation">
						<nav>
						<ul class="nav topnav">
							<li class="dropdown active">
							<a href="index.html">Inicio <!--<i class="icon-angle-down"></i>--></a>
							<!--<ul class="dropdown-menu">
								<li><a href="index-alt2.html">Homepage 2</a></li>
								<li><a href="index-alt3.html">Homepage 3</a></li>
							</ul>-->
							</li>
							<li class="dropdown">
							<a href="#">Servicios <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="typography.html">Diseño de página web </a></li>
								<li><a href="table.html">Gestión de proyectos para el desarrollo organizacional </a></li>
								<li><a href="components.html">Community Management </a></li>
								<!--<li><a href="animations.html">56 Animations</a></li>
								<li><a href="icons.html">Icons</a></li>
								<li><a href="icon-variations.html">Icon variations</a></li>
								<li class="dropdown"><a href="#">3 Sliders <i class="icon-angle-right"></i></a>
								<ul class="dropdown-menu sub-menu-level1">
									<li><a href="index.html">Nivo slider</a></li>
									<li><a href="index-alt2.html">Slit slider</a></li>
									<li><a href="index-alt3.html">Parallax slider</a></li>
								</ul>-->
								</li>
							</ul>
							</li>
							<li class="dropdown">
							<a href="#">Nosotros <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="about.html">Quienes somos</a></li>
								<li><a href="pricingbox.html">Propuesta de Valor</a></li>
								<!--<li><a href="testimonials.html">Testimonials</a></li>
								<li><a href="404.html">404</a></li>-->
							</ul>
							</li>
							<li class="dropdown">
							<a href="portfolio-2cols.html">Portfolio <!--<i class="icon-angle-down"></i>--></a>
							<!--<ul class="dropdown-menu">
								<li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
								<li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
								<li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
								<li><a href="portfolio-detail.html">Portfolio detail</a></li>
							</ul>-->
							</li>
							<!--<li class="dropdown">
							<a href="#">Blog <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
								<li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
								<li><a href="post-left-sidebar.html">Post left sidebar</a></li>
								<li><a href="post-right-sidebar.html">Post right sidebar</a></li>
							</ul>
							</li>-->
							<li>
							<a href="contact.html">Contact </a>
							</li>
						</ul>
						</nav>
					</div>
					<!-- end navigation -->
				</div>
			</div>
		</div>
	</div>
	</header>
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<!-- Slider -->
	<div id="nivo-slider">
		<div class="nivo-slider">
			<!-- Slide #1 image -->
			<img src="img/slides/nivo/bg-1.jpg" alt="" title="#caption-1" />
			<!-- Slide #2 image -->
			<img src="img/slides/nivo/bg-2.jpg" alt="" title="#caption-2" />
			<!-- Slide #3 image -->
			<img src="img/slides/nivo/bg-3.jpg" alt="" title="#caption-3" />
		</div>
		<div class="container">
			<div class="row">
				<div class="span12">
					<!-- Slide #1 caption -->
					<div class="nivo-caption" id="caption-1">
						<div>
							<h2>Caracteristicas <strong>únicas</strong></h2>
							<p>
								Manejo de proyectos específicos con un alto enfoque en el resultado.
							</p>
							<a href="#" class="btn btn-theme">Leer más</a>
						</div>
					</div>
					<!-- Slide #2 caption -->
					<div class="nivo-caption" id="caption-2">
						<div>
							<h2>Diseños full <strong>responsive</strong></h2>
							<p>
								Diseños para cualquier tipo de dispositivo movil o tablet. Html5 y CSS3.
							</p>
							<a href="#" class="btn btn-theme">Leer más</a>
						</div>
					</div>
					<!-- Slide #3 caption -->
					<div class="nivo-caption" id="caption-3">
						<div>
							<h2>Muy <strong>customizable</strong></h2>
							<p>
								Implementación de soluciones adaptadas a la necesidad de nuestros clientes.
							</p>
							<a href="#" class="btn btn-theme">Leer más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end slider -->
	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="big-cta">
					<div class="cta-text">
						<h3>Hemos desarrollado una equipo de <span class="highlight"><strong>alto</strong></span> valor!</h3>
					</div>
					<div class="cta floatright">
						<a class="btn btn-large btn-theme btn-rounded" href="#">Solicitar Presupuesto</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="row">
					<div class="span3">
						<div class="box aligncenter">
							<div class="aligncenter icon">
								<i class="icon-briefcase icon-circled icon-64 active"></i>
							</div>
							<div class="text">
								<h6>Diseño de Página Web</h6>
								<p>
									 Nos efoncamos en la función del sitio dentro del contexto del cliente máximizando el valor del diseño.
								</p>
								<a href="#">Ver más</a>
							</div>
						</div>
					</div>
					<div class="span3">
						<div class="box aligncenter">
							<div class="aligncenter icon">
								<i class="icon-desktop icon-circled icon-64 active"></i>
							</div>
							<div class="text">
								<h6>Gestión de Proyectos</h6>
								<p>
									 Gestionamos proyectos que permitan el desarrollo oranizacional en busqueda de una mejora continua.
								</p>
								<a href="#">Ver más</a>
							</div>
						</div>
					</div>
					<div class="span3">
						<div class="box aligncenter">
							<div class="aligncenter icon">
								<i class="icon-beaker icon-circled icon-64 active"></i>
							</div>
							<div class="text">
								<h6>Community Management</h6>
								<p>
									 Desarrollo de estratégias de comunicación a través de redes sociles que generen una comunidad al rededor de nuestros clientes
								</p>
								<a href="#">Ver más</a>
							</div>
						</div>
					</div>
					<div class="span3">
						<div class="box aligncenter">
							<div class="aligncenter icon">
								<i class="icon-coffee icon-circled icon-64 active"></i>
							</div>
							<div class="text">
								<h6>Implementación de Sistemas OpenSource</h6>
								<p>
									 Implementación de herramientas de código abierto para la gestión de las organizaciones.
								</p>
								<a href="#">Ver más</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="span12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="span12">
				<h4 class="heading">Algunos de nuestros <strong>trabajos</strong> más recientes</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs span3 design" data-id="id-0" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The City" href="img/works/full/image-01-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/thumbs/image-01.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="img/works/full/image-02-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/thumbs/image-02.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/image-03-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/thumbs/image-03.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/image-04-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/thumbs/image-04.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs span3 photography" data-id="id-4" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="img/works/full/image-05-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/thumbs/image-05.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs span3 photography" data-id="id-5" data-type="icon">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clouds" href="img/works/full/image-06-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/thumbs/image-06.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/image-07-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/thumbs/image-07.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs span3 design" data-id="id-0" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dark" href="img/works/full/image-08-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/thumbs/image-08.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
					</ul>
					</section>
				</div>
			</div>
		</div>
		<!-- End Portfolio Projects -->
		<!-- divider -->
		<div class="row">
			<div class="span12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<div class="row">
			<div class="span12">
				<h4>Nuestros <strong>clientes</strong></h4>
				<ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
					<li>
					<a href="#">
					<img src="img/dummies/clients/client1.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client2.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client3.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client4.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client5.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client6.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client1.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client2.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client3.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client4.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client5.png" class="client-logo" alt="" />
					</a>
					</li>
					<li>
					<a href="#">
					<img src="img/dummies/clients/client6.png" class="client-logo" alt="" />
					</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="bottom">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="aligncenter">
					<div id="twitter-wrapper">
						<div id="twitter">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="span3">
				<div class="widget">
					<h5 class="widgetheading">Browse pages</h5>
					<ul class="link-list">
						<li><a href="#">About our company</a></li>
						<li><a href="#">Our services</a></li>
						<li><a href="#">Meet our team</a></li>
						<li><a href="#">Explore our portfolio</a></li>
						<li><a href="#">Get in touch with us</a></li>
					</ul>
				</div>
			</div>
			<div class="span3">
				<div class="widget">
					<h5 class="widgetheading">Important stuff</h5>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Flattern forum</a></li>
					</ul>
				</div>
			</div>
			<!--<div class="span3">
				<div class="widget">
					<h5 class="widgetheading">Flickr photostream</h5>
					<div class="flickr_badge">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
					</div>
					<div class="clear">
					</div>
				</div>
			</div>-->
			<div class="span3">
				<div class="widget">
					<h5 class="widgetheading">Get in touch with us</h5>
					<address>
					<strong>Flattern studio, Pte Ltd</strong><br>
					 Springville center X264, Park Ave S.01<br>
					 Semarang 16425 Indonesia </address>
					<p>
						<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="span6">
					<div class="copyright">
						<p>
							<span>&copy; Flattern 2013 All right reserved. Designed by</span><a href="http://iweb-studio.com" target="_blank">iweb-studio</a>
						</p>
					</div>
				</div>
				<div class="span6">
					<ul class="social-network">
						<li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
						<li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
						<li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
						<li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
						<li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jcarousel/jquery.jcarousel.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/tweet/jquery.tweet.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.nivo.slider.js"></script>
<script src="js/modernizr.custom.79639.js"></script>
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>