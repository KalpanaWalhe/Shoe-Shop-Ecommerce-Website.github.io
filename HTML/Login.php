
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account!</title>
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./CSS/contactus.css">
</head>
<body>
<div class="container">
<form action="Validation.php" method="POST">
        <div class="form-row">
          <div class="input-data"><input type="text" name="Fname" required><div class="underline"></div><label for="">First Name</label></div>
          <div class="input-data"><input type="text" name="Lname" required><div class="underline"></div><label for="">Last Name</label>
          </div>
        </div>

        <div class="form-row">
          <div class="input-data"><input type="email" id="username" name="mail" required ><div class="underline"></div><label for="">Email Address</label></div>
          <div class="input-data"> <input id="Contact" name="contact" type="tel" required  minlength="10" maxlength="10"><div class="underline"></div><label for="">Your Contact Number</label></div>
        </div>

        <div class="form-row">
          <div class="input-data"><input type="text" id="address1" name="address1"><div class="underline"></div><label for="">Address</label></div>
         
        </div>

       

        <div class="form-row">
           <div class="input-data"> <input type="password"  id="myInput1" name="password1"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter and special characters ,and at least 8 or more characters" required >
            <div class="underline"></div><label for="">Enter Password</label><br>
       
        

        <div class="form-row submit-btn">
         <div class="input-data"><div class="inner"></div><a onclick="window.location='http://localhost/Shoe%20Shopping/Register.php'" style="text-decoration: none; "><input type="submit" value="Create Account"></a></div> 
          <div class="input-data"><div class="inner"><a href="./UserAcc.php" style="text-decoration: none; "></div><input type="submit" value="Login"></a></div>
       
        </div>
        </div>
        
      </form>

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