<?php
include 'dbconnect.php';
mysqli_select_db($conn,$db_name);
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">

    <style media="screen">
      h3{
        text-align: center;
        color: black;
        font-size: 32px;
      }
      h1{
        color: black;
      }
      .login-form{
        width: 100%;
        border-radius: 10px;
      }
      form{
        width:40%;
        background: white;
        box-shadow: 5px 5px 5px 5px grey;
        border-radius: 10px;
      }
      form input[type="text"], form input[type="password"]{
        border: none;
        border-radius: 10px;
        width: 86%;
        padding: 12pt;
        background: #e6f5ff;
      }
      label{
        display: block;
        width: 100%;
        margin-left: 40%;
        font-size: 30px;
        font-weight: bold;
      }
      form input[type="submit"]{
      padding: 8pt;
      background: #00e600;
      border: none;
      border-radius: 10px;
      }
     form input[type="submit"]:hover{
       cursor:pointer;
     }
    </style>
  </head>
  <body>
    <div class="login-form">
      <form class="login" action="login_check.php" method="post" enctype="multipart/form-data" >
        <h1>Login</h1>
        <img src="images/login.png" width="120px" height="120px" alt="login image">
        <label class="select">Login as</label>
        <select class="login-as" name="login-as">
          <option value="user">User</option>
          <option value="user">Admin</option>
        </select>
        <input type="text" name="email" placeholder="e-mail"><br>
        <input type="password" name="password" placeholder="password"><br>
        <button type="submit" name="loginbtn">Login</button>
      </form>
    </div>
  </body>
</html>
