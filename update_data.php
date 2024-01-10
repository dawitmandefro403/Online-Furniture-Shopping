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
      height: 100%;
    }
    .newprobtn{
      text-decoration: none;
      background: green;
      padding: 5pt;
      margin-left: 85%;
      color: white;
    }
    .data-update{
      padding-top: 20px;
      padding-bottom: 10px;
      margin-left: 20px;
      width: 90%;
      height: 100%;
      box-shadow: 2px 2px 5px 2px grey;
      border-radius: 10px;
    }
      h2{
        padding: 10px;
      }
      button{
    padding:5pt;
    background:#f78502;
    color:white;
    width:90%;
    font-size:22px;
    border:none;
    outline:none;
}
button a{
  text-decoration: none;
  color: white;
}
td, th {
  border: 1px solid #ddd;
  padding: 8px;
}
      p{
        font-size: 80px;
      }
      table{
  margin: 20px;
  width: 90%;
  border-collapse: collapse;
}
 th {
  border: 3px solid #ddd;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  color: black;
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
  <section class="home-section" style="height:100%;">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Edit product</span><br>
      <a href="index.php"><img src="icons/logout.png" alt="" width="30px" height="30px"><br>Logout</a>
    </div>
    <div class="data-update" >
      <a  class="newprobtn" href="newproduct.php">&plus;Add new product</a>
       <table>
         <th>ID</th>
           <th>Product Name</th>
           <th>Description</th>
           <th>Price</th>
           <th>Image</th>
           <th>Action</th>
          <tr>
          <?php
              $sql="SELECT * FROM addnewproduct ";
              $res=mysqli_query($conn,$sql) or die( mysqli_error($conn));
              $rows=mysqli_num_rows($res);
              if($rows>0){
                while ($rows=mysqli_fetch_assoc($res)){
                  $id=$rows["id"];
                  $pname=$rows["productname"];
                  $desc=$rows["description"];
                  $pprice=$rows["price"];
                  $image=$rows["image"];
               ?>
               <td><?php echo $id; ?></td>
            <td><?php echo $pname; ?></td>
            <td><?php echo $desc; ?></td>
            <td><?php echo $pprice; ?>ETB</td>
            <td><img src="<?php echo $image; ?>" alt="" width="180px" height="80px"></td>
            <td>
              <button>
                <a href="update.php?updateid='<?php echo $id?>'&pn='<?php echo $pname;?>'&pd='<?php echo $desc?>'&pp='<?php echo $pprice?>'&pi='<?php echo $image?>'">Update</a>
              </button>
            </td>
          </tr>
          <?php
                }
                ?>
                <?php
            }
            else{
                echo "not found!";
            }
            ?>
       </table>
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
