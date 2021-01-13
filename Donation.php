<html>
<head>
<link rel= "stylesheet"  href = " Donation.css ">
</head>
    <body>
        <img src="55.png" height="100" width="300" alt="logo">    
       <nav> 
           <a href="http://localhost/OOProject/EmployeeHomepage.php">HOME</a>
           <a href="#">DONATION</a>
           <a href="http://localhost/OOProject/Volunteering.php">VOLUNTEERING</a>
           <a href="#">REPORTS</a>
           <a href="http://localhost/OOProject/RefundDonation.php" class="button">REFUND DONATION</a>
           <a href="http://localhost/OOProject/Login.php">LOGOUT</a>

</nav>
        <div id= "start">
     <h1 style="color:darkblue">DONATION FORM</h1>
          
     <hr>
     <form action="DonationController.php" method="post">
     <label for="DonorName" style="color:darkslategray"><p>Donor Name</p></label>
     <input type="text" name="DonorName" required>
            
     <label for="DateTime" style="color:darkslategray"><p>DateTime</p></label>
     <input type="datetime-local" name="DateTime" required>
            
    <label for="DonationItemsType" style="color:darkslategray"><p>Donation Items Type</p></label>
     <select name="DonationItemsType" id="DonationItemsType">
        <option value="Money">Money</option>
        <option value="Furniture">Furniture</option>
        <option value="Games">Games</option>
        <option value="Clothes">Clothes</option>
        <option value="Electronics">Electronics</option>
     </select>
            
    <label for="PaymentMethod" style="color:darkslategray"><p>Payment Method</p></label>
     <select name="PaymentMethod" id="PaymentMethod">
        <option value="Visa">Visa</option>
        <option value="Cheque">Cheque</option>
        <option value="Cash">Cash</option>
        <option value="No Payment">No Payment</option>
        <option value="Bank Transfer">Bank Transfer</option>
        <option value="Fawry">Fawry</option>
     </select>
            
     <label for="Receiver" style="color:darkslategray"><p>Receiver Name</p></label>
     <input type="text" name="Receiver" required>
    
     <label for="Amount" style="color:darkslategray"><p>Amount</p></label>
     <input type="number" name="Amount" required>
            
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
            
     <label for="Number" style="color:darkslategray"><p>Number</p></label>
     <input type="tel" name="Number" required>
            
     <label for="Address" style="color:darkslategray"><p>Address</p></label>
     <input type="text" name="Address" required>
     
     
     
    <label for="DonationItemsValue" style="color:darkslategray"><p>Donation Items Value</p></label>
    <input type="text" name="DonationItemsValue" required>
    
     <button onclick="window.location.href='http://localhost/OOProject/Donation2.php';" type="submit" id="register">SUBMIT</button>
     </form>
     </div>
    </body>
</html>