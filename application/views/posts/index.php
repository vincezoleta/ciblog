<h2><?= $title ?></h2> 
<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb"src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
		</div>
		<div class="col-md-8">
			<small class="post-date">Posted on: <?php echo $post['created _at']; ?> in <strong> <?php echo $post['name']; ?></strong></small></br>
			<!-- Read more para papasok sa edit at delete button -->
			<?php echo word_limiter($post['body'],60); ?> <!-- <a href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More</a>  -->
			</br></br>
		 	<p><a class="btn btn-default"href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More</a></p>
		</div> 
	</div>
	
<?php endforeach; ?>  