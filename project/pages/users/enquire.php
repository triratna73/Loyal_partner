<?php

$uid=$_SESSION['user_id'];

if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
    $product_id=0;
    $availability="Available";
    if(isset($_GET['pid'])){
        $product_id=$_GET['pid'];
    }
    $conn = new DatabaseTable('properties');
	$data=$conn->find('prop_id',$product_id);
    $title = "Booking And Enquiring";
    $conn2 = new DatabaseTable('bookings');
    $chk=$conn2->find('prop_id',$product_id);
    foreach($chk as $key){
    if($key['prop_id']==$product_id){
        $availability="NotAvailable";
    }
}

    $content = loadTemplate('../templates/users/enquireTemplate.php', ['data'=>$data, 'availability'=>$availability,'uid'=>$uid]);//load template
}
else {
    header('location:index.php?page=login');
}

?>