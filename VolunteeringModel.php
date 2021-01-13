<?php
include_once"DBConnection.php";
class User
{
  public $ID;
  public $Name
  public $TypeObj
  public $Number;
  public $Email;
  public $Address;
  public $IsDeleted;
  public $FreeDayObj;
  public $FreeTimeObj;
  public $ActivityNameObj;
  public $CarAvailability;
  public static function InsertinDB_Static($VolunteerName, $Number, $VolunteerEmail, $Address, $FreeDay, $FreeTime ,$ActivityName ,$CarAvailability)
	{
		$sql1="insert into user(Name,Type,Number,Email,Address) values ('$_POST[VolunteerName]','2','$_POST[Number]','$_POST[Email]','$_POST[Address]')";
        mysqli_query($conn,$sql1);
      
        $sql2="select ID from user where Name=$this->VolunteerName";  
        $resultID=mysqli_query($conn,$sql2);
      
        $sql3="insert into volunteersavailability(FreeDay,FreeTime,VolunteerID,ActivityType,CarAvailability) values 
        ('$_POST[FreeDay]','$_POST[FreeTime]',$resultID, '$_POST[ActivityName]', '$_POST[CarAvailability]')";
        mysqli_query($conn,$sql3);
    }


}
?>