<?php 
$section = 'about';
include 'header.php'; ?>

	<!-- page content -->
	<section id="main" class="group">
		<section id="content" class="group">
			<h1>The Crew</h1>

			<article id="april">
				<figure><img src="assets/about/april.jpg" width="200" height="200" alt="April G."  />
					<figcaption>Cheese!</figcaption>
				</figure>                
		
				<h2>April Gallaty</h2>
				<p>April is a multitasking monkey wench (not a typo!), doing both graphics and front-end coding. Her designs are unique and unusual, helping to make our clients stand out in the crowd.</p>

				<blockquote>I love ferrets, tattoos and tattoos of ferrets.</blockquote>
						
				<section class="tags">
				
					<ul class="elements1">
						<li>Web Design</li>
							<li>Front-end Development</li> 
								<li>SQL DBMS</li>
                                	
						<li>Photoshop</li>            
					</ul>
				
					<ul class="elements2">
						<li>HTML &amp; CSS</li>
							<li>HTML5 &amp; CSS3</li>
							<li>HTML Emails</li>
					</ul>
				
					<ul class="elements3">
						<li><a href="portfolio.php"><div class="box">&nbsp;</div>Portfolio Site</a></li>
						<li><a href="interview_april.php"><div class="box">&nbsp;</div>Interview</a></li>
					</ul>
				</section>					
			</article>
<!-- end #april -->
	
			<article id="benjamin">
				<figure><img src="assets/about/benjamin.jpg" alt="Benjamin" width="200" height="200" />
					<figcaption>Mmmmm... Chicken!</figcaption>
				</figure>                
					
		
		<h2>Benjamin Fisher</h2>	
			<p>When Benjamin isn't planning world domination or arranging flowers, he's a swashbuckling coder on the grandest of scales!</p>

					<blockquote>Being reasonable is for reasonable people. Maybe you should find one of them.</blockquote>
						
						<section class="tags">
												
							<ul class="elements1">
								<li>Web Design</li>
								<li>Front-end Development</li>                 
							</ul>
						
							<ul class="elements2">
								<li>HTML/HTML5</li>
								<li>CSS/CSS3</li>
								<li>JavaScript/jQuery</li>
								<li>Python</li>
							</ul>
						
					<ul class="elements3">
						<li><a href="portfolio.php"><div class="box">&nbsp;</div>Portfolio Site</a></li>
						<li><a href="interview_benjamin.php"><div class="box">&nbsp;</div>Interview</a></li>
					</ul>
						</section>
			</article>
<!-- end #benjamin -->
						
			<article id="charlie">
				<figure><img src="assets/about/charlie.png" alt="Charlie" width="200" height="200" />
					<figcaption>Pool. Shark.</figcaption>
				</figure>
					
		
		<h2>Charlie Simpson</h2>	
			<p>Charlie brings the classy to the class!</p>

					<blockquote>I'm the developer behind the designer behind the musician behind the athlete behind the dude.</blockquote>

						<section class="tags">
												
													<ul class="elements1">
														<li>Web Design</li>
															<li>Front-end Development</li>
													</ul>
												
													<ul class="elements2">
														<li>Something</li>
															<li>Another Thing</li>
															<li>and more stuff</li>
													</ul>
												
					<ul class="elements3">
						<li><a href="portfolio.php"><div class="box">&nbsp;</div>Portfolio Site</a></li>
						<li><a href="interview_charlie.php"><div class="box">&nbsp;</div>Interview</a></li>
					</ul>
																										 
														
									</section>         
			
			</article>
<!-- end #charlie -->        

<article id="nate">
<figure>
	<img src="assets/about/nate.jpg" alt="Nate" width="200" height="200" />
	<figcaption>Into The Abstract</figcaption>
</figure>

<h2>Nate Goldman</h2>	
<p>Nate lives for the challenge of a good problem. Git is his religion and the terminal is his temple. In his spare time he wonders what it would be like to have spare time.</p>

<blockquote>Find me a good burrito and I'll give you the world.</blockquote>

<section class="tags">
	<ul class="elements1">
	<li>User Interface Design</li>
	<li>Front-end Development</li> 
	<li>Back-end Development</li>
	</ul>

	<ul class="elements1">
		<li>Object-oriented JavaScript</li>
		<li>Hardcore Server-side Coding</li>
	</ul>

	<ul class="elements2">
		<li>HTML5</li>
		<li>CSS3</li>
		<li>Ruby</li>
		<li>Sinatra</li>
		<li>Rails</li>
		<li>Node.js</li>
	</ul>

					<ul class="elements3">
						<li><a href="portfolio.php"><div class="box">&nbsp;</div>Portfolio Site</a></li>
						<li><a href="interview_nate.php"><div class="box">&nbsp;</div>Interview</a></li>
					</ul>
</section>

			</article>
		</section>
<!-- end #nate -->

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
				<p>Charlie has an uncle named OJ. Enough said.</p>
			</section>
		</aside>
	</section>

<?php include 'footer.php'; ?>