
<?php  

session_start();  

$connect = mysqli_connect("localhost", "root", "", "register");  
if(isset($_POST["add_to_cart"]))  
{  
     if(isset($_SESSION["shopping_cart"]))  
     {  
          $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
          if(!in_array($_GET["id"], $item_array_id))  
          {  
               $count = count($_SESSION["shopping_cart"]);  
               $item_array = array(  
                    'item_id'               =>     $_GET["id"],  
                    'item_name'               =>     $_POST["hidden_name"],  
                    'item_price'          =>     $_POST["hidden_price"],  
                    'item_quantity'          =>     $_POST["quantity"]  
               );  
               $_SESSION["shopping_cart"][$count] = $item_array;  
          }  
          else  
          {  
               echo '<script>alert("Item Already Added")</script>';  
               echo '<script>window.location="productCart.php"</script>';  
          }  
     }  
     else  
     {  
          $item_array = array(  
               'item_id'               =>     $_GET["id"],  
               'item_name'               =>     $_POST["hidden_name"],  
               'item_price'          =>     $_POST["hidden_price"],  
               'item_quantity'          =>     $_POST["quantity"]  
          );  
          $_SESSION["shopping_cart"][0] = $item_array;  
     }  
}  
if(isset($_GET["action"]))  
{  
     if($_GET["action"] == "delete")  
     {  
          foreach($_SESSION["shopping_cart"] as $keys => $values)  
          {  
               if($values["item_id"] == $_GET["id"])  
               {  
                    unset($_SESSION["shopping_cart"][$keys]);  
                    echo '<script>alert("Item Removed")</script>';  
                    echo '<script>window.location="productCart.php"</script>';  
               }  
          }  
     }  
}  
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
        <h3 class="line"><a href="./Address.php"><i class="fas fa-home"></i>MY Address</a></h3>
        <h3 class="line"><i class="fas fa-wallet"></i>MY Orders</h3>
        <h3 class="line"><a href="./Password.php"><i class="fas fa-key"></i>Change Password</a></h3>
        <h3 class=""><a href="./Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></h3>
        </div>
    </div>
    </div>

    <div class="col4">
    <div class="row1">
         <h3 style="color: gray;">Payment Detail</h3>
    <div class="col2">
        <table>
            <form action="" method="post">
                 
                <tr>
                <td>
                <label for="">First Name</label> <br>
                 <input type="text" id="fname"  name="firstname" value="<?php echo($_SESSION['Fname']); ?>"><br><br><br><br>
                </td>
                
                <td>
                <label for="">Last Name</label><br>
                <input type="text" id="fname"  name="firstname" value="<?php echo($_SESSION['Lname']); ?>"><br><br><br><br>
                </td>
                </tr>

                <tr>        
                <td>
                <label for="">Email Address <br>
                <input type="text" id="fname"  name="firstname" value="<?php echo($_SESSION['mail']); ?>" readonly><br><br><br><br>
                </td>
                
                <td>
                <label for="">Your Contact Number</label><br>
                 <input type="text" id="fname"  name="firstname" value="<?php echo($_SESSION['contact']); ?>"><br><br><br><br>
                </td>
                </tr>

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
                <label for="adr">Delivery in</label>
                <input type="text" id="deliver"  name="Delivery" value="6 to 8 Days" readonly ><br><br><br><br>
                </td>

                <td>
                <?php
                                        //Connection for database
                        $conn = new mysqli('localhost','root','','register');
                        //Select Databas
                        $sql = "SELECT * FROM register";
                        $result = $conn->query($sql);
                        ?>
                        <?php   
                                if(!empty($_SESSION["shopping_cart"]))  
                                {  
                                    $total = 0;  
                                    foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                    {  
                        ?>   <?php
                        } }
                        ?>  
                        <?php   
                        if(!empty($_SESSION["shopping_cart"]))  
                        {  
                        $total = 0;  
                        $fTotal = 5;  
                        foreach($_SESSION["shopping_cart"] as $keys => $values)  
                        {  
                        ?>
                        <?php  
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                            $fTotal = $fTotal + ($values["item_quantity"] * $values["item_price"]);  
                        }  
                        ?>  

                <label for="total">Total Amount</label>
                <input type="text" id="fname"  name="firstname" value="₹ <?php echo number_format($fTotal, 2); ?>" readonly><br><br><br><br>
                </td>
                  <?php  
                                   }  
                                   ?> 
                </tr>
                 
                <tr>
               
                <td>
                    <label for="pay"> Payment</label><br><br>

                    <div>
                    <input  type="radio" id="UPI" name="payment" value="UPI">
                    <label style="color: gray;" for="male">UPI</label><br>
                    <div class="reveal-if-active">
                    <input style="color: gray; margin-left: 2em;" type="radio" id="GPay" name="payment" value="GPay">
                    <label style="color: gray;" for="female">GPay</label><br>
                    <input style="color: gray; margin-left: 2em;" type="radio" id="PhonePe" name="payment" value="PhonePe">
                    <label style="color: gray;" for="female">PhonePe</label><br>
                    <label style="color: gray; padding-left: 1.7em;" for="female">Your UPI ID</label>
                    <input  style="color: gray; margin-left: 1.7em;" type="text" id="Your UPI ID" name="payment">
                    </div><br><br></div>

                    <div>
                    <input type="radio" id="Credit/ Debit /ATM Card" name="payment" value="Credit/ Debit /ATM Card">
                    <label style="color: gray;" for="female">Credit/ Debit /ATM Card</label><br>
                    <div class="reveal1">
                         <table>
                         <tr>
                             
                                 <input style="color: gray; margin-left: 2em;" type="text" placeholder="Enter Card Number" maxlength="12" minlength="12">
                              
                         </tr>
                         <tr>
                              <td>
                             
                              <select name="Month" style="color: gray; margin-left: 2em;width:200px;padding: 1em 2em;">
                                   <option value="january">(1)January</option>
                                   <option value="february">(2)February</option>
                                   <option value="march">(3)March</option>
                                   <option value="april">(4)April</option>
                                   <option value="may">(5)May</option>
                                   <option value="june">(6)June</option>
                                   <option value="july">(7)July</option>
                                   <option value="august">(8)August</option>
                                   <option value="september"(9)>September</option>
                                   <option value="october">(10)October</option>
                                   <option value="november">(11)November</option>
                                   <option value="december">(12)December</option>
                              </select>
                              
                               </td>
                               <td>
                                         <select name="Year" style="color: gray; margin-left: 2em;width:200px;padding: 1em 2em;">
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                   </select>
                               </td>
                          </tr>
                          <tr>
                               <td>
                               <input style="color: gray; margin-left: 2em;width: 57%;"  type="text" placeholder="CVV" maxlength="3" minlength="3">
                               </td>
                               <td>
                                    <input type="submit" style="margin-left: 1.7em;" value="Pay <?php echo number_format($fTotal, 2); ?>">
                               </td>
                          </tr>
                          </table>
                         </div><br><br></div></div>
                         
                         <div>
                         <input type="radio" id="Net Banking" name="payment" value="Net Banking">
                         <label style="color: gray;" for="female">Net Banking</label>
                         <div class="reveal2">
                         <input style="color: gray; margin-left: 2em;" type="radio" id="GPay" name="payment" value="GPay">
                         <label style="color: gray;" for="female">HDFC Bank</label><br>
                         <input style="color: gray; margin-left: 2em;" type="radio" id="PhonePe" name="payment" value="PhonePe">
                         <label style="color: gray;" for="female">ICICI Bank</label><br>
                         <input style="color: gray; margin-left: 2em;" type="radio" id="PhonePe" name="payment" value="PhonePe">
                         <label style="color: gray;" for="female">State Bank of India</label><br>
                         <input style="color: gray; margin-left: 2em;" type="radio" id="PhonePe" name="payment" value="PhonePe">
                         <label style="color: gray;" for="female">Axis Bank</label>
                         </div><br><br></div>
                    
                         <input type="radio" id="Cash on Delivey" name="payment" value="Cash on Delivey">
                         <label style="color: gray;" for="female">Cash on Delivey</label><br><br><br>

                         <div>
                        <a href="./order.php"><h3 style="background-color: #FF1493;padding: 1em 2em;width: 20%;color: white;">Confirm</h3></a></div>
            </form>
           
        </table>
    </div>
    </div>
    </div>
    </div>
</body>
</html>