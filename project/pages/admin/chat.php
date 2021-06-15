<?php
$title="Chat";
$conn= new DatabaseTable('messages');
$message=array();
// ************************-HANDLED CHATS--************************************

$handledchat=$conn->find('message_to',$_SESSION['username']);
$handledname=array();
foreach($handledchat as $value){
    if(in_array($value['message_by'],$handledname)){}
    else{
        array_push($handledname,$value['message_by']);
    }
}

// ************************--UN-HANDLED CHATS--************************************

$unhandledchat=$conn->find('message_to','not_allocated');
$unhandledname=array();
foreach($unhandledchat as $value){
    if(in_array($value['message_by'],$unhandledname)){}
    else{
        array_push($unhandledname,$value['message_by']);
    }
}

if(isset($_GET['handle'])){
    if(in_array($_GET['handle'],$unhandledname)){
        $handlingclient=$conn->handlingChat($_SESSION['username'],$_GET['handle']);
        if($handlingclient){
            echo '<script>alert("Success.!");</script>';
        }
        header('location:index.php?page=chat');
    }
    else{
        echo '<script>alert("Client Already Handled By Another Staff.");</script>';
    }
}

if(isset($_GET['chat'])){
    $message=$conn->gettingChat($_SESSION['username'],$_GET['chat']);
}

if(isset($_POST['send'])){
    if($_POST['message_to']!=" "){
        unset($_POST['send']);
    $sendtoclient=$conn->insert($_POST);
    header('location:index.php?page=chat&chat='.$_POST['message_to']);
    }
    else{
        echo "You have not choosen any Client to chat with..";
    }
}

$content=loadTemplate('../templates/admin/chatTemplate.php', ['handledname'=>$handledname, 'unhandledname'=>$unhandledname, 'message'=>$message]);
?>