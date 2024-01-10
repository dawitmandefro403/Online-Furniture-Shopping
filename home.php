<?php
include 'dbconnect.php';
include 'login_check.php';
mysqli_select_db($conn,$db_name);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Homepage</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
    <link  rel="stylesheet"  href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/image_slide.css">

    <!-- Demo styles -->
    <style>
      html,
      body {
        position: relative;
        height: 100%;
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
      }
      hr{
        border:4px solid grey;
        width:50%;margin-left: auto;
        margin-right: auto;
      }

      .swiper {
        width: 100%;
        height: 60%;
        margin-top: 20px;
        padding-bottom: 40px;
      }

      .swiper-slide {
        padding: 10pt;
        margin-bottom: 10px;
        text-align: center;
        font-size: 18px;
        background: #fff;
        border-radius: 10%;
        background: #00ff8e;
        box-shadow: 10px 10px 5px grey;

        /* Center slide text vertically */

      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 70%;
        object-fit: cover;
        border-radius: 10%;
      }
      .logo{
        float: left;
        margin: 0;
        padding: 0;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
      }
  .bg-image {
  background-image: url("images/furniture_bg.jpg");
  background-size: cover;
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
}
.bg-text {
  color: #white;
  font-weight: bolder;
  border-radius: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  height: 40%;
  padding: 20px;
}
.form-popup {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 5; /* Sit on top */
  padding-top: 20px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* Add Animation */
@-webkit-keyframes animatetop {
from {top:-300px; opacity:0}
to {top:0; opacity:1}
}

@keyframes animatetop {
from {top:-300px; opacity:0}
to {top:0; opacity:1}
}
.form-popup form{
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 40%;
  border-radius:10px;
  box-shadow: 2px 2px 5px 0 grey;
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Full-width input fields */
.form-container input[type=text], .form-container textarea  {
  display: block;
  border: none;
  width: 95%;
  padding: 10px;
  margin-left: auto;
  margin-right: auto;
  border: none;
  border-radius: 10px;
  background: #e6f5ff;
}
.form-container label{
  display: block;
  margin-left: 10px;
  width: 80%;
  margin-top: 20px;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.btncancel {
  font-size:28px;
  font-weight:bolder;
  padding: 4px 6px;
  margin-left:94%;
  border: none;
  cursor: pointer;
  width: 25px;
  height:20px;
  background:white;
  border-radius:10px;
  text-align:center;
}
.btncancel:hover{
  color:red;
  text-align:center;
}
.form-container input[type="submit"]{
  border: none;
  display:block;
  margin-left:auto;
  margin-right:auto;
  width:30%;
  background:green;
  font-size:20px;
  padding:8pt;
  font-weight:bolder;
  border-radius:10px;
  color:white;
  margin-top:15px;
  margin-bottom: 20px;
}
.form-container input[type="submit"]:hover{
  background:#2fedbe;
  color:black;
  font-weight:bolder;
  cursor:pointer;
}
    </style>
  <style>
     .slides-wrapper{
 position: relative;
 width: 100%;
 margin: 10px 0;
 }
     .gallery {
 position: relative;
 width: 100%;
 height: 420px;
 border-radius: 10px;
 margin:20px;
 overflow:hidden;
 }
     .gallery ul {
 font-size: 0;
 white-space: nowrap;
 position: absolute;
 top: 0;
 left: -1200px;
 margin: 0;
 padding: 0;
 }
     .gallery li {
 display: inline-block;
 vertical-align: top;
 width: 1200px;
 height: 380px;
 white-space: normal;
 }
     .gallery li img{
 width: 328px;
 height:360px;
 padding: 10px;
 margin-left: 50px;
 box-shadow: 2px 2px 5px 2px grey;
 }
     .gallery .arrow {
 background: url(/shop/templates/default/images/home_bg.png) no-repeat;
 background-size: 150px 223px;
 width: 45px;
 height: 45px;
 position: absolute;
 z-index: 999;
 top: 50px;
 cursor: pointer;
 opacity: 0;
 }
     .gallery .prev {
 background: red;
 color:white;
 border-radius: 50%;
 margin-top: 120px;
 z-index: 3;
 left: -10;}
     .gallery .next {
  background: red;
  color:white;
  border-radius: 50%;
  margin-top: 120px;
 right: 0px;}
 </style>
 <style type="text/css">
     .demo_wrapper{
        position: relative;
        top: -10;
         margin: 0 auto;
         width: 1200px;
     }
     .demo_wrapper .title{
         text-align: center;
     }
     .pr{
       border-radius: 0;
       margin: 30px;
       box-shadow: none;
     }
     .pr img:hover{
       transform:scale(1.08);
       cursor:pointer;
     }
     .contact-us img{
  margin-left: 20px;
  margin-bottom:30px;
}
.contact-us img:hover{
  background-color: #0592f7;
  cursor: pointer;
}
.contact-us p{
  margin-top:10px;
}
.contact-us-on input[type="submit"]{
  border:none;
  outline:none;
  padding:8pt;
  background-color: rgba(255,93,43);
  border-radius: 10px;
  width: 30%;
  color: white;
  font-size: 24px;
  margin-top: 20px;
  font-weight: bold;
}
.contact-us-on input[type="submit"]:hover{
  transform: scaleX(1.12);
  cursor: pointer;
  background-color: rgba(255,65,89);
}
.m-address{
  padding:10px;
}
.order-contents{
  width: 80%;
  height: 400px;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.8);
  border-radius: 10px;
  box-shadow: 2px 2px 5px grey;
  margin: auto;
}
.order-contents p#not-in{
  padding-top: 60px;
}
.order-contents button{
  border: none;
  outline: none;
  color: white;
  background: #0592f7;
  padding:12pt;
  width: 25%;
  margin-top:20px;
  font-size: 20px;
  font-weight: bold;
  border-radius: 20px;
}
.order-product{
  width: 100%;
  height: 100%;
  background-image: url(productimage/img7.jpg);
  background-size: cover;
  background-attachment: fixed;
  padding:20px;
  margin-top: 30px;
}
.order-contents button:hover{
  transform: scaleX(1.12);
  cursor: pointer;
  background:white;
  color:black;
}
.pr p{
  font-weight:bold;
  font-size:20px;
  text-align:center;
}
.pr #prname{
  color:#0592f7;
}
.title h1{
  margin-top:20px;
  padding: 20px;
  background: #f2f2f2;
  box-shadow: 2px 2px 5px grey;
}
input[type="search"]{
  outline: none;
  padding: 12pt;
  width: 25%;
  margin-left: 160px;
  border-radius: 10px;
  background: #e6f5ff;
}
.search button{
  padding: 5pt;
  background: #ff9900;
  margin-left: 6px;
  border: none;
  outline: none;
  color: white;
  font-weight: bold;
  border-radius: 10px;
}
.search button:hover{
  background:  #b36b00;
  cursor: pointer;
}
.top-menu-bar{
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.1);
  width: 100%;
  height: 120px;
  position: fixed;
  z-index: 4;
  top: 0;
  transition: all .4s ease;
}
.top-menu-bar ul{
  height: 50px;
}
.top-menu-bar ul li{
  text-decoration: none;
  padding: 40px 40px;
  list-style: none;
  margin-left: auto;
  margin-right: auto;
  padding-left: 20px;
  font-size: 23px;
  color: white;
  font-weight: bold;
  padding: 15pt;
  float: left;
  font-weight: bold;
}
.top-menu-bar ul li:hover{
  background: #ff9900;
  border-radius: 10px;
  transform: scale(1.12);
}
.our_products{
  width: 100%;
  margin: 0;
}
.contact-us{
  height: 100%;
  background: #001433;
}
.our_products{
  display: inline-block;
  margin-top: 40px;
  margin-left: 60px;
  position: ;
}
.contact-us-on{
  background: #001433;
}
.comment{
  border-radius: 10px;
  background: #ff3300;
}
footer{
  padding: 40px;
  background: #000d1a;
}
/* search styling */
 </style>
  </head>
  <body>
  <div class="top-menu-bar" id="nav">
    <ul class="nav-bar">
        <a href="#home" class="active"><li>Home</li></a>
        <a href="#products"><li>Products</li></a>
        <a href="#contact"><li>Contact</li></a>
        <a href="index.php" id="logout" onclick="logout_fun()"><li>Logout</li></a>
    </ul>
    <div class="search">
      <input type="search" name="" placeholder="search products">
      <button type="button" name="button">search</button>
    </div>
  </div>
    <div class="bg-image" id="home"></div>

  <div class="bg-text">
    <p>Hello,</p>
    <h1 style="font-size:44px;">ONLINE FURNITURE SHOPPING</h1>
    <p>Come to us to buy the product of your interest.....</p>
      <p style="font-size:28px;">Makes you Comfort...</p>
    <a href="#products"><input type="button" name="shop" value="Shop now.."
       style="margin:0;background-color:#05f7d7; color:black;
       margin-top:20px;"></a>
  </div>
    <!-- Swiper -->
    <div class="demo_wrapper">
      <!-- demo content -->
      <div class="slides-wrapper">
          <div class="gallery" id="top_goods_gallery">
              <ul>
                  <li>
                      <a href="" target="_blank" title="" style="opacity: 1;"><img src="productimage/photo1.jpg" alt=""></a>
                      <a href="" target="_blank" title="" style="opacity: 1;"><img src="productimage/photo2.jpg" alt=""></a>
                      <a href="" target="_blank" title="" style="opacity: 1;"><img src="productimage/photo3.jpg" alt=""></a>
                  </li>
                  <li>
                      <a href="" target="_blank" title="" style="opacity: 1;"><img src="productimage/photo5.jpg" alt=""></a>
                      <a href="" target="_blank" title="" style="opacity: 1;"><img src="productimage/photo6.jpg" alt=""></a>
                      <a href="" target="_blank" title="" style="opacity: 1;"><img src="productimage/photo7.jpg" alt=""></a>
                  </li>
                  <li>
                      <a href="" target="_blank" title="" style="opacity: 1;"><img src="productimage/img10.jpg" alt=""></a>
                      <a href="" target="_blank" title="" style="opacity: 1;"><img src="productimage/tvstand.jpg" alt=""></a>
                      <a href="" target="_blank" title="" style="opacity: 1;"><img src="productimage/photo9.jpg" alt=""></a>
                  </li>
              </ul>
              <div class='arrow prev' style="text-align:center; font-size:34px; font-weight:bolder;">&larr;</div>
              <div class='arrow next' style="text-align:center; font-size:34px; font-weight:bolder;">&rarr;</div>
          </div>
          <div style="clear: both;"></div>
      </div>
  </div>
    <a name="products">
        <div class="our_products">
          <h1 style="text-align:center;
               background: red;
               border-radius: 10px;
               color: white;
               font-weight: bold;
               width: 30%;
               margin: auto;
               margin-top:30px;">Our Products </h1>
               <?php
              $sql="SELECT * FROM addnewproduct ";
              $res=mysqli_query($conn,$sql) or die( mysqli_error($conn));
              $rows=mysqli_num_rows($res);
              if($rows>0){
                while ($rows=mysqli_fetch_assoc($res)){
                  $pname=$rows["productname"];
                  $desc=$rows["description"];
                  $pprice=$rows["price"];
                  $image=$rows["image"];
               ?>
            <div class="pr">
              <img src="<?php echo $image; ?>" alt="there should be product image" width="340px" height="350px">
              <p id="prname"><?php echo $pname; ?></p>
              <p><?php echo $desc; ?></p>
              <p><?php echo $pprice; ?>ETB</p>
              <input type="button" name="btnbuy" value="Buy Product">
            </div>
            <?php
        }
           ?>
          <?php
      }
      else{
          echo "not found!";
      }
      ?>
        </div>
             <div class="order-product">
               <div class="order-contents">
                 <p id="not-in" style="font-size:44px; color:#0592f7; margin-top: 20px; font-weight:bolder;">Not interested on the above products ?</p>
                 <p style="font-size:38px; color:white;">Order us your interest...!!!!</p>
                <button type="button" name="button" id="order" onclick="openForm()">Order Product</button>
               </div>
           </div>
        <a name="contact">
        <div class="contact-us">
          <div class="contact-us-on">
          <h4 style="padding-top:20px; margin-bottom:20px;">Contact Us On</h4>
            <img src="icons/facebook.png" alt="" width="30px" height="30px" ></i>
            <img src="icons/twitter.png" alt="" width="30px" height="30px"></i>
            <img src="icons/instagram.png" alt="" width="30px" height="30px"></i>
            <img src="icons/telegram.png" alt="" width="30px" height="30px"></i>
            <p>Phone Number</p>
            <p>+251-938581899</p>
            <p>+251-948404155</p>
            <p style="margin-bottom:20px;">+251-993676861</p>
            <div class="e-address" style="color:orange;">E-mali address</div>
            <p>gagurekb@gmail.com</p>
          </div>
          <div class="contact-us-on">
           <h3 style="padding-top:20px;">Products</h3><br>
           <p>Office Furniture</p><br>
           <p>Beds</p><br>
           <p>Tv Stands</p><br>
           <p>Sofas</p><br>
           <p>Kitchen Furnitures</p><br>
           <p>Chairs</p><br>
          </div>
          <div class="contact-us-on comment" style="width:500px;height:350px;">
           <h4 style="padding-top:20px; text-align:center;">Let's Get in touch !</h4><br>
             <form class="comment" method="post">
               <input type="text" name="yname" placeholder=" enter your name here">
               <input type="email" name="email" placeholder="your email here"><br>
               <textarea name="message" rows="8" cols="40" placeholder="write your comment here.."></textarea><br>
               <input type="submit" name="send" value="Send" style="margin-left:140px;">
               <?php
               if(isset($_POST["send"])){
                 $cname=$_POST["yname"];
                 $yemail=$_POST["email"];
                 $msg=$_POST["message"];

                 $sql="INSERT INTO comment VALUES('$cname','$yemail','$msg')";
                 $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

                 if($result){
                   echo "inserted";
                 }
                 else {
                   echo "xxxxxxxx";
                 }

               }
                ?>
             </form>
          </div>
        </div>
<!-- Order product -->
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <div class="btncancel" onclick="closeForm()">&times;</div>
        <h1 style="text-align:center;">Order product of your choice...!</h1>
        <label for="pname"><b>Product name</b></label>
        <input type="text" name="pname" required>
        <label for="desc"><b>Description</b></label>
        <textarea name="desc" id="desc" cols="40" rows="4"></textarea><br>
        <label for="price"><b>your phone number</b></label>
        <input type="text" name="price" required>
        <label for="psw"><b>Your address</b></label><br>
        <input type="text" name="psw">
        <input type="submit" name="order" value="Done">
  </form>
</div>
     <footer>&copy;opyRight reserved to KB fURNITURE SHOPPONG</footer>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f6e15ffe4b.js" crossorigin="anonymous"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        autoplay: {
     delay: 2000,
    disableOnInteraction: false,
          },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <script type="text/javascript">
    document.querySelector("#order").addEventListener("click",function(){
      document.querySelector(".order-productt").classList.add("active");
    });
    document.querySelector(".order .times").addEventListener("click",function(){
      document.querySelector(".order-productt").classList.remove("active");
    });
    </script>
     <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    $(function() {
        $.fn.gallery = function(settings) {
            var defaults = {
                time: 3000,
                direction:1
            };
            var settings = $.extend(defaults, settings);
            var gallery_wrapper = $(this),
                gallery = gallery_wrapper.find('ul'),
                items   = gallery.find('li'),
                len     = items.length,
                current = 1,  /* the current item we're looking */
                first   = items.filter(':first'),
                last    = items.filter(':last'),
                w = gallery.find('li').width(),
                triggers = gallery_wrapper.find('.arrow');
            var show_slide = function(direction,w){
                gallery.animate({ left: "+=" + (-w * direction) }, function() {

                    current += direction;

                    /**
                     * we're cycling the slider when the the value of "current"
                     * variable (after increment/decrement) is 0 or when it exceeds
                     * the initial gallery length
                     */
                    cycle = !!(current === 0 || current > len);

                    if (cycle) {
                        /* we switched from image 1 to 4-cloned or
                         from image 4 to 1-cloned */
                        current = (current === 0)? len : 1;
                        gallery.css({left:  -w * current });
                    }
                });
            };
            var picTimer = setInterval(function() {
                        show_slide(settings.direction,w);
                    },
                    settings.time);
            return this.each(function(){

                /* 1. Cloning first and last item */
                first.before(last.clone(true));
                last.after(first.clone(true));
                /* 2. Set button handlers */
                triggers.on('click', function() {
                    if (gallery.is(':not(:animated)')) {

                        var cycle = false;
                        settings.direction = ($(this).hasClass('prev'))? -1 : 1;
                        /* in the example buttons have id "prev" or "next" */
                        show_slide(settings.direction,w);
                    }
                    clearInterval(picTimer);
                    picTimer = setInterval(function() {
                                show_slide(settings.direction,w);
                            },
                            settings.time);
                });
                /* hover show arrows*/
                show_slide(settings.direction,w);

                gallery_wrapper.hover(function() {
                    $(this).find(".arrow").css("opacity", 0.0).stop(true, false).animate({
                                "opacity": "0.3"
                            },
                            300);
                },function(){
                    $(this).find(".arrow").css("opacity", 0.3).stop(true, false).animate({
                                "opacity": "0"
                            },
                            300);
                });
            });
        };
        $('#top_goods_gallery.gallery').gallery();
        $('#top_sale_gallery.gallery').gallery({
            time: 5000,
            direction:-1
        });
    });
</script>
<script type="text/javascript">
  var nav=document.getElementById('nav');
  window.onscroll=function(){
    if(window.pageYOffset >100){
      nav.style.background="#004d4d";

    }
    else {
      nav.style.background="rgba(0,0,0,0.1)";
      nav.style.boxShadow="none";
    }
  }
</script>
  </body>
</html>
