<?php
include_once"RemoveVolunteerModel.php";
$VolunteerID=$_REQUEST["VolunteerID"];
$UseObject=User::RemoveVolunteer($VolunteerID);
?>