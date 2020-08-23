<h2><?= $title ?></h2>

<?php foreach ($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<small class="post-date"><?php echo "Posts on: ". $post['created_at']; ?> in <strong><?php echo $post['name'];?></strong></small> <br>
	<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>">
	<?php echo word_limiter($post['body'], 60); ?> <br><br>
	<p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>

<?php endforeach; ?>
