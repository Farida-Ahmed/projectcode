<?php
include_once"DonationModel.php";
$DonorName=$_REQUEST["DonorName"];
$DateTime=$_REQUEST["DateTime"];
$DonationItemsType=$_REQUEST["DonationItemsType"];
$PaymentMethod=$_REQUEST["PaymentMethod"];
$Receiver=$_REQUEST["Receiver"];
$Amount=$_REQUEST["Amount"];
$ActivityName=$_REQUEST["ActivityName"];
$Number=$_REQUEST["Number"];
$Address=$_REQUEST["Address"];
$DonationItemsValue=$_REQUEST["DonationItemsValue"];
$UseObject=DonationReceipt::InsertDonation($DonorName, $DateTime, $DonationItemsType, $PaymentMethod, $Receiver, $Amount, $ActivityName, $Number, $Address, $DonationItemsValue);
   
?>