<?php
$title="Search Hisotry";
$conn= new DatabaseTable('properties');
$findAllBook=$conn->booking($_SESSION['user_id']);
$connB = new DatabaseTable('bookings');
if(isset($_GET['book_id'])){
    $values= [
        "book_id" => $_GET['book_id'],
        "cred_detail" => $_GET['cred-detail'],
        "status" => "Confirmed"
    ];
    $connB->update($values,'book_id');
    header('location:index.php?page=history');
}

if(isset($_GET['action'])){
    $connB->delete("book_id",$_GET['bid']);
    header('location:index.php?page=history');
}


$content = loadTemplate('../templates/users/bookTemplate.php',['findAllBook'=>$findAllBook]);
?>