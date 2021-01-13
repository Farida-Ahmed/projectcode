<html>
<head>
<link rel= "stylesheet"  href = " Donation.css ">
</head>
    <body>
        <img src="55.png" height="100" width="300" alt="logo">    
       <nav> 
           <a href="http://localhost/OOProject/EmployeeHomepage.php">HOME</a>
           <a href="http://localhost/OOProject/Donation.php">DONATION</a>
           <a href="http://localhost/OOProject/Volunteering.php">VOLUNTEERING</a>
           <a href="#">REPORTS</a>
           <a href="#" class="button">REMOVE VOLUNTEER</a>
           <a href="http://localhost/OOProject/Login.php">LOGOUT</a>

</nav>
     <div id="start">
     <h1 style="color:darkblue">REMOVE VOLUNTEER</h1>
          
     <hr>
     <form action="RemoveVolunteerController.php" method="post">
     <label for="VolunteerID" style="color:darkslategray"><p>Volunteer ID</p></label>
     <input type="number" name="Volunteer ID" required>
     <button onclick="window.location.href='http://localhost/OOProject/RemoveVolunteer2.php';">
      REMOVE
    </button>
     </form>
     </div>
    </body>
</html>