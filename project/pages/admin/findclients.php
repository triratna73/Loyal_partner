<?php 
	$title = "Find Clients";
	$conn = new DatabaseTable('users');
	$data=$conn->find('role','user');
	$content = loadTemplate('../templates/admin/findclientsTemplate.php', ['data'=>$data]);//load template 
?>