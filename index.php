<?php
session_start();
include 'dbconnect.php';
mysqli_select_db($conn,$db_name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
    body{
      background-image: url(images/bg2.png);
      background-size: cover;
      background-attachment: fixed;
    }
     /*login popup*/
     .login-popup{
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 3; /* Sit on top */
  padding-top: 40px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
     }
    .login-popup form{
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
     /* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
     .login-popup form input[type="email"],.login-popup input[type="password"]{
       display:block;
       width:85%;
       padding:15pt;
       margin:10px;
       border:none;
       background:#e6f5ff;
       border-radius:10px;
     }
     .times{
       width:25px;
       height:20px;
       font-size:30px;
       font-weight:bolder;
       margin-left:95%;
     }
     .times:hover{
       color:red;
       cursor:pointer;
     }
     .login-popup a{
       font-size:20px;
       font-weight:none;
       margin-left:60%;
       margin-top:5px;
     }
     .login-popup input[type="submit"]{
       display:block;
       background:#44cc00;
       color:white;
       border-radius:10px;
       width:40%;
       padding:8pt;
       font-size:24px;
       font-weight:bolder;
       margin-left:auto;
       margin-right:auto;
       margin-top:10px;
       margin-bottom:30px;
     }
     .login-popup input[type="submit"]:hover{
       transform:scaleX(1.18);
       background:#55ff00;
       cursor:pointer;
       color:white;
     }
     .login-popup img{
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.login-popup select{
  border: 2px solid grey;
  width: 30%;
  font-size: 18px;
  text-align: center;
  display: block;
  margin: auto;
  padding: 5pt;
  border-radius: 10px;
}
.login-popup label{
  display: block;
  margin-left: auto;
  margin-left: auto;
  text-align: center;
  font-size: 18px;
  font-weight: bold;
}
     /* Signup popup */

     .signup-popup{
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 3; /* Sit on top */
  padding-top: 10px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
     }
    .signup-popup form{
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
     /* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
     .signup-popup input[type="email"],.signup-popup input[type="password"],.signup-popup input[type="text"]{
       display:block;
       width:85%;
       padding:12pt;
       margin:5px;
       margin-left: auto;
       margin-right: auto;
       border:none;
       background:#e6f5ff;
       border-radius:10px;
     }
     .times{
       width:25px;
       height:20px;
       font-size:30px;
       font-weight:bolder;
       margin-left:95%;
     }
     .times:hover{
       color:red;
       cursor:pointer;
     }
     .login-popup a{
       font-size:20px;
       font-weight:none;
       margin-left:60%;
       margin-top:5px;
     }
     .signup-popup input[type="submit"]{
       border: none;
       background:#44cc00;
       color:white;
       display:block;
       width:40%;
       padding:6pt;
       font-size:24px;
       font-weight:bolder;
       margin-left:auto;
       margin-right:auto;
       margin-top:10px;
       border-radius:10px;
     }
     .signup-popup input[type="submit"]:hover{
       transform:scaleX(1.18);
       background:#55ff00;
       cursor:pointer;
       color:white;
     }
     .signup-popup img{
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.nav-bar nav{
  margin:0;
  padding: 20px;
  text-decoration: none;
  width: 100%;
  align-items: center;
  float:left;
}
.nav-bar a{
  text-decoration: none;
  font-weight: bolder;
  height: 30px;
  width: 80px;
  padding: 10px;
  font-size: 24px;
  border-radius:10px;
  margin-left:40px;
}
.nav-bar a:hover{
  background:blue;
}
hr{
  width:100%;
}
h2{
  margin-bottom:5px;
  padding-top: 0px;
  font-family: serif;
  font-size:44px;
  font-weight: bold;
}
.login-popup h1, .signup-popup h1{
  text-align: center;
}
.startbtn button{
  border:0;
  padding:10pt;
  margin-top:30px;
  margin-left: 60px;
  width: 13%;
  background:green;
  color:white;
  font-size: 18px;
  font-weight:bold;
  border-radius:10px;
}
.startbtn button:hover{
  transform:scaleX(1.18);
  background:#55ff00;
  cursor:pointer;
  color:black;
}
.bg-image{
  margin-top: 60px;
  height: 100%;
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.index-content{
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 0 solid #f1f1f1;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  height: 65%;
  padding: 20px;
}
.index-content p{
  margin-left: 580px;
}
.bg button{
  border: none;
  margin-left: 100px;
}
    </style>
</head>
<body style="background:white; background-image:url(images/bg2.png);
background-size:cover;
background-attachment:fixed;">
<div class="nav-bar">
       <nav>
         <a href="#" onclick=openForm()>Login</a>
            &nbsp;<a href="#" onclick="opensignForm()">Signup</a>
       </nav>
       </div>
      <div class="index-content">
        <h2>Online Furniture Shopping</h2>
        <p style="margin-left:50px;">lorum epsum kupa auyt buyakustin chaba</p>
        <div class="startbtn">
        <button class="startbtn" onclick="opensignForm()">Shop now</button>
        <p id="tilik">You get <br>everything with us !</p>
        <p id="tinish">Come to us to get the product of your interest...</p>
        </div>
        <div class="pgraph">

        </div>
         <div class="bg">
             <button type="button" id="login" name="login_button" onclick="openForm()">Login</button>
              <button type="button" id="signup" name="signup_button" onclick="opensignForm()">Signup</button>
         </div>
      </div>


<!-- signup form popup-->
        <div class="signup-popup" id="sign">
          <form  method="post" enctype="multipart/form-data">
            <div class="times" onclick="closesignForm()">&times;</div>
            <h1>Signup</h1>
            <img src="icons/sign.png" width="80px" height="80px" alt="Signup Image">
          <input type="text" name="fname" placeholder="first name" required><br>
          <input type="text" name="lname" placeholder="last name" required><br>
          <input type="email" name="email" placeholder="your email" required><br>
          <input type="password" name="pword" placeholder="password" required><br>
          <input type="password" name="cpword" placeholder="confirm password" required><br>
          <input type="submit" name="btnsignup" value="Signup"><br>
          <?php
          if(isset($_POST["btnsignup"])){
            $fn=$_POST["fname"];
            $ln=$_POST["lname"];
            $eml=$_POST["email"];
            $pw=$_POST["pword"];
            $cpw=$_POST["cpword"];
            if ($pw===$cpw) {
              $st="INSERT INTO user_account(firstname,lastname,email,password) VALUES ('$fn','$ln','$eml','$pw') ";
              $res=mysqli_query($conn,$st) or die(mysqli_error($conn));
            if($res){
             echo '<script type="text/javascript">';
             echo 'alert("registered.........")';
             echo '</script>';
            }
            else{
              echo '<script type="text/javascript">';
              echo 'alert("error.........")';
              echo '</script>';
            }
          }else {
            echo '<script type="text/javascript">';
            echo 'alert("Password does not match.........")';
            echo '</script>';

            echo '<p style="color":red;>Password does not match...</p>';
          }
          }
          ?>
          </form>
        </div>
        <!--login form popup -->
     <div class="login-popup" id="log">
       <form class="login" id="loginid" method="post" enctype="multipart/form-data" action="login_check.php">
         <div class="times" id="times" onclick="closeForm()">&times;</div>
         <h1>Login</h1>
         <img src="images/login.png" width="80px" height="80px" alt="login image">
         <input type="email" name="email" placeholder="enter your email" required><br>
         <input type="password" name="password" placeholder="enter password here" required><br>
         <a href="#">forgot password?</a><br>
         <input type="submit" name="btnlogin" value="Login">
        </form>
     </div>
    <script>
function openForm() {
  document.getElementById("log").style.display = "block";
}

function closeForm() {
  document.getElementById("log").style.display = "none";
}
function opensignForm() {
  document.getElementById("sign").style.display = "block";
}

function closesignForm() {
  document.getElementById("sign").style.display = "none";
}
    </script>
</body>
</html>
