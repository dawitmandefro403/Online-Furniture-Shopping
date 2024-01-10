<?php
  session_start();
   include 'dbconnect.php';
   mysqli_select_db($conn,$db_name);
  if(isset($_POST["email"]) && isset($_POST["password"])){
      function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
         return $data;
     }
      $email=test_input($_POST["email"]);
      $pw=test_input($_POST["password"]);
      $role=test_input($_POST["login-as"]);
        $sql="select * from user_account where email='$email' and password='$pw'";
        $result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
        if(mysqli_num_rows($result)>0){
          $row=mysqli_fetch_assoc($result);
          if($row["password"]===$pw && $row["role"]==='user'){
              header("Location:home.php");
           }
        else{
            header("Location:admin.php");
        }
      }
  }
 ?>
