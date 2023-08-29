<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>Mediseek</title>
</head>

<body>

	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="navbar"
		arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="index.html">Mediseek<span></span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li><a class="nav-link" href="shop.php">Shop</a></li>
					<li><a class="nav-link" href="about.php">About us</a></li>
					<li><a class="nav-link" href="contact.php">Contact us</a></li>
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="profile.php"><img src="images/user.svg">
						<span id="profile" style="color: #fff;">
						<?php
						if(isset($_SESSION['name'])){
							echo $_SESSION["name"];
						}else{
							echo "Profile";
						}
						?>
						</span></a></li>
					<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
				</ul>
			</div>
		</div>

	</nav>


	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>Welcome To <span class="d-block">Mediseek.com</span></h1>
						<p class="mb-4">Mediseek is a trusted platform to compare pharmaceutical products and buy them with satisfaction. We compare the medicines on grounds of customer reviews,ratings,expiry date,manufacturer,brands etc.</p>
						<p><a href="shop.php" class="btn btn-secondary me-2">Shop Now</a><a href="shop.php"
								class="btn btn-white-outline">Explore</a></p>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="hero-img-wrap">
						<img src="images/medicine_mediseek.png" style="margin-top: 75px;" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Start Product Section -->
	<div class="product-section">
		<div class="container">
			<div class="row">

				<!-- Start Column 1 -->
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
					<h2 class="mb-4 section-title">Essential medicines at your choiceable prices</h2>
					<p class="mb-4">Here we allow  users to compare and buy the medicines according to their choices. We provide the freedom to choose the medicines from renowned pharmaceutical websites by comparing the customer reviews,ratings ,prices,branding etc.Explore to find more...</p>
					<p><a href="shop.php" class="btn">Explore</a></p>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<!-- <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="cart.html">
						<img src="images/product-1.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">$50.00</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div> -->

				<!-- End Column 2 -->

			</div>
		</div>
	</div>
	<!-- End Product Section -->

	<div class="testimonial-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<h2 class="section-title">Testimonials</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="testimonial-slider-wrap text-center">

						<div id="testimonial-nav">
							<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
							<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
						</div>

						<div class="testimonial-slider">

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;Medicines are the essential requirements in the life of any people.&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="images/devjit.jpg" alt="Maria Jones" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Devjit Laha</h3>
												<span class="position d-block mb-3">CEO, Founder,Frontend Developer,Mediseek</span>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;Correct products must be chosen to get proper medication.&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="images/aniket.jpg" alt="Maria Jones" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Aniket Ganguli</h3>
												<span class="position d-block mb-3">CEO, Co-Founder,Backend Developer,Mediseek</span>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;People should be aware of what products they are buying,i.e,they should buy the correct product to not face any problem.&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="images/pallab.jpg" alt="Maria Jones" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Pallab Samanta</h3>
												<span class="position d-block mb-3">CEO, Full-Stack Developer,Mediseek</span>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->
							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;Choosing medicines with best prices and actual ingredients is the right of every citizen in the country &rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="images/abhiraj.jpg" alt="Maria Jones" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Abhiraj Bose</h3>
												<span class="position d-block mb-3">CEO, Designer,Mediseek</span>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>



	<footer class="footer-section">
		<div class="container relative">
			<div class="row">
				<div class="col-lg-8">
					<div class="subscription-form">
						<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg"
									alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

						<form action="#" class="row g-3">
							<div class="col-auto">
								<input type="text" class="form-control" placeholder="Enter your name">
							</div>
							<div class="col-auto">
								<input type="email" class="form-control" placeholder="Enter your email">
							</div>
							<div class="col-auto">
								<button class="btn btn-primary">
									<span class="fa fa-paper-plane"></span>
								</button>
							</div>
						</form>

					</div>
				</div>
			</div>

			<div class="row g-5 mb-5">
				<div class="col-lg-4">
					<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Mediseek<span>.com</span></a>
					</div>
					<p class="mb-4">We at Mediseek,try to provide our customers to buy the pharmaceutical products at their comfortable prices and also allow them to buy the products based on the customer reviews,brandings,ratings etc.We also provide ratings which are approved by our team and which can be trusted by the customers.We have some terms and conditions which the users can check and find out.</p>

					<ul class="list-unstyled custom-social">
						<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
					</ul>
				</div>

				<div class="col-lg-8">
					<div class="row links-wrap">
						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">About us</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Support</a></li>
								<li><a href="#">Knowledge base</a></li>
								<li><a href="#">Live chat</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<p class="mb-2 text-center text-lg-start">Copyright &copy;
							<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash;
							<a href="#">Mediseek.com</a>
						</p>
					</div>

					<div class="col-lg-6 text-center text-lg-end">
						<ul class="list-unstyled d-inline-flex ms-auto">
							<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</footer>
	<!-- End Footer Section -->


	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>