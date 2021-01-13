<?php
include_once"DBConnection.php";
class UserLogin
{
    public $USERID;
	public $Password;

public static function login($USERID,$Password)
	{
    $conn = DBConnection::getInstance();
	$sql="SELECT * FROM userlogin WHERE UserID='$USERID' and Password='$Password'";	
	$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if ($row=mysqli_fetch_array($result))
		{
			return new UserLogin($row[0]); 		
		}
	return NULL;
	}
}
?>