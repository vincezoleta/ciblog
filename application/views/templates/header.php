<html>
		<head>
			<!-- <?php echo base_url(); ?> -->
			<title>Info Board</title>
			<link rel="stylesheet"  type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
			<script type="text/javascript" src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
		</head>
	 	<body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">Info Board</a>
				</div>
				<div id="navbar">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url(); ?>about">About</a></li>
						<li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
						<li><a href="<?php echo base_url();?>categories">Categories</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php if(!$this->session->userdata('logged_in')) : ?>
							<li><a href="<?php echo base_url();?>users/login">Sign In</a></li>
							<li><a href="<?php echo base_url();?>users/register">Sign Up</a></li>
						<?php endif; ?>
						<?php if($this->session->userdata('logged_in')) : ?>
						<li><a href="<?php echo base_url();?>posts/create">Create Post</a></li>
						<li><a href="<?php echo base_url();?>categories/create">Create Category</a></li>
						<li><a href="<?php echo base_url();?>users/logout">Logout</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</nav>

		<div class=container>
			<!-- Flash Messages -->
			<?php if($this->session->flashdata('user_registered')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('post_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('post_updated')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('category_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('post_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('login_failed')): ?>
				<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('login_successful')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_successful').'</p>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('logout_successful')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('logout_successful').'</p>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('category_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
			<?php endif; ?>