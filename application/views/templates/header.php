<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<title>CiBlog</title>
	<!-- CKEditor	-->
	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>
<body>
<!-- Navbar	-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="<?php echo base_url(); ?>">CiBlog</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>categories/index">Categories</a>
			</li>
		</ul>
	<ul class="nav navbar-nav nav-bar-right">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Posts</a>
		</li>
	</ul>

		<!--		<form class="form-inline my-2 my-lg-0">-->
		<!--			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
		<!--			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
		<!--		</form>-->

	</div>
</nav>
<!-- Container	-->
<div class="container-fluid">


