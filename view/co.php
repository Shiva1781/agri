<?php
$conn= mysqli_connect("localhost","root","","add");

      
    if(isset($_POST['aboutsave']))
    {
        $title = $_POST['title']; 
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $link = $_POST['link'];

                $query = "INSERT INTO `about`( `tittle`, `subtitle`, `description`, `link`) VALUES ('$title','$subtitle','$description','$link')";
                $query_run = mysqli_query($conn,$query);

                if($query_run)
                {
                    //echo"working";
                    $_SESSION['sucesss']="About Profile Added";
                    header("Location:index.php.php");
                }
                else{
                       // echo"notworking";
                        $_SESSION['status']="about is not added";
                        header("Location:index.php");
                    }
    }
        ?>
