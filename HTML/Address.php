<!--Check Your Address -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="./CSS/Account1.css">
    <link rel="stylesheet" href="./CSS/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <div class="row">
        <div class="col3">
            <div class="row1">
            <div class="col1">
            <img src="./images/undraw_profile_pic_ic5t.svg" alt="">
            </div>
            </div>
            <div class="row2">
                <div class="col1">
                <STYLE>A {text-decoration: none; color: gray;} </STYLE>
                <h3 class="line"><a href="./Index1.php"><i class="fas fa-shopping-bag"></i>Home</a></h3>
                <h3 class="line"><a href="UserAcc.php"><i class="fas fa-user"></i>MY Account</a></h3>
                <h3 class="line"><a href="order.php"><i class="fas fa-wallet"></i>MY Orders</a></h3>
                <h3 class="line"><a href="Password.php"><i class="fas fa-key"></i>Change Password</a></h3>
                <h3 class=""><a href="Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></h3>
                </div>
            </div>
        </div>

        <div class="col4">
        <div class="row1">
        <h3 style="color: gray;">My Address</h3>
        <div class="col2">
            <table>
                <form action="" method="post">
                    
                    <tr>
                        <td>
                        <label for="adr">Address</label>
                        <input type="text" id="fname"  name="firstname" value="<?php echo($_SESSION['address1']); ?>"><br><br><br><br>
                        </td>

                        <td>
                        <label for="city"> City</label>
                        <input type="text" id="fname"  name="firstname" placeholder="Enter Your City"><br><br><br><br>
                        </td>
                    
                    </tr>
                    
                    <tr>
                        <td>
                        <label for="adr">State</label>
                        <input type="text" id="fname"  name="firstname" placeholder="Enter Your State" ?><br><br><br><br>
                        </td>

                        <td>
                        <label for="city">Zip</label>
                        <input type="text" id="fname"  name="firstname" placeholder="Enter Your zip"><br><br><br><br>
                        </td>
                    </tr>

                    
                    <tr>
                        <td>
                        <input type="submit" value="Confirm">
                    </tr>
                    
                </form>
            </table>
        </div>
        </div>
        </div>
    </div>
</body>
</html>