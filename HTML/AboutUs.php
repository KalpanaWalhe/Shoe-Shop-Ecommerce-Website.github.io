<?php

               //Connection for database
               $conn = new mysqli('localhost','root','','register');
               //Select Databas
               $sql = "SELECT * FROM register";
               $result = $conn->query($sql);
               session_start();  
               ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="stylesheet" href="./CSS/style6.css">
    <link rel="stylesheet" href="./CSS/all.css">
    <link rel="stylesheet" href="./CSS/AboutUs.css">
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
                
<!-- SideNavBar -->
<section>
            

            <!-- The form -->

             <input type="checkbox" id="check">
             <label for="check">
                <i class="fas fa-bars" id="btn" class="pos"></i>
                <i class="fas fa-times" id="cancel"></i>
             </label>
            
             <div class="sidebar">
             <header>SHOE SHOP</header>
             <ul>

                <li><a href="./Index.php"><i class="fas fa-home"></i>Home</a></li>

                <li><a href="#" ><i class="fas fa-stream"></i>Products </a>
                    <ul >
                    <li><a href="./Men.php">   Men</a></li>
                    <li><a href="./Shoe Shopping/women.php">  Women</a></li>
                    </ul>
                </li>
                
                <li><a href="./Login.php"><i class="fas fa-user"></i>My Account</a></li>
                
                <li><a href="AboutUs"><i class="far fa-question-circle"></i>About</a></li>
                
                <li><a href="./ContactUs.php"><i class="far fa-envelope"></i>Contact</a></li>
            </ul>
            </div>

            <?php 
                        if(!isset($_SESSION['mail'])){
                         header('location:Login.php');  
                        }
            ?> 
            <a href="Index1.php" class="btn" style="margin-left: 85%;">Go Shop &nbsp;<i class="fas fa-arrow-right"></i></a>

 <section>
     <div class="row1">
         <div class="col2">
        <h1>About Us</h1>
        <h3>Since 2016 Shoe Shop has been rendering its services to its valued customers by offering quality products.Since its inception, the company has not only maintained a good reputation of manufacturing high quality footwear for all segments but has also been providing shoes in accordance with the changing fashions and trends.</h3>
        </div>
        <div class="col2">
            <img src="./images/1.png" alt="" width="100%">
        </div>

        <div class="row1">
        <div class="col2">
            <img src="./images/3.png" alt="" width="100%">
        </div>
        <div class="col2">
        <h1>Our Mission</h1>
        <h3>The mission of Nice Footwear is to efficiently and effectively satisfy our customer’s needs. This means that we consider our clients as partners, we involve suppliers in a process of continuing improvement and we work to perfect our processes and corporate organisation to create a professional team that has a reputation for being the very best.</h3>
        </div>

        <div class="row1">
        <div class="col2">
        <h1>Our Vision</h1>
        <h3>To build a culture of operational excellence with fair business practices, and play a key role in providing quality footwear for the average Indian at affordable prices.</h3>
        </div>
        <div class="col2">
            <img src="./images/2.png" alt="" width="100%">
        </div>

        <div class="row1">
        <div class="col2">
            <img src="./images/4.png" alt="" width="100%">
        </div>
        <div class="col2">
        <h1>Our Values</h1>
        <h3>1) &nbsp; Doing work correctly and following through on commitments <br>
            2) &nbsp;passion as a drive for excellence <br>
            3) &nbsp;competing fairly on the market as a team <br>
            4) &nbsp;helping our personnel to fulfil their potential <br>
            5) &nbsp; transparency, integrity and honesty <br></h3>
                   </div>
 </section>

</section>
</body>
</html>