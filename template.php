<!doctype HTML>

<!-- head -->

<html lang="en">
<head>
	<title>Template | BareCSS</title>
	
	<!-- meta -->
	<meta charset=utf-8>
	<meta name="description" content="BareCSS template file">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	
	<!-- css -->
	
	<link href="css/bare.min.css" rel="stylesheet">
</head>

<!-- body -->

<body>
	
<!-- nav -->

<nav><!-- use fx attribute for fixed positioning -->
	<label>
		<input type="checkbox">
		<header>
			<a href="#"><b>Know</b>me</a>
		</header>
		
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li>
				<a>Feedback</a>
				<menu>
					<menuitem><a href="contactus.php">Contact Us</a></menuitem>
					<!-- <menuitem><a href="#four">Facebook</a></menuitem>
					<menuitem><a href="#five">Instagram</a></menuitem> -->
				</menu>
			</li>
		</ul>
	</label>
</nav>


<!-- standard section for content -->

<section mt->
	<h1>Standard content</h1>
	
	<p>Paragraph one lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
	
	<p>Paragraph two exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
</section>

<!-- section with grid -->

<section>
	<h2>Section with grid</h2>
	
	<grid>
		<div col="1/3">
			<h3>1/3 grid</h3>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		
		<div col="1/3">
			<h3>1/3 grid</h3>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		
		<div col="1/3">
			<h3>1/3 grid</h3>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</grid>
</section>

</body>

</html>