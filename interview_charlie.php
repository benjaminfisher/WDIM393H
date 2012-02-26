<?php 
$section = 'about';
include 'header.php'; 
?>
	<!-- page content -->
	<section id="main" class="group">
		<section id="content" class="group">
			<h1>Interview - Charlie Simpson</h1>

			<video width="480" height="270" controls="controls">
				<source src="assets/interviews/charlie_video.mp4" type="video/mp4" />
				<source src="assets/interviews/charlie_video.ogg" type="video/ogg" />
				<p>Your browser does not support the video tag.</p>
			</video>
			
		</section>

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
	</section>

<?php include 'footer.php'; ?>
