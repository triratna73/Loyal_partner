<?php
	$title = "Local Partners Pty Ltd";
	$connToInsert = new DatabaseTable('users');
	
	if(isset($_POST['usersubmit'])){
		// var_dump($_POST);
		unset($_POST['usersubmit']);
		$connToInsert-> insert($_POST);
		header('location:index.php?page=login'); 
	}

	$content = loadTemplate('../templates/users/registerTemplate.php', []);//load template
?>