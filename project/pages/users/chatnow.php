<?php
    $title="CHAT";
    $conn = new DatabaseTable('messages');
    $message=array();
    $agent="";
    $check=$conn->find("message_by",$_SESSION['username']);
    $num=$check->fetch();
    if($num){
        $agent=$num['message_to'];
    }
    if(isset($_POST['send'])){
        if($num){
            if($num['message_to']=='not_allocated'){
                unset($_POST['send']);
                $agent='not_allocated';
                $newValue=[
                    'message'=>$_POST['message'],
                    'message_by'=>$_SESSION['username'],
                    'message_to'=>'not_allocated'
                ];
                $sendmes=$conn->insert($newValue);
                
            }
            else{
                unset($_POST['send']);
                $newValue=[
                    'message'=>$_POST['message'],
                    'message_by'=>$_SESSION['username'],
                    'message_to'=>$num['message_to']
                ];
                $agent=$num['message_to'];
                $sendmes=$conn->insert($newValue);
            }
        }
        else {
            unset($_POST['send']);
            $newValue=[
                'message'=>$_POST['message'],
                'message_by'=>$_SESSION['username'],
                'message_to'=>'not_allocated'
            ];
            $sendmes=$conn->insert($newValue);
            $agent='not_allocated';
        }
        
    }
    $message=$conn->gettingChat($_SESSION['username'],$agent);
    $content=loadTemplate('../templates/users/chatnowTemplate.php', ['message'=>$message]);
?>