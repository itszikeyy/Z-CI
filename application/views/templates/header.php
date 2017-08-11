<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>

	<?php
		echo link_tag('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', 'stylesheet', 'text/css');
		echo link_tag('assets/css/custom.css', 'stylesheet', 'text/css');
		echo link_tag('assets/sweetalert-master/dist/sweetalert.css');
	?>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(). 'assets/js/custom.js'; ?>"></script>
	<script src="<?php echo base_url(). 'assets/sweetalert-master/dist/sweetalert.min.js'; ?>"></script>
	
</head>
<body>

<!-- navigation bar starts here -->

