<h2><?php echo $post['title'];?></h2>
<small class="post-date">Posted on: <?php echo $post['created _at']; ?></small></br>
<center><img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<?php if($this->session->userdata('user_id') == $post['user_id']) : ?>
	<hr>
	<a class="btn btn-warning pull-left" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']; ?>">Edit</a> 
	<?php echo form_open('/posts/delete/'.$post['id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger pull-left">
	</form>
<?php endif; ?><br>
<hr>
</center><h3>Comments</h3>
<?php if($comments) :?>
	<?php foreach ($comments as $comment) : ?>	
		<div class="well">
			<h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name'];?></strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No Comments to Display</p>
</center>
<?php endif; ?>
<hr>
<div class=container >
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
<div class='col-md-4'>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button class="btn btn-primary" type="submit">Submit</button>
	</div>
</form>

