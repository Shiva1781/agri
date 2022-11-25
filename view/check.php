<?php
session_start();
?>
 <?php
 $id = $_GET['id'];
 //echo $id;
 $servername="localhost";
 $username="root";
 $password="";
 $database="add";

 $conn = mysqli_connect($servername,$username,$password,$database);

 $sql = "SELECT * FROM `fer` WHERE id='$id'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
?>

<div class="col-12">
<?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {    
         ?>
  <div class="col-12">
  <a href="detail.php?id=<?php echo $row['id']?>"><button  type="button" class="btn btn-primary">Place Order</button></a>

  <?php
        }
      }
        else
        {
        echo"record not found";
        }
      ?>