<?php
	$title = "Local Partners Pty Ltd";
	$connToInsert = new DatabaseTable('users');
	
	if(isset($_POST['registerstaff'])){
		unset($_POST['registerstaff']);
		$connToInsert-> insert($_POST);
		var_dump($_POST);
		header('location:index.php?page=staff'); 
	}

	if(isset($_GET['sid'])){
		$conn = new DatabaseTable('users');
		$dataa=$conn->find('user_id',$_GET['sid']);
		$data=$dataa->fetch();
	}

	$content = loadTemplate('../templates/admin/registerStaffTemplate.php', []);//load template
?>