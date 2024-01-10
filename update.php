<?php
include 'dbconnect.php';
mysqli_select_db($conn,$db_name);
 $updateid=$_GET['updateid'];
 $pn=$_GET['pn'];
 $pd=$_GET['pd'];
 $pp=$_GET['pp'];
 $pi=$_GET['pi'];

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update details</title>
     <style>
         /* The popup form - hidden by default */
.form-popup {
  display: block;
  position: fixed;
  bottom: 40px;
  right: 350px;
  border: 3px solid #f1f1f1;
  box-shadow:2px 2px 5px grey;
  border-radius:10px;
  background-color: white;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 600px;
  padding: 10px;
}

/* Full-width input fields */
.form-container input[type=text], .form-container textarea {
  width: 95%;
  padding: 10px;
  margin: 5px 0 10px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.data-update{
  background:white;
  width:80%;
  margin:20px;
  box-shadow:2px 2px 5px grey;
  padding:5px;
}

/* Set a style for the submit/login button */
.btncancel {
  font-size:28px;
  font-weight:bolder;
  padding: 4px 6px;
  margin-left:94%;
  border: none;
  cursor: pointer;
  width: 36px;
  height:40px;
  border-radius:10px;
  text-align:center;
}
.btncancel:hover{
  color:red;
  text-align:center;
}
.btnedit{
  display:block;
  margin-left:auto;
  margin-right:auto;
  width:40%;
  background:#2fa1ed;
  padding:5pt;
  border-radius:10px;
  margin-top:15px;
}
.btnedit:hover{
  background:#2fedbe;
  color:black;
  font-weight:bolder;
  cursor:pointer;
}
     </style>
 </head>
 <body>
 <div class="form-popup" id="myForm">
<div class="btncancel" onclick="closeForm()">&times;</div>
  <form action="" class="form-container" method="post">
    <h1 style="text-align:center;">Edit product details</h1>
    <label for="pname"><b>Product name</b></label>
    <input type="text" name="pname" required value=<?php echo "$pn"?>>
    <label for="desc"><b>Description</b></label>
    <textarea name="desc" id="desc" cols="40" rows="4"><?php echo "$pd"?></textarea><br>

    <label for="pprice"><b>Price</b></label><br>
    <input type="text" name="pprice" required value=<?php echo "$pp"?>>

    <label for="pimage"><b>Image</b></label><br>
    <input type="file" name="pimage" value=<?php echo $pi;?> >

    <input type="submit" class="btnedit" name="btnedit" id="updatebtn" value="Edit">
    <?php
        if(isset($_POST["btnedit"]))
      {
        $name=$_POST["pname"];
        $pprice=$_POST["pprice"];
        $desc=$_POST["desc"];
        if(isset($_FILES['pimage'])){

          $photo_name = $_FILES["pimage"]["name"];
          $photo_loc = $_FILES["pimage"]["tmp_name"];
          $profile="profile/".$photo_name;
        move_uploaded_file($photo_loc,$profile);
            $sql2="UPDATE addnewproduct SET productname='$name',description='$desc',price='$pprice',image='$photo_name'";
            $result=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
                if($result)
                {
                    echo "<i style='color:green'> Successfully Registered! </i>";
                }
                else{
                    echo "<i style='color:red'> Unable to register! </i>";
                }
              }else {
                echo "string";
              }

          /**/

      }

       ?>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";

}
</script>
 </body>
 </html>
