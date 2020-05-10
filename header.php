<?php
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<img src="images/zendlogo.jpg" class="img-responsive" alt="header" />
				</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span><span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div> <!-- end of navbar header -->
			<div id="nav-menu" class="collapse navbar-collapse navbar-left">
				<ul class="nav navbar-nav ">
					<li class="active"><a href="#">
							<span class="fa fa-2x fa-home" aria-hidden="true"></span>
							Home
						</a>
					</li>
					<li>
						<a href="#">
							<span class="badge">7</span>
							<span class="fa fa-2x fa-bell"  aria-hidden="true"></span>
							Portfolio
						</a>
					</li>
					<li>
						<a href="#snippets">
							<span class="fa fa-2x fa-binoculars" aria-hidden="true"></span>
							Code Snippets
						</a>
					</li>
					<li>
						<a href="gallery">
							<span class="fa fa-2x fa-image" aria-hidden="true"></span>
							Gallery
						</a>
					</li>
					<li>
						<a href="contact.html">
							<span class="fa fa-2x fa-envelope" aria-hidden="true"></span>
							Contact Me
						</a>
					</li>
				</ul>
			</div> <!-- end of id="menu" -->
			
				<div id="nav-options" class="btn-group pull-right">
					<button type="button" class="btn btn-default dropdown-toggle thumbnail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Games</button>
					<ul class="dropdown-menu">
						<li><a href="#">Lotto Game</a></li>
						<li><a href="#">RoChamBo</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Clear Data</a></li>
					</ul>
				</div>
				
				<form id="search" role="search" class="hidden-xs">
					<div class="input-group">
						<input type="text" class="form-control pull-right" placeholder="search...." />
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</div>
				</form> <!-- end of search -->
			
		</div> <!-- container inside the navbar -->
		

	</nav> <!-- end of navbar -->



?>