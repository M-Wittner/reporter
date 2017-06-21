<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Reports Index Page</title>
</head>
<body>

<div id="container">
	<h1>Welcome to Reports Index Page</h1>
	
<!--
	<h2>Create Report</h2>
	<?php echo form_open('site/create'); ?>
	
	<div class="form-cotnrol">
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" placeholder="Title">	
		<input type="submit">
	</div>
	
	<?php echo form_close(); ?>
	
	<hr / >
	
	<h2>Read Reports</h2>
	<?php if(isset($reports)) : foreach($reports as $row) : ?>
	<h2><?php echo anchor("site/delete/$row->id", $row->title); ?></h2>
	<?php endforeach; ?>
	<?php else : ?>
	<h2>No Reports Returned!</h2>
	<?php endif; ?>
	
	<hr />
	<h2>Delete</h2>
	<div>
		To delete click on of the headings.
	</div>
-->
</div>

</body>
</html>