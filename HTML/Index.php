
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOE SHOPPING | Ecommerce</title>
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="stylesheet" href="./CSS/style6.css">
    <link rel="stylesheet" href="./CSS/all.css">
    

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,200&display=swap" rel="stylesheet">
</head>
<body>


<!-- NavBar -->

<section>
<!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
</ul></li>


<li><a href="./Login.php"><i class="fas fa-user"></i>My Account</a>
</li>
<li><a href="AboutUs"><i class="far fa-question-circle"></i>About</a></li>

<li><a href="./ContactUs.php"><i class="far fa-envelope"></i>Contact</a></li>
</ul>
</div>





 


<!-- Slideshow container -->
<section>
<form class="example" action="action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
  <div id="content">
<a href="./productCart.php"><img src="./images/Front/cart.png" width="50px" height="50px" alt="" class="ribbon"/></a>  
    
</div>
</form>

  <br><br>
  
  <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="./images/discount.png" style="width:100%">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="./images/discount1.png" style="width:100%">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="./images/discount2.png" style="width:100%">
    
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles 
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
-->
</section>

<!--------OfferZone------->
<section>
<div class="small-container"><br><br>
  <h2 class="title">Deals of the Day</h2>
  <div class="row">

      <div class="col-4">
          <img src="./images/Deals/1buy.jpg" alt="">
          <h3>Flat 50% Off</h3>
          <h3>On your first Buy!</h3>
          <h5> - </h5>
          
      </div>

      <div class="col-4">
           <img src="./images/Deals/2buy.jpg" alt="">
           <h3>Extra 10% Off</h3>
           <h3>On Any 2 Shoes</h3>
           <h5>CODE : 232902S</h5>
      </div>

      <div class="col-4">
           <img src="./images/Deals/3buy.jpg" alt="">
           <h3>FLAT  ₹150 Off</h3>
           <h3>Min. Order ₹1999</h3>
           <h5>CODE : 150OFF</h5>
      </div>

     <div class="col-4">
           <img src="./images/Deals/4buy.jpg" alt="">
           <h3>Min. 30% Off</h3>
           <h3>Sports & Casual</h3>
           <h5>  -   </h5>
      </div>
  </div>
</section>

<!--categories-->
<section>
<div class="small-container">
    <br><br>
    <h2 class="title">Categories </h2>
    <div class="row">
        <div class="col-3">
            <img src="./images/women2.jpg" alt="">
            <h4>Women</h4>
          
        </div>
            <div class="col-3">
                   <a href="./Men.html" target="_blank"> <img src="./images/men1.jpg" alt=""></a>
                    <h4>Men</h4>
                    
            </div>
            <div class="col-3">
               <img src="./images/kid.jpg" alt="">
               <h4>Kids</h4>
               
       </div>
</div>

</section>

<!--Featured products and Latest Product-->
<section>
<div class="small-container1"><br><br>
    <h2 class="title">Featured Products</h2>
    <div class="row">

        <div class="col-7">
            <img src="./images/Front/Boots.jpg" alt="">
            <h4>BOOTS</h4>
        </div>

        <div class="col-7">
          <img src="./images/Front/sandals.jpg" alt="">
          <h4>SANDALS</h4>
        </div>

        <div class="col-7">
             <img src="./images/Front/snekars.jpg" alt="">
             <h4>SNEAKERS</h4>
        </div>

        <div class="col-7">
             <img src="./images/Front/office.jpg" alt="">
             <h4>OFFICE</h4>
        </div>

       <div class="col-7">
             <img src="./images/Front/sports.jpg" alt="">
             <h4>SPORTS</h4>
             
        </div>
    </div>

</section>

<!--Latest Product-->
<section>
<div class="small-container"><br><br>
<h2 class="title">Latest Products</h2>
    <div class="row">
         <div class="col-4">
           <img src="./images/Latest/1.jpg" alt="">
           <h4>Bata Women's Black Scarpin Shoes</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ☆</p>  
           </div>
           <p>₹1,099</p>
         </div>

          <div class="col-4">
           <img src="./images/Latest/2.jpg" alt="">
           <h4>new balance Men's Fresh Foam Arishiv Running Shoes</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ★</p>  
           </div>
           <p>₹4,499</p>
         </div>

         <div class="col-4">
           <img src="./images/Latest/3.jpg" alt="">
           <h4>Puma Women's Carina Bold Sneakers</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ☆</p>  
           </div>
           <p>₹2,749</p>
         </div>

         <div class="col-4">
           <img src="./images/Latest/4.jpg" alt="">
           <h4>Nike Men's Tanjun Running Shoes</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ★</p>  
           </div>
           <p>₹3,036</p>
         </div>

         <div class="col-4">
            <img src="./images/Latest/5.jpg" alt="">
            <h4>Nike Men's Cool Walking Shoes</h4>
            <div class="rating">
              <p>★ ★ ★ ★ ☆</p>  
            </div>
            <p>₹4,550</p>
          </div>

          <div class="col-4">
            <img src="./images/Latest/6.jpg" alt="">
            <h4>Asics Men's Gel-plus 10 Track and Running Shoes</h4>
            <div class="rating">
              <p>★ ★ ★ ★ ☆</p>  
            </div>
            <p>₹3,790</p>
          </div>

          <div class="col-4">
            <img src="./images/Latest/7.jpg" alt="">
            <h4>Adidas Women's Sports and Running Shoes</h4>
            <div class="rating">
              <p>★ ★ ★ ★ ☆</p>  
            </div>
            <p>₹4,559</p>
          </div>

          <div class="col-4">
            <img src="./images/Latest/8.jpg " alt="">
            <h4>Bata Women's Blink Open Toe Sandals</h4>
            <div class="rating">
              <p>★ ★ ★ ★ ★</p>  
            </div>
            <p>₹1,550</p>
          </div>
</div>
</div>
</div>
</section>

<!--brands-->
<section>
 <div class="brands">
  <div class="small-container">
    <h2 class="title1">Explore Top Brands</h2>
      <div class="row">
          <div class="col-5">
              <img src="./images/LOGO/color/Bata.png" alt="">
          </div>
          <div class="col-5">
            <img src="./images/LOGO/color/fila.png" alt="">
          </div>
          <div class="col-5">
            <img src="./images/LOGO/color/skechers.png" alt="">
          </div>
          <div class="col-5">
            <img src="./images/LOGO/color/vf.png" alt="">
          </div>
          <div class="col-5">
            <img src="./images/LOGO/color/nike.png" alt="">
          </div>
        </div>
      </div>
</div>

<div class="brands">
      <div class="small-container">
          <div class="row">

          <div class="col-5">
            <img src="./images/LOGO/color/new balance.png" alt="">
          </div>
          <div class="col-5">
            <img src="./images/LOGO/color/kisspng-logo-brand-burberry-fashion-design-Наклейка-на-авто-burberry-машин-5b6675e32a4813.3900553615334415071732.png" alt="">
          </div>
          <div class="col-5">
            <img src="./images/LOGO/color/asics.png" alt="">
          </div>
          <div class="col-5">
            <img src="./images/LOGO/color/adidas.png" alt="">
          </div>
          <div class="col-5">
            <img src="./images/LOGO/color/puma-logo-png-21169.png" alt="">
          </div>
         
          
      </div>
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

<!-- Jquery library file--> 
<script src="./JS/Jquery3.5.1.min.js"></script>

<!-- slider-->
<script>
     var slideIndex = 1;
     showSlides(slideIndex);
     
     // Next/previous controls
     function plusSlides(n) {
     showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
      
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

</script>


<!--  Footer-->
<div class="footer">
  <div class="container">
      <div class="row">
          <div class="foter-col-1">
              <h3>Download our App</h3>
              <p>Dwnload Appfor Android and ios mobile phone.</p>
              <div class="app-logo">
                 <img src="./images/Front/app-store.png">
                 <img src="./images/Front/play-store.png">
              </div>
          </div>
          <div class="foter-col-2">
             <div class="logo1">
                 <u><h2>SHOPPING</h2></u> 
              </div><br>
         
              <p>Our Purpose is To Sunstainably Make the pleasure and <br>Befefites of shopping Accessible to the Many.</p>
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
                 <li> Facebook</li>
                 <li>Instagram</li>
                 <li>Twitter</li>
                 <li>You tube</li>
             </ul>
         </div>
      </div>
      <hr>
      <p class="copyright"> Copyright ©2020 All rights reserved | made by <a href="www.facebook.come/kalpanawalhe" target="_blank">Shoe Shop</a></p>
  </div>
</div>

</div>

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

</section>
</body>
</html>
   


<!--ff66c4-->