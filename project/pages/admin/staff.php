<?php 
	$title = "Staff Members";
	$conn = new DatabaseTable('users');
	$data=$conn->find('role','staff');
	$content = loadTemplate('../templates/admin/staffTemplate.php', ['data'=>$data]);//load template 
?>