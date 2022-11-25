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


        
        
   
</head>

<body >
  

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
  <!--navbar end-->
  <?php
  if(isset($_SESSION['sucesss']) && $_SESSION['sucesss']!='')
    {
    echo '<h2>'.$_SESSION['sucesss'].'</h2>';
    unset($_SESSION['sucesss']);
    }

  
  if(isset($_SESSION['status']) && $_SESSION['status']!='')
    {
    echo '<h2 class="bg-info>'.$_SESSION['status'].'<h2>';
    unset($_SESSION['status']);
    }
  ?>

  <?php
//  $id = $_GET['id'];
 //echo $id;
 $servername="localhost";
 $username="root";
 $password="";
 $database="add";

 $conn = mysqli_connect($servername,$username,$password,$database);

 $sql = "SELECT * FROM `fer` ";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
?>

  
<form class="row g-3 needs-validation" action="ord.php?id=<?php echo $row['id']?>"  Method="POST" novalidate>
  <div class="col-md-4">
  <input type="hidden" name="id" value="<?php echo $row['id']?>"> 
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control"name="fname" id="validationCustom01"  required>
    <div class="valid-feedback">
      Looks good!
    </div>

  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" name="lname" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control"name="uname" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03"name="city" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <input type="text" class="form-control" name="state" id="validationCustom05" required>
      
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Phone number</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">+91</span>
      <input type="text" class="form-control" name="phone" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Quantity</label>
    <input type="text" class="form-control" name="qty" id="validationCustom02"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Address</label>
    <input type="text" class="form-control" name="add" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Payment Mode</label>
    <input type="text" class="form-control" name="mode" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>

  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <?php
  $connection = mysqli_connect("localhost","root","","add");

  $query= "SELECT * from fer ";
  $query_run = mysqli_query($connection,$query);
  ?>
 <div class="col-12">
  <input type="submit" class="btn btn-primary" name=sub value="Save">
  
     
<a href="pro1.php"><button  type="button" class="btn btn-danger">Cancel</button></a>

          
          </td>
    
          
              
      </div>
    
</form>
          
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