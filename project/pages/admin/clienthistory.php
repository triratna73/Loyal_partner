<?php

$title = "Client Booking Details";
$conn= new DatabaseTable('properties');
if(isset($_GET['uid'])){
$findAllBook=$conn->booking($_GET['uid']);
}
$connB= new DatabaseTable('bookings');
$connN=new DatabaseTable('notification');
if(isset($_GET['action'])){
    $connU=new DatabaseTable('users');
    $bookingdet=$connB->find("book_id",$_GET['bod']);
    foreach($bookingdet as $key){
        $usrdet=$connU->find("user_id",$key['user_id']);
        foreach($usrdet as $value){
            $msg="Your booking was canceled by our staff: ".$_SESSION['username'];
         $values=[
        'notif_title' => "Booking Got Canceled:",
        'notif_msg' => $msg,
        'role' => $value['username']
    ];
    $inst=$connN->insert($values);
    $connB->delete("book_id",$_GET['bod']);
        }
    }
    

    header('location:index.php?page=findclients');
}


$content=loadTemplate('../templates/admin/clienthistoryTemplate.php', ['findAllBook'=>$findAllBook]);
?>