<!DOCTYPE HTML>
<!--
 * Created by PhpStorm.
 * User: zleyba
* Date: 2/2/16
* Time: 10:24 AM
-->
<html xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="UTF-8">
		<?php require_once(dirname(__DIR__) . "/public_html/lib/head-tags.html"); ?>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Didot' rel='stylesheet' type='text/css'>

		<!-- loads gallery support files-->
		<link rel="stylesheet" href="../public_html/css/swipebox.css">
		<script src="../public_html/lib/jquery-2.1.0.min.js"></script>
		<script src="../public_html/js/jquery.swipebox.js"></script>
		<script type="text/javascript">
			;( function( $ ) {

				$( '.swipebox' ).swipebox();

			} )( jQuery );
		</script>
		<!--end gallery support-->

		<!--Nav bar Scripts-->

		<!--Dynamic Loading Script Start-->

		<!--		<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>-->
		<!--		<script type='text/javascript' src='../public_html/js/jquery.ba-hashchange.min.js'></script>-->
		<script type='text/javascript' src='../public_html/js/dynamicpage.js'></script>
		<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<!--Dynamic Loading Script End-->

		<!--Navbar Transformation script-->
		<script type="text/javascript" src="../public_html/js/navtransform.js"></script>




		<!--main style sheet-->
		<link type="text/css" href="../public_html/css/kfcss.css" rel="stylesheet" />

		<!--style sheet for navigation-->
		<link rel="stylesheet" href="../public_html/css/style.css" />

		<title>The Personal Website of Illustrator Kelly Williams</title>

	</head>
	<body class="sfooter">
<div class="sfooter-content">

			<nav class="navbar navbar-default nav container">


				<div class="title stitle">
					kellehfish
				</div>
				<!-- Nav Burger :3 -->
				<div class="row">
					<div class="col-xs-2">
						<div class="ptitle">
							kellehfish
						</div>
					</div>

					<div class="col-xs-10">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
					<div class="row">
						<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">

							<ul class="nav">
								<li class="item">
									<a href="navbuild.php">Home</a>
								</li>

								<li class="item">
									<a href="test.php">about</a>
								</li>

								<li class="item">
									<a href="#">about</a>
								</li>

								<li class="item">
									<a href="#" class="contact">contact</a>
								</li>
							</ul>

							<ul class="socnav">
								<li class="item"><a class="iglogo" href="https://www.instagram.com/kellehfish/"></a></li>
								<li class="item"><a class="tumblrlogo" href="http://kellehjelleh.tumblr.com/"></a></li>
							</ul>
						</div>
					</div>




			</nav>





		</header>

		<div class="mainContent">

			<main id="main-content">

					<!--gallery code starts here-->



					<div class="container" id="box-container">

						<div class="wrap small-width">
							<div id="try"></div>
							<div class="row">
								<div class="col-md-4 gallery box">

									<a href="../public_html/img/img-1.jpg" class="swipebox" title="Sword">
										<img src="../public_html/img/img-1.jpg" alt="image">
									</a>
								</div>

								<div class="col-md-4 gallery box">
									<a href="../public_html/img/img-2.jpg" class="swipebox" title="Snow">
										<img src="../public_html/img/img-2.jpg" alt="image">
									</a>
								</div>
								<div class="col-md-4 gallery box">
									<a href="../public_html/img/img-3.jpg" class="swipebox" title="Gwen">
										<img src="../public_html/img/img-3.jpg" alt="image">
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 gallery box">
									<a href="../public_html/img/img-4.jpg" class="swipebox" title="Grimes">
										<img src="../public_html/img/img-4.jpg" alt="image">
									</a>
								</div>
								<div class="col-md-4 gallery box">
									<a href="../public_html/img/img-5.jpg" class="swipebox" title="Stabby">
										<img src="../public_html/img/img-5.jpg" alt="image">
									</a>
								</div>

								<div class="col-md-4 gallery box">
									<a href="../public_html/img/img-6.jpg" class="swipebox" title="Camper Pups">
										<img src="../public_html/img/img-6.jpg" alt="image">
									</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 gallery box">

								<a href="../public_html/img/img-7.jpg" class="swipebox" title="Finga toez">
									<img src="../public_html/img/img-7.jpg" alt="image">
								</a>
							</div>

							<div class="col-md-4 gallery box">
								<a href="../public_html/img/img-8.jpg" class="swipebox" title="A plan?">
									<img src="../public_html/img/img-8.jpg" alt="image">
								</a>
							</div>
							<div class="col-md-4 gallery box">
								<a href="../public_html/img/img-9.jpg" class="swipebox" title="(...)">
									<img src="../public_html/img/img-9.jpg" alt="image">a>
							</div>
						</div>

					</div>
				</div>
		</div>
				</div>


			</main>
		</div>

</div>
		<footer>
			<div class="container">


				(c) Kelly Williams 2016
			</div>
		</footer>



	</body>
</html>
