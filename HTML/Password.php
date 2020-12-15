<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "register";

    $conn = mysqli_connect($server,$username,$password,$db_name);

    if($conn)
    {
        echo "";
    }
    else
    {
        echo "error";
    }

    $select = "select * from register";
    $query = mysqli_query($conn,$select);
    $data = mysqli_fetch_assoc($query);

    $oldpwd = $data['password1'];
    $id = $data["id"];

    
    if(isset($_POST['save']))
    {
        $current = $_POST['current'];
        $new = $_POST['new'];
        $confirm = $_POST['confirm'];

        if($current == $oldpwd)
        {
           echo "you entered wrong password";
        }
        else
        {  
            echo "password match";
        }

        if($new == $confirm)
        { 
            $update = "update register set password1 = '$new' where id = '$id' ";
            $query1 = mysqli_query($conn,$update);
        }
        else
        {
            echo "your password do not match";
        }

        if($query1)
            {
                echo "your passsword changed successfully";
            }
            else
            {
                echo "error";
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
        <h3 class="line"><a href="UserAcc.php"><i class="fas fa-user"></i>MY Account</a></h3>
        <h3 class="line"><a href="order.php"><i class="fas fa-wallet"></i>MY Orders</a></h3>
        <h3 class="line"><a href="Password.php"><i class="fas fa-key"></i>Change Password</a></h3>
        <h3 class=""><a href="Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></h3>
        </div>
    </div>
    </div>

    <div class="col4">
    <div class="row1">
        <h3 style="color: gray;">Change Password</h3>
    <div class="col2">
        <table>
            <form onSubmit = "return checkPassword(this)" method="post">
                 
                

                <tr>
                <td>
                <label for="adr">Old Password</label>
                <input type="password"  id="myInput1" name="current"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter and special characters ,and at least 8 or more characters" required ><br><br><br><br>
                </td>
                </tr>

                <tr>
                <td>
                <label for="city"> New Password</label>
                <input type="password"  id="myInput1" name="new"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter and special characters ,and at least 8 or more characters" required ><br><br><br><br>
                </td>
                
                </tr>
                
                <tr>
                <td>
                <label for="adr">Confirm Password</label>
                <input type="password"  id="myInput" name="confirm" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter and special characters ,and at least 8 or more characters" required >
                <i  class="fas fa-eye" onclick="myFunction()"></i><br><br><br><br>
                </td>
                </tr>           

                <tr><td><input type="submit" value="change" name="save"></tr></td>
            </form>
        </table>
    </div>
    </div>
    </div>
    </div>



<!-- Jquery library file-->
<script src="./Js/Jquery3.5.1.min.js"></script>
<!-------- Owl Carousel JS----------->
<script src="./Js/owl.carousel.min.js"></script>



<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>


<!--  Check Password Pattern  -->
<script type="text/javascript">
    var pass = document.getElementById("myInput1")
    pass.addEventListener('keyup',function() {
        checkPassword1(pass.value)
    })
    function checkPassword1(myInput) {
      var strengthBar = document.getElementById("strength")
      var strength = 0;
      if (myInput.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)) {
          strength += 1
      }  
      if (myInput.match(/[~<>?]+/)){
          strength += 1
      }  
      if (myInput.match(/[!@#$%^&*()]+/)){
          strength += 1
      }  
      if (myInput.length > 7){
          strength += 1
      }  

      switch(strength) {
          case 0:
               strengthBar.value = 20;
               break
          case 1:
               strengthBar.value = 40;
               break
          case 2:
               strengthBar.value = 60;
               break
          case 2:
               strengthBar.value = 80;
               break
          case 4:
               strengthBar.value = 100;
               break
      }


    }
</script>


<!--  password matching  -->
<script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.password1.value; 
                password2 = form.password2.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    alert("Password Match: Welcome to Shoe Shop!") 
                    return true; 
                } 
            } 
 </script> 
</body>
</html>