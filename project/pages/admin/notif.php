<?php 
	$title = "Notifications";
	$conn = new DatabaseTable('notification');
	$data=$conn->findAll('notification');

	if(isset($_GET['did'])){
		$del_status = $conn->delete("notif_id",$_GET['did']);
		if($del_status){
		header('Location:index.php?page=notif');
		}
	}

	$content = loadTemplate('../templates/admin/notifTemplate.php', ['data'=>$data]);//load template 
?>