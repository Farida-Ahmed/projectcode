<html>
<head>
<link rel= "stylesheet"  href = " Donation.css ">
</head>
    <body>
        <img src="55.png" height="100" width="300" alt="logo">    
       <nav> 
           <a href="http://localhost/OOProject/EmployeeHomepage.php">HOME</a>
           <a href="http://localhost/OOProject/Donation.php">DONATION</a>
           <a href="#">VOLUNTEERING</a>
           <a href="#">REPORTS</a>
           <a href="http://localhost/OOProject/RemoveVolunteer.php" class="button">REMOVE VOLUNTEER</a>
           <a href="http://localhost/OOProject/Login.php">LOGOUT</a>

</nav>
        <div id= "start">
     <h1 style="color:darkblue">NEW VOLUNTEER FORM</h1>
          
     <hr>
     <form action="VolunteeringController.php" method="post">
     <label for="DonorName" style="color:darkslategray"><p>Volunteer Name</p></label>
     <input type="text" name="VolunteerName" required>
     
     <label for="Number" style="color:darkslategray"><p>Number</p></label>
     <input type="tel" name="Number" required>
     
     <label for="VolunteerEmail" style="color:darkslategray"><p>Volunteer Email</p></label>
     <input type="text" name="VolunteerEmail" required>
     
     <label for="Address" style="color:darkslategray"><p>Address</p></label>
     <input type="text" name="Address" required>
            
    <label for="FreeDay" style="color:darkslategray"><p>Free Day</p></label>
     <select name="FreeDay" id="FreeDay">
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thuresday">Thuresday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
     </select>
     
     <label for="FreeTime" style="color:darkslategray"><p>FreeTime</p></label>
     <input type="time" name="FreeTime" required>
            
     <label for="ActivityName" style="color:darkslategray"><p>Activity Name</p></label>
     <select name="ActivityName" id="ActivityName">
        <option value="Foreign Convoys">Foreign Convoys</option>
        <option value="Acheiving Dreams">Acheiving Dreams</option>
        <option value="Literacy">Literacy</option>
        <option value="Special Abilities">Special Abilities</option>
        <option value="Feeding Poor">Feeding Poor</option>
        <option value="Medical Convoys">Medical Convoys</option>
        <option value="Used Clothing">Used Clothing</option>
        <option value="Resala Training Centers">Resala Training Centers</option>
        <option value="Friends Of the Environment">Friends Of the Environment</option>
        <option value="Aid for poor families">Aid for poor Families</option>
        <option value="Ongoing Charity">Ongoing Charity</option>
     </select>
            
    <label for="CarAvailability" style="color:darkslategray"><p>Car Availability</p></label>
     <select name="CarAvailability" id="CarAvailability">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
     </select>   
     <button onclick="window.location.href='http://localhost/OOProject/Volunteering2.php';" type="submit" id="register">SUBMIT</button>
     </form>
     </div>
    </body>
</html>