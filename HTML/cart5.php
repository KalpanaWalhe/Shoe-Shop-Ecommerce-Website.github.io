<!-- Men Product2 -->
<?php
  $conn = new mysqli('localhost','root','','register');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOE SHOP | Shop Online</title>
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="stylesheet" href="./CSS/stylec.css">
    <link rel="stylesheet" href="./CSS/style6.css">
    <link rel="stylesheet" href="./CSS/all.css">
    

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,200&display=swap" rel="stylesheet">
</head>
<body>
 <!--Nav bar-->   
<section>
<input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn" class="pos"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
   
    <div class="sidebar">
    <header>SHOE SHOP</header>
  <ul>
<li><a href="./Index1.php"><i class="fas fa-home"></i>Home</a></li>
<li><a href="#" ><i class="fas fa-stream"></i>Products </a>
<ul >
<li><a href="./Men.php">   Men</a></li>
<li><a href="./Shoe Shopping/women.php">  Women</a></li>
</ul></li>


<li><a href="./Login.php"><i class="fas fa-user"></i>Login</a>
</li>
<li><a href="AboutUs.php"><i class="far fa-question-circle"></i>About</a></li>

<li><a href="ContactUs.php"><i class="far fa-envelope"></i>Contact</a></li>
</ul>
</div>



<!--single product detils-->
<section>
<div id="content">
<a href="./productCart.php"><img src="./images/Front/cart.png" width="50px" height="50px" alt="" class="ribbon"/></a>  
    
    </div>
<?php
$query = "select * from workshops where id =5";
$result = $conn->query($query);
if($result->num_rows > 0)
{
  while($row = $result->fetch_assoc()){
    $title = $row['title'];
    $qty = $row['qty'];
    $price = $row['price'];
    $image = $row['image'];
    $description = $row['description'];

?>
<form method="post" action="productCart.php?action=add&id=<?php echo $row["id"]; ?>">  
  <div class="small-container">
    <div class="row">
      <div class="col-2">
      <img src="<?php echo $image; ?>" id="ProductImg">

        <div class="small-img-row">
          <div class="small-img-col">
            <img src="./images/cart/pro5/full.jpeg" width="100%" class="small-img">
          </div>
          <div class="small-img-col">
            <img src="./images/cart/pro5/side.jpeg" width="100%" class="small-img">
          </div>
          <div class="small-img-col">
            <img src="./images/cart/pro5/side1.jpeg" width="100%" class="small-img">
          </div>
          <div class="small-img-col">
            <img src="./images/cart/pro5/fb.jpeg" width="100%" class="small-img">
          </div>
        </div>
      </div>
      <div class="col-2">
         <p>Home / Shoes</p>
         <h1 class="text-info"><?php echo $row["title"]; ?></h1>  
         <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
         <input type="text" name="quantity" class="form-control" value="1" /> 
         <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
         <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
         <input type="submit" name="add_to_cart" style="margin-top:5px; width: 35%; font-size: 17px;" class="btn btn-success" value="Add to Cart" size="5%" />
          <a href="./Payment.php" class="btn">Buy Now</a>
          <h3>Product Details <i class="fa fa-indent"></i> </h3> <br>
          <p><?php echo $description; ?></p>
        </div>
        </div> 
      </div>
    </div>
    <?php   }
}?> 
</form>
</section>

<!--products-->
<div class="small-container">
<br><br><br><br><br><br><br><br>
    <div class="row row-2">
      <h2>Related Product</h2>
      <p>View More</p>
    </div>
</div>

<section>
  <div class="small-container1">
    <div class="row">
        <div class="col-4">
          <img src="./images/cart/pro2/full.jpeg" alt="">
        <a href="./cart1.php"> <h4>Metcon Sport  Gym Shoes For Men  (Blue)</h4></a> 
          <div class="rating">
            <p>★ ★ ★ ★ ★</p>  
          </div>
          <p>₹5,197</p>
        </div>

        <div class="col-4">
           <img src="./images/cart/pro3/full.jpeg" alt="">
         <a href="./cart2.php"> <h4>Nike DOMAIN 2 Cricket Shoes For Men  (White)</h4></a> 
           <div class="rating">
             <p>★ ★ ★ ★ ☆</p>  
           </div>
           <p>₹3,297</p>
         </div>
        <div class="col-4">
          <img src="./images/cart/pro4/full.jpeg" alt="">
         <a href="./cart4.php"><h4>Nike TODOS Running Shoes For Men  (White)</h4></a> 
          <div class="rating">
            <p>★ ★ ★ ★ ★</p>  
          </div>
          <p>₹2,717</p>
        </div>

        <div class="col-4">
           <img src="./images/cart/pro1/full.jpeg" alt="">
           <h4>Nike Revolution 5 Running Shoes For Men  (Black)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ☆</p>  
           </div>
           <p>₹2,513</p>
         </div>
        </div>
        </div>
        
</section>



 <!--  Footer-->
<section>  
   
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="foter-col-1">
                    <h3>Download our App</h3>
                    <p>Dwnload App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                       <img src="./images/Front/play-store.png">
                       <img src="./images/Front/app-store.png">
                    </div>
                </div>
                <div class="foter-col-2">
                   <div class="logo">
                        <h2>SHOE SHOP</h2> 
                    </div><br>
               
                    <p>Our Purpose is To Sunstainably Make the pleasure and <br>Befefites of shoes shopping Accessible to the Many.</p>
                </div>
                <div class="foter-col-3">
                   <h3>Useful Links</h3>
                   <ul>
                       <li>Cupons</li>
                       <li>Blog Post</li>
                       <li>Return Policy</li>
                       <li>Join Us</li>
                   </ul>
               </div>
                <div class="foter-col-3">
                   <h3>Follow Us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Instagram</li>
                       <li>Twitter</li>
                       <li>You tube</li>
                   </ul>
               </div>
            </div>
            <hr>
            <p class="copyright"> Copyright ©2020 All rights reserved | made by <a href="www.facebook.come/kalpanawalhe" target="_blank"> Kalpana Walhe</a></p>
          
        </div>
    </div>
</section>


<!--  js for toggle -->
<script>
  var MenuItems = document.getElementById("MenuItems");
  MenuItems.style.maxHeight = "0px";

  function menutoggle(){
      if(MenuItems.style.maxHeight == "0px")
      {
         MenuItems.style.maxHeight = "200px";
      }
      else
      {
         MenuItems.style.maxHeight = "0px";
      }
  }
</script>


<!--js for product gallary-->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    
    SmallImg[0].onclick = function()
    {
      ProductImg.src = SmallImg[0].src;
    }

    SmallImg[1].onclick = function()
    {
      ProductImg.src = SmallImg[1].src;
    }

    SmallImg[2].onclick = function()
    {
      ProductImg.src = SmallImg[2].src;
    }

    SmallImg[3].onclick = function()
    {
      ProductImg.src = SmallImg[3].src;
    }

</script>

<!-- Jquery library file--> 
<script src="./JS/Jquery3.5.1.min.js"></script>
</section>
</body>
</html>