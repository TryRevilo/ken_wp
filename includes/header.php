<style type="text/css">
	.main-page-container {
		width: 80%;
		margin: 0 auto;
		padding: 0 12px;
	}

	section {
		padding: 22px 0;
	}

	.navbar-default {
		z-index: 99999 !important;
	}

	.tagline {
		font-size: 60% !important;
	}
</style>

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="assets/images/guy.jpg" alt="">
			<span class="title">Kennedy Chadianya</span>
			<span class="tagline">Advocate Of The Highcourt Of Kenya</span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">

			<div class="navbar-header">
				<!-- defective button on original template -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="navbar-collapse collapse">

				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="about.html">Practice Areas</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="about.html">Our People</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Item</a></li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="about.html">Contact Us</a></li>
				</ul>

			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/layout/assets/js/template.js"></script>