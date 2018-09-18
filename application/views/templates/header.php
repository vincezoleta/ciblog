<html>
		<head>
			<!-- <?php echo base_url(); ?> -->
			<title>ciBlog</title>
			<link rel="stylesheet"  type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
			<script type="text/javascript" src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
		</head>
	 	<body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">ciBlog</a>
				</div>
				<div id="navbar">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url(); ?>">HOME</a></li>
						<li><a href="<?php echo base_url(); ?>about">ABOUT</a></li>
						<li><a href="<?php echo base_url(); ?>posts">BLOG</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url();?>posts/create">Create Post</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class=container>
