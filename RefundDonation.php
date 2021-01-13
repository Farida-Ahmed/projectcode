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
           <a href="#" class="button">REFUND DONATION</a>
           <a href="http://localhost/OOProject/Login.php">LOGOUT</a>

</nav>
     <div id="start">
     <h1 style="color:darkblue">REFUND DONATION RECEIPT</h1>
          
     <hr>
     <form action="RefundDonationController.php" method="post">
     <label for="DonationReceiptID" style="color:darkslategray"><p>Donation Receipt ID</p></label>
     <input type="number" name="DonationReceiptID" required>
     <button type="submit" id="register">REFUND</button>
     </form>
     </div>
    </body>
</html>