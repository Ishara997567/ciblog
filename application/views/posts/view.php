<h2><?php echo $posts['title']; ?></h2>
<small class="post-date"><?php echo "Posts on: ". $posts['created_at']; ?></small> <br>

<div class="post-body">
	<?php echo $posts['body']; ?>
</div>

<hr>
<a href="edit/<?php echo $posts['slug'];?>" class="btn btn-success pull-left">Edit</a>

<?php echo form_open('posts/delete/'.$posts['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>
