<?php

               //Connection for database
               $conn = new mysqli('localhost','root','','register');
               //Select Databas
               $sql = "SELECT * FROM register";
               $result = $conn->query($sql);
               ?>
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
    <title>Cart</title>
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
         <h3 style=" color: gray;">Shopping Cart</h3>
    <div class="col2">
        <table>
                         <tr style="padding-bottom: 7em;">  
                               <th style="padding-right: 15em "><label for="">Product</label></th>   
                               <th style="padding-right: 7em; "><label for="">Quantity</label></th>   
                               <th style="padding-right: 7em"><label for="">Price</label></th>   
                               <th style="padding-right: 7em"><label for="">Total</label></th>   
                               <br>
                          </tr>
                        
                        
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td style="padding-top: 2em;"><?php echo $values["item_name"]; ?></td>  
                               <td style="padding-top: 2em;"><?php echo $values["item_quantity"]; ?></td>  
                               <td style="padding-top: 2em;">₹ <?php echo $values["item_price"]; ?></td>  
                               <td style="padding-top: 2em;">₹ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td style="padding-top: 2em;"><a href="productCart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger" style="color:red"><i class="fas fa-trash-alt"></i></span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          
                          <?php  
                          }  
                          ?>  



                </table>  
               <hr>
                <div class="col-1">
                <table >
                     
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
                          <tr >  
                               <td style="padding-left: 33em; color: #FF1493;">Sub Total</td>  
                               <td style="padding-left: 4.7em;">₹ <?php echo number_format($total, 2); ?></td>   
                          </tr>  
                          <tr>
                               <td style="padding-left: 31em; color: #FF1493;">Shipping Charges</td>
                               <td style="padding-left: 4.7em;"> ₹  5</td>
                          </tr>
                          <tr>
                               <td style="padding-left: 32.4em; color: #FF1493;">Grand Total</td>
                               <td style="padding-left: 4.7em; color: green;">₹ <?php echo number_format($fTotal, 2); ?></td>
                          </tr>
                          <?php  
                          }  
                          ?> 
                </table>
                
              
                <td >
                     <?php 
                        if(!isset($_SESSION['mail'])){
                         header('location:Login.php');  
                        }
                     ?> 
                     
                     <a href="Payment.php" alt="edit" >
                      <input type="submit" style="margin-left: 42.5em; margin-top: 5em;" value="Checkout">
                    </a>
                     
                </td>
                </div>
                </div>
                   


    </div>     
    </div>
    </div>
   
</body>
</html>