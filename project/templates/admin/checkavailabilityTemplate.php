<article>
<?php
foreach ($findtheprop as $property){
    echo "<h4>Name : ".$property['prop_name'];
    echo "<br>Type : ".$property['prop_type'];
    echo "<br>Address : ".$property['prop_StreetName'].', '.$property['prop_suburb'].', '.$property['prop_state'];
    echo "<br>Detail : ".$property['prop_det'];
    echo "<br>Occupancy : ".$property['prop_occupancy'];
    echo "<br>Price : \$AUS ".$property['price'];

    echo "<br><br><br>Booking Details :</h4><br>";
}
?>
<table>
<tr><th>From date</th> <th> To Date </th><th>Status</th></tr>
<?php
foreach($findthebook as $book){
    echo '<tr><td>'.$book['start_time'].'</td><td>'.$book['end_time'].'</td><td>'.$book['status'].'</td></tr>';
}
?>

</table>
