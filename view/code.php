<?php
$conn= mysqli_connect("localhost","root","","add");
if(isset($_POST['submitButton']))
    {   
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone = $_POST['phone']; 
        $message = $_POST['message'];


                $query =  "INSERT INTO `contact`( `name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
                $query_run = mysqli_query($conn,$query);
                if($query_run)
                {
                    //echo"working";
                    $_SESSION['sucesss']="contact  Added";
                    header("Location: index.php");
                }
                else{
                       // echo"notworking";
                        $_SESSION['status']="contact is not added";
                        header("Location: index.php");
                    }
    }
   
       ?>