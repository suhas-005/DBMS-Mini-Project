<?php
 	session_start();
	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] == 0)
	{
		$_SESSION['message'] = "You need to first login to access this page !!!";
		header("Location: Login/error.php");
	}

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AgroCulture</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" type="text/css" href="indexFooter.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<?php require 'menu.php'; ?>
	<body>



		<!-- One -->
		<?php if($_SESSION['Category'] == 1): ?>
			<section id="one" class="wrapper style1 align-center" style="height: 600px">
				<div class="container">
					<h2>Welcome to DigiMart</h2>
					<br /><br />
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<a href="profileView.php"><img src="profileDefault.png"></a>
							<p>Your Profile</p>
						</section>
						<section class="4u 12u$(small)">
							<a href="productMenu.php?n=1" name="catSearch"><img src="search.png"></a>
							<p>Search according to your needs</p>
						</section>
						<section class="4u$ 12u$(small)">
							<a href="productMenu.php?n=0"><img src="product.png"></a>
							<p>Our products</p>
						</section>
					</div>
				</div>
			</section>
		<?php else: ?>
			<section id="one" class="wrapper style1 align-center" style="height: 600px">
				<div class="container">
					<h2>Welcome to DigiMart</h2>
					<br /><br />
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<a href="profileView1.php"><img src="profileDefault.png"></a>
							<p>Your Profile</p>
						</section>
						<section class="4u 12u$(small)">
							<a href="productMenu.php?n=1" name="catSearch"><img src="search.png"></a>
							<p>Search according to your needs</p>
						</section>
						<section class="4u$ 12u$(small)">
							<a href="productMenu.php?n=0"><img src="product.png"></a>
							<p>Our products</p>
						</section>
					</div>
				</div>
			</section>
		<?php endif; ?>

	</body>
</html>
