<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hello World</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href=<?php echo get_template_directory_uri() . "/style1.css" ?>>
</head>
<body>
<div id="slideout-menu">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Contact</a></li>
		<li>
<input type="text" placeholder="Search...">
<br>
<a href="#">
</a>
		</li>
	</ul>
</div>
	<nav>
		<div id="logo-img">
			<img src=<?php echo get_template_directory_uri() . "/img/logo1.jpg"?> alt="empty">
		</div>
		<div id="menu-icon">
			<i class="fa fa-bars"></i>
		</div>
		<ul>
			<li><a class="active" href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact</a></li>
			<li>
			<div id="search-icon">
			<i class="fa fa-search"></i>
			</div>
			</li>
		</ul>
	</nav>

	<div id="searchbox">
		<input type="text" placeholder="Search Here">
	</div>

	<div id="banner">
	<h1>Jack Sparrow</h1>
	<h3>premium pirate of carribean</h3>
	</div>

	<main>
	<a href="#">
		<h2 class="section-heading">Blogs</h2>
	</a>

<section>
	<div class="card">
		<div class="card-image">
		<a href="#">
		<img src=<?php echo get_template_directory_uri() . "/img/img2.jpg"?> alt="empty">
		</a>
		</div>

		<div class="card-description">
			<a href="#">
			<h3>The Blog Title</h3>
			</a>
			<p>
			Lorem ipsum dolor sit, amet consecum distinctio partita is a iose
			</p>
			<a href="#" class="btn-readmore">Read more</a>
		</div>

	</div>

	<div class="card">
		<div class="card-image">
		<a href="#">
		<img src=<?php echo get_template_directory_uri() . "/img/img3.jpg"?> alt="empty">
		</a>
		</div>

		<div class="card-description">
			<a href="#">
			<h3>The Blog Title</h3>
			</a>
			<p>
			Lorem ipsum dolor sit, amet consecum distinctio partita is a iose
			</p>
			<a href="#" class="btn-readmore">Read more</a>
		</div>
	</div>
</section>
<h2 class="section-heading">All Projects</h2>
<section>
	<div class="card">
		<div class="card-image">
		<a href="#">
		<img src=<?php echo get_template_directory_uri() . "/img/img4.jpg"?> alt="empty">
		</a>
		</div>

		<div class="card-description">
			<a href="#">
			<h3>The Project Title</h3>
			</a>
			<p>
			Lorem ipsum dolor sit, amet consecum distinctio partita is a iose
			</p>
			<a href="#" class="btn-readmore">Read more</a>
		</div>

	</div>

	<div class="card">
		<div class="card-image">
		<a href="#">
		<img src=<?php echo get_template_directory_uri() . "/img/img5.jpg"?> alt="empty">
		</a>
		</div>

		<div class="card-description">
			<a href="#">
			<h3>The Project Title</h3>
			</a>
			<p>
			Lorem ipsum dolor sit, amet consecum distinctio partita is a iose
			</p>
			<a href="#" class="btn-readmore">Read more</a>
		</div>
	</div>
</section>

<h2 class="section-heading">Source Code</h2>
<section class="section-source">
<p>
Lorem ipsum dolor sit amet, officia excepteur ex fugiat reprehenderit enim labore culpa sint ad nisi Lorem pariatur mollit ex esse exercitation amet. Nisi anim cupidatat excepteur officia. Reprehenderit nostrud nostrud ipsum Lorem est aliquip amet voluptate voluptate dolor minim nulla est proident. Nostrud officia pariatur ut officia. Sit irure elit esse ea nulla sunt ex occaecat reprehenderit commodo officia dolor Lorem duis laboris cupidatat officia voluptate. Culpa proident adipisicing id nulla nisi laboris ex in Lorem sunt duis officia eiusmod. Aliqua reprehenderit commodo ex non excepteur duis sunt velit enim. Voluptate laboris sint cupidatat ullamco ut ea consectetur et est culpa et culpa duis.
</p>
<a href="#" class="btn-readmore">Github Profile</a>
</section>

<footer>
<div id="left-footer">
<h3>Quick links</h3>
<p>
	<ul>
		<li>
			<a href="#">Home</a>
		</li>
		<li>
			<a href="#">About</a>
		</li>
		<li>
			<a href="#">Privary Policy</a>
		</li>
		<li>
			<a href="#">Contact</a>
		</li>
	</ul>
</p>
</div>

<div id="right-footer">
<h3>Follow us on</h3>
<div id="social-media-footer">
<ul>
	<li>
		<a href="#">
			<i class="fa fa-youtube"></i>
		</a>
	</li>
	<li>
		<a href="#">
			<i class="fa fa-github"></i>
		</a>
	</li>
	<li>
		<a href="#">
			<i class="fa fa-facebook"></i>
		</a>
	</li>
</ul>
</div>
<p>This is footer. This website is made by Niraj Shrestha</p>
</div>
</footer>
</main>
	<script src=<?php echo get_template_directory_uri() . "/main.js" ?>></script>
</body>
</html>
