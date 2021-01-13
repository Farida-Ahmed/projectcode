<?php
include_once "LoginModel.php";
$ID=$_REQUEST["USERID"];
$Password=sha1($_REQUEST["Password"]);
$UseObject=UserLogin::login($ID,$Password);
   if ($UseObject!==NULL)
   {
   //retrive the Permissions	
    session_start();
    $_SESSION["USERID"]=$UseObject;
    header("location: http://localhost/OOProject/EmployeeHomepage.php");
   }
  else{
    header("location: http://localhost/OOProject/Login.php");
  }
?>