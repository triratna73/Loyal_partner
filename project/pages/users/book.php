<?php
$title = "Booking";
$conn= new DatabaseTable('bookings');
$available="";
if(isset($_POST['book'])){
    unset($_POST['book']);
    $available="yes";
    $chk=$conn->find('prop_id',$_POST['prop_id']);
    if(true){
        foreach($chk as $key){
            if($available=="no"){
                break; 
            }
            else{
            if($key['prop_id']==$_POST['prop_id']){
                $start_time = strtotime($_POST['start_time']);
                $end_time = strtotime($_POST['end_time']);
                $packfrom = strtotime($key['start_time']);
                $packto = strtotime($key['end_time']);

                if(

                    
                (($start_time >= $packfrom && $packto >= $end_time) && ($packfrom < $end_time && $start_time < $packto)) || 
                
                (($packfrom <= $start_time && $packto <= $end_time) && ($packfrom < $end_time && $packto > $start_time))||
                
                (($packfrom >= $start_time && $end_time <= $packto) && ($packfrom < $end_time && $packto > $start_time )) ||

                (($packfrom >=$start_time && $packto <= $end_time) && ($packfrom < $end_time && $packto > $start_time))
                
                
                
                
                )
                
                
                
                {
                    $available="no";
                    // echo "<script>alert('Sorry, this has already been booked in the time frame you selected.');</script>"
                }
                else{
                    $available="yes";
                   // echo "<script>alert('Success');</script>";
                }
            }
            else{
                $inst=$conn->insert($_POST);
                header('location:index.php?page=history');
            }
        }
             }
    
    }
    else{
        $vari="chaina";
    }
    
    if($available=="no"){
        echo "<script>alert('Sorry, this has already been booked in the time frame you selected.');
        window.location.href='index.php';
        </script>";
    }
    else{
        $inst=$conn->insert($_POST);
        header('location:index.php?page=history');
    }

}
$content=loadTemplate('../templates/users/bookTemplate.php', ['available'=>$available]);
?>