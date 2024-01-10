<?php
include 'dbconnect.php';
mysqli_select_db($conn,$db_name);
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/newproduct.css">
    <style media="screen">
    .home-section{
      background: white;
      height: 100%;
    }
      h1{
        text-align: center;
        padding: 20px;
      }
      hr{
        border: 3px  grey;
        width: 70%;
        margin-left: auto;
        margin-right: auto;
      }
      .new-product{
        width: 55%;
        margin-left: 40px;
        background: white;
        box-shadow: 2px 2px 5px grey;
        border-radius: 10px;
        padding: 20px;
      }
      .new-product form{
        background: white;
      }
      .new-product label{
        margin-left: 80px;
      }
      .newproduct input[type="text"]{
        display: block;
        border: none;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
        background: #e6f5ff;
        padding: 12pt;
        border-radius: 10px;
      }
      .newproduct input[type="file"]{
        margin-left: 70px;
      }
      .newproduct textarea{
        display: block;
        border: none;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
        background: #e6f5ff;
        padding: 8pt;
        border-radius: 10px;
      }
      .newproduct input[type="submit"]{
        background: black;
        color: white;
        width: 20%;
        padding: 8pt;
        border-radius: 10px;
      }
      .newproduct input[type="submit"]:hover{
        transform: scaleX(1.12);
        cursor: pointer;
      }
      .home-content{
        box-shadow: 2px 2px 2px grey;
        padding-bottom: 20px;
        padding-top: 10px;
        margin-bottom: 20px;
        height: 60px;
      }
      .home-content img{
        border-radius: 50%;
      }
      .home-content a{
        margin-left: 800px;
        width: 60px;
        text-decoration: none;
        text-align: center;
        background: white;
        font-weight: bold;
      }
      .home-content a:hover{
        background-color: #f2f2f2;
      }
    </style>
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i style="padding-top:7px;" > <img src="icons/sofa.png" alt="" width="40px" height="40px"> </i>
      <span class="logo_name">KB Furniture</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="admin.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="admin.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i style="padding-top:7px;" > <img src="icons/product1.png" alt="" width="20px" height="20px"> </i>
            <span class="link_name">Products</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">products</a></li>
          <li><a href="newproduct.php">Add new product</a></li>
          <li><a href="update_data.php">Edit product details</a></li>
          <li><a href="delete_data.php">Delete product</a></li>
          <li><a href="productlist.php">Product list</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Notifications</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Notifications</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
        <a href="index.php">
          <i style="padding-top:5px;" > <img src="icons/logout1.png" alt="" width="20px" height="20px"> </i>
          <span class="link_name">Logout</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="index.php">Logout</a></li>
        </ul>
      </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">New Product</span><br>
      <a href="index.php"><img src="icons/logout.png" alt="" width="30px" height="30px"><br>Logout</a>
    </div>
    <div class="new-product">
      <h1>Add new product</h1>
      <hr>
      <form class="newproduct" method="post" enctype="multipart/form-data">
        <label for="nm">Product Name</label><br>
        <input type="text" name="pname" id="nm"><br>
        <label for="price">Product price</label><br>
        <input type="text" name="pprice" id="price"><br>
        <label for="comment">Describe the product</label><br>
        <textarea name="comment" rows="6" cols="60" class="comment" placeholder="product description"></textarea><br>
                <input type="file" name="pimage" placeholder="product image">
                <!--  <img src="" alt="" width="160px" height="160px" class="prod-img"><br> -->
        <input type="submit" name="add" value="ADD">
        <?php
        if(isset($_POST["add"]))
      {
        $name=$_POST["pname"];
        $pprice=$_POST["pprice"];
        $desc=$_POST["comment"];
          if(isset($_FILES['pimage'])){

            $photo_name = $_FILES["pimage"]["name"];
            $photo_loc = $_FILES["pimage"]["tmp_name"];
            $profile="profile/".$photo_name;
            if(move_uploaded_file($photo_loc,$profile))
            {

                $sql2=mysqli_query($conn,"INSERT INTO addnewproduct(productname,description, price, image)
                VALUES ('$name','$desc','$pprice','$profile')") or die(mysqli_error($conn));
                if($sql2)
                {
                    echo "<i style='color:green'> Successfully Registered! </i>";
                }
                else{
                    echo "<i style='color:red'> Unable to register! </i>";
                }
            }
            else
            {
                echo "<i style='color:red'> Unable to upload the file! </i>";
            }
          }else{
            echo 'error';
          }


          /**/

      }

       ?>
      </form>
    </div>
  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
