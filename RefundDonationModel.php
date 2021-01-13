<?php
include_once"DBConnection.php";
class DonationReceipt
{ 
    public $ID;
    public $DonorName;
    public $DateTime;
    public $ItemTypeObj;
    public $PaymentMethodObject;
    public $Receiver;
    public $Amount;
    public $ActivityNameObj;
    public $Number;
    public $Address;
    public $IsRefunded;
        public static function RefundDonation($DonationReceiptID)
       {
        $sql="update donationreceipt set IsRefunded='"1"' where ID="this->DonationReceiptID"";
		mysql_query($sql);
       }
}
?>