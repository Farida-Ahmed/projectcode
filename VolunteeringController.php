<?php
include_once"VolunteeringModel.php";
$VolunteerName=$_REQUEST["VolunteerName"];
$Number=$_REQUEST["Number"];
$VolunteerEmail=$_REQUEST["VolunteerEmail"];
$Address=$_REQUEST["Address"];
$FreeDay=$_REQUEST["FreeDay"];
$FreeTime=$_REQUEST["FreeTime"];
$ActivityName=$_REQUEST["ActivityName"];
$CarAvailability=$_REQUEST["CarAvailability"];
$UseObject=User::InsertinDB_Static($VolunteerName, $Number, $VolunteerEmail, $Address, $FreeDay, $FreeTime ,$ActivityName ,$CarAvailability);
   
?>