<!DOCTYPE HTML>
<html lang="en-US" class="no-js">
<head>
	<meta charset="UTF-8">
	<title>Pirate Monkeys</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/<?php echo $section ?>.css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="scripts/about_gen.js"></script>
	<script src="scripts/modernizr.js"></script>
	<script src="scripts/feature-test.js"></script>
	<script src="scripts/html5video.js"></script>
	<?php if($section == 'game') : ?>
		<script src="scripts/game.min.js"></script>
	<?php endif; ?>

</head>
<body <?php echo 'class="'.$section.'"'; ?>>

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
				<li><a href="index.php" <?php if($section == ('index')) echo "class='current'"; ?>>Home</a></li>
				<li><a href="about.php" <?php if($section == ('about')) echo "class='current'"; ?>>About</a></li>
				<li><a href="portfolio.php" <?php if($section == ('portfolio')) echo "class='current'"; ?>>Portfolio</a></li>
				<li><a href="pomc.php" <?php if($section == ('game')) echo "class='current'"; ?>>Game</a></li>
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
	
	<!-- global sidebar -->

	<aside class="sidebar">
		<section class="news group">
			<h3>Latest news</h3>

			<article>
				<details>
					<summary>
						<strong>New Office</strong>
						<time datetime="2011-01-20">Jan 20th, 2011</time>
					</summary>
					<p>
						The dust is cleared and we finally settled into our new office in
						downtown Portland. Be sure to come by and see our new digs. We even
						have fancy vending machines, an orange accent wall, and a pool table.
					</p>
				</details>
			</article>

			<article>
				<details>
					<summary>
						<strong>We Won a Medal!</strong>
						<time datetime="2011-12-14">Dec. 14th, 2011</time>
					</summary>
					<p>
						The team recently won a WebDev 2012 Gold Medal for our pioneering
						designs using HTML5. We're very proud of this! Check out our portfolio
						to see some of the work that lead to this award.
					</p>
				</details>
			</article>
		</section>
		
		<section class="did-you-know group">
			<h3>Did You Know?</h3>
			<p id="about"></p>
		</section>
		
	</aside>
