<?php
	$title = "Add Notification";
	$connToInsert = new DatabaseTable('notification');
	
	if(isset($_POST['addnotif'])){
		unset($_POST['addnotif']);
		$connToInsert-> insert($_POST);
		header('location:index.php?page=notif'); 
	}

	$content = loadTemplate('../templates/admin/addNotifTemplate.php', []);//load template
?>