<?php $pageOn = basename($_SERVER['PHP_SELF']); 

$styleSheet = substr($pageOn, 0, strrpos($pageOn, '.'));

?>

<!DOCTYPE HTML>
<html lang="en-US" class="no-js">
<head>
	<meta charset="UTF-8">
	<title>Pirate Monkeys</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/<?php echo $styleSheet ?>.css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="scripts/modernizr.js"></script>
	<script src="scripts/feature-test.js"></script>

</head>
<body id="index">

	<!-- global header -->

	<header class="global">
		<hgroup class="group">
			<h1><a href="index.php">Pirate Monkeys</a></h1>
			<h2 class="group">
				<span class="active">Good</span>
				<span class="switch"></span>
				<span>Evil</span>
			</h2>
		</hgroup>

		<nav class="primary">
			<ul class="site group">
				<li><a href="index.php" <?php if($pageOn == ('index.php')) echo "class='current'"; ?>>Home</a></li>
				<li><a href="about.php" <?php if($pageOn == ('about.php')) echo "class='current'"; ?>>About</a></li>
				<li><a href="portfolio.php" <?php if($pageOn == ('portfolio.php')) echo "class='current'"; ?>>Portfolio</a></li>
			</ul>

			<ul class="social group">
				<li><a class="fb" href="">Facebook</a></li>
				<li><a class="gplus" href="">Google+</a></li>
				<li><a class="twitter" href="">Twitter</a></li>
			</ul>
		</nav>

		<section class="tagline">
			<p>
				Half pirate, half monkey, all awesome. Our swashbuckling team of
				design and coding monkeys will sail the seven seas to create the
				site you need.
			</p>
		</section>
	</header>