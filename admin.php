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
    <style media="screen">
    .home-section{
      background: white;
      height:100%;
    }
      h2{
        padding: 10px;
      }
      p{
        font-size: 80px;
      }
      .title{
        background: #ff9966;
        box-shadow: 2px 2px 5px grey;
        border-radius: 10px;
      }
      #total_customer{
        background: #99ccff;
        box-shadow: 2px 2px 5px grey;
        border-radius: 10px;
      }
      #sold{
        background: #ccffcc;
        box-shadow: 2px 2px 5px grey;
        border-radius: 10px;
      }
      #comment{
        background: #ffccff;
        box-shadow: 2px 2px 5px grey;
        border-radius: 10px;
      }
      .home-content{
        box-shadow: 2px 2px 2px grey;
        padding-bottom: 20px;
        padding-top: 10px;
        height: 60px;
      }
      .home-content img{
        border-radius: 50%;
      }
      .home-content a{
        margin-left: 500px;
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
        <a href="#">
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
      <span class="text">ONLINE FURNITURE SHOPPING</span><br>
      <a href="index.php"><img src="icons/logout.png" alt="" width="30px" height="30px"><br>Logout</a>
    </div>
    <div class="numuser">
      <?php
      $sql="select * from 'newproduct";

      ?>
      <div class="title" id="total_customer">
        <h2>Total Customers</h2>
        <?php
        $stmt="SELECT role FROM user_account ORDER BY role";
        $res=mysqli_query($conn,$stmt) or die(mysqli_error($conn));

        $row=mysqli_num_rows($res);
         ?>
        <p> <?php echo $row; ?> </p>
      </div>
      <div class="title" id="total_products">
        <h2>Total products available</h2>
        <?php
        $stmt="SELECT id FROM addnewproduct ORDER BY id";
        $res=mysqli_query($conn,$stmt);
        $row=mysqli_num_rows($res);
         ?>
        <p> <?php echo $row; ?> </p>
      </div>
      <div class="title sold" id="sold">
        <h2>Total products sold</h2>
        <?php
        $stmt="SELECT id FROM sold_product ORDER BY id";
        $res=mysqli_query($conn,$stmt);
        $row=mysqli_num_rows($res);
         ?>
        <p><?php echo $row; ?></p>
      </div>
      <div class="title" id="comment">
        <h2>Comments</h2>
        <?php
        $stmt="SELECT name FROM comment ORDER BY name";
        $res=mysqli_query($conn,$stmt);
        $row=mysqli_num_rows($res);
         ?>
        <p><?php echo $row; ?></p>
      </div>
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
