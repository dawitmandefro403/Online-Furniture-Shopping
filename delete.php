<?php
include 'dbconnect.php';
mysqli_select_db($conn,$db_name);
if(isset($_GET["deleteid"])){
    $id=$_GET["deleteid"];

    $sql="delete from addnewproduct where id=$id";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if($result){

        header("Location:delete_data.php");
    }
    else{
        echo "xxxxxxxxxx";
    }
}
?>
