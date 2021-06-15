<?php 
	$title = "Manage Property";
	$data = [];
	if(isset($_POST['val_insert'])){
		$conn = new DatabaseTable('properties');
		unset($_POST['prop_id']);
		unset($_POST['val_insert']);
		$conn->insert($_POST);
		header('Location:index.php?page=manageproperty');
	}
	
	if(isset($_POST['val_update'])){
		$conn = new DatabaseTable('properties');
		unset($_POST['val_update']);
		$conn->update($_POST,'prop_id');
		header('Location:index.php?page=manageproperty');
	}

	if(isset($_GET['pid'])){
		$conn = new DatabaseTable('properties');
		$dataa=$conn->find('prop_id',$_GET['pid']);
		$data=$dataa->fetch();
	}

	$content = loadTemplate('../templates/admin/addupdatepropertyTemplate.php', ['data'=>$data]);//load template 
?>