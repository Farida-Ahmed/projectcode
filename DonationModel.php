<?php
include_once"DBConnection.php";
class DonationReceipt
{
  public $ID;
  public $DonorName;
  public $DateTime;
  public $DonationItemsTypeObj; 
  public $PaymentMethodObj; 
  public $Receiver;
  public $Amount;
  public $ActivityName; 
  public $Number;
  public $Address;
  public $DonationItemsValue);
  
  public static function InsertDonation($DonorName, $DateTime, $DonationItemsType, $PaymentMethod, $Receiver, $Amount, $ActivityName, $Number, $Address, $DonationItemsValue)
	{
        $conn = DBConnection::getInstance();
		$sql1="insert into donationreceipt(DonorName,DateTime,ItemType,PaymentMethod,Receiver, Amount,ActivityName,Number,Address) values ('$_POST[DonorName]','$_POST[DateTime]','$_POST[DonationItemsType]','$_POST[PaymentMethod]','$_POST[Receiver]', '$_POST[Amount]', '$_POST[ActivityName]','$_POST[Number]','$_POST[Address]')";
        mysqli_query($conn,$sql1);
      
        $sql2="select ID from donationreceipt where DonorName=$this->DonorName";  
        $resultID=mysqli_query($conn,$sql2);
      
        $sql3="insert into donationitemsvalue(DonationID,Value) values 
        ($resultID,'$_POST[DonationItemsValue]',)";
        mysqli_query($conn,$sql3);
    }


}
?>