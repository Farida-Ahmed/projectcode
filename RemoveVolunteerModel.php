<?php
include_once"DBConnection.php";
include_once"VolunteeringModel.php";
class User
{ 
    
    public $ID;
    public $IsDeleted;
        public static function RemoveVolunteer($VolunteerID)
       {
        $sql="update user set IsDeleted='"1"' where ID="this->VolunteerID"";
		mysql_query($sql);
       }
}
?>