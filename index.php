<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Genesis Launchpad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- OpenGraph Data -->
		<meta property="og:url" content="http://genesisaugmented.com" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Genesis Augmented" />
		<meta property="og:description" content="Calling all gamers! Introducting Genesis Augmented, a seamless combination of the latest augmented reality technology with hardcore battle systems. Who will emerge victorious? You decide." />
		<meta property="og:image" content="http://genesisaugmented.com/images/header-bg.jpg" />
		<meta property="fb:app_id" content="1622234504755688" />

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/video.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<?php include_once "facebookSDK.php"; ?>

		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Genesis</a></h1>
								<!-- <hr /> -->
								<br />
								<p>Augmented Reality Gaming the right way</p>
							</header>
							<footer>
								<!-- <a href="#banner" class="button circled scrolly">Start</a> -->
								<?php include_once "video.php"; ?>

								<div class="fb-share-button" data-href="http://genesisaugmented.com"
										data-layout="button"
										data-size="large"
										data-mobile-iframe="true">
											<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fgenesisaugmented.com%2F&amp;src=sdkpreparse">Share</a>
							  </div>

								<div class="fb-send" data-href="http://genesisaugmented.com" data-size="large"></div>

							</footer>
						</div>
				</div>

			<!-- Banner -->
			<!-- <section id="banner">
				<header>
					<h2>Welcome to the next frontier in <strong>Augmented Reality</strong>.</h2>
					<p>
						Experience the full extent of AR with Genesis <br /> Plan your character lineup, then use strategy and skill to crush your opponent.
					</p>
				</header>
			</section> -->

		  <!-- Second Panel -->

			<div class="wrapper style1">

				<div class="container">
					<div class="row 200%">
						<div class="5u 12u(mobile)" id="sidebar">
							<hr class="first" />
							<section>
								<a href="#" class="image fit" style="padding-top: 20px;"><img src="images/gifs/b-rex.gif" alt="" /></a>
								<!-- <footer>
									<a href="#" class="button">Magna Adipiscing</a>
								</footer> -->
							</section>
						</div>
						<div class="7u 12u(mobile) important(mobile)" id="content">
							<article id="main">
								<header>
									<h2>REQUEST LAUNCH NOTIFICATION BELOW TO RECIEVE UPTO 60% OFF</h2>
									<p>
										Countdown
									</p>
								</header>
								<p>
									Recieve your Genesis Early Launch Notification with One-Click Signup. <br />
									Simply enter your email, and press 'Join Now'. <br /><br />
									With the early launch email, you will be the first to know when we launch &amp; save <br />
									up to 60% off the future retail price. <br />
								</p>

								<?php include_once 'signup.php'; ?>

							</article>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Tweets -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="tweet">
												Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
												<span class="timestamp">5 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Hendrerit rutrum quisque.
												<span class="timestamp">30 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
												<span class="timestamp">5 hours ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Posts -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Nisl fermentum integer</a></h3>
												</header>
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Phasellus portitor lorem</a></h3>
												</header>
												<span class="timestamp">6 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Magna tempus consequat</a></h3>
												</header>
												<span class="timestamp">Yesterday</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Feugiat lorem ipsum</a></h3>
												</header>
												<span class="timestamp">2 days ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Photos -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
									</header>
									<div class="row 25%">
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
										</div>
									</div>
								</section>

						</div>
						<hr />
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Nisl turpis nascetur interdum?</h3>
										</header>
										<p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="assets/js/video.js"></script>

	</body>
</html>
