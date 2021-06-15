<?php
$title="Check Availability";
$connB=new DatabaseTable('bookings');
$connP=new DatabaseTable('properties');
if(isset($_GET['pid'])){
$findthebook=$connB->find("prop_id",$_GET['pid']);
$findtheprop=$connP->find("prop_id",$_GET['pid']);
}
$content = loadTemplate('../templates/admin/checkavailabilityTemplate.php', ['findtheprop'=>$findtheprop,'findthebook'=>$findthebook]);

?>