<?php
include('security.php');
$conn = mysqli_connect("localhost","root","","add");

$id=$_GET['id'];
$sql= "DELETE FROM fer WHERE id=$id";
$result = mysqli_query($conn,$sql);
       if($result)   {
        header("location:fertilizer.php" );
        //echo "NO error";
     }
     else
     {
      header("location:fertilizer.php" );
      echo "error is detected";
    }




?>