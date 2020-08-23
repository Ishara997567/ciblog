<h2><?= $title;	?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $posts['id']; ?>">
	<label>Title</label>
	<input type="text" class="form-control" name="title" value="<?php echo $posts['title']; ?>">
</div>
<div class="form-group">
	<label>Body</label>
	<textarea id="editor1" class="form-control" name="body"><?php echo $posts['body']; ?></textarea>
</div>

<button type="submit" class="btn btn-primary">Save</button>
</form>
