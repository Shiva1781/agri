<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>index</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="csss/styles.css" rel="stylesheet" />
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<style>

    .card{
        
        
    }
    </style>
        
        
   
</head>
 <!--navbar start-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo.png" alt="error" height="60px" width="60px"> Agro Goods</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feat.php" >Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pro.php" >Product</a>
          </li>
    
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
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
  <div class="card">
  <div class="card-body">
    <h2>Order Now</h2>
  </div>
</div>

  <div class="card" style="width: 100%;">
  <?php echo '<img src="../admin/upload/'.$row['image'].'" class="card-img-top" alt="Error" style="width: 45%; " ">'?>
  <div class="card-body">
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
    <h4 class="card-title" ><?php echo $row['tittle'];?></h4>
    <p class="card-text"><?php echo $row['subtitle'];?></p>
    <h2>₹ <?php echo $row['price'];?>/kg</h2>
    <label> Quantity</label>
    <select class="btn btn-primary" ><?php echo $row['qty'];?>
<option>1</option>
<option>2</option>
<option>3</option>

    </select>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h3>Shipping To:</h3>
<ul class="list-group">
  <li class="list-group-item">Item :<?php echo $row['price'];?>/kg</li>
  <li class="list-group-item">Delivery:₹25</li>
</ul>
</div>
</div>
<div class="card">
  <div class="card-body">
    <h3>Pay with:</h3>
<ul class="list-group">
  <li class="list-group-item"><?php echo $row['payment'];?></li>
</ul>
</div>
</div>
<div class="card">
  <div class="card-body">
    <h3>Deliver To:</h3>
<ul class="list-group">
  <li class="list-group-item"><?php echo $row['first'];echo $row['last'];?></li>
  <li class="list-group-item"><?php echo $row['address'];echo $row['city'];echo $row['state'];echo $row['zip'];echo $row['phone no'];?></li>
</ul>
</div>
</div>
<a href="thank.php" class="btn btn-primary"name="sub" style="margin:20px; "type="submit">Place order</a>
 <!-- Footer-->
 <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>   
    </body>
</html>
