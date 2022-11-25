<?php
session_start();
$id = $_GET['id'];

 //echo $id;
 
$conn= mysqli_connect("localhost","root","","add");
    if(isset($_POST['sub']))
        {   
            
            $a=$_POST['fname'];
            $b=$_POST['lname'];
            $c=$_POST['uname'];
            $d=$_POST['city'];
            $e=$_POST['state'];
            $f=$_POST['zip'];
            $g=$_POST['phone'];
            $h=$_POST['qty'];
            $i=$_POST['add'];
            $j=$_POST['mode'];
    
    
                    $query =  "UPDATE `fer` SET `first`='$a',`last`='$b',`username`='$c',`city`='$d',`state`='$e',`zip`=$f,`phone no`=$g,`address`='$i',`payment`='$j',`quantity`=$h WHERE id=$id";
                    $query_run = mysqli_query($conn,$query);
    
                    if($query_run)
                    {
                        //echo"working";
                        $_SESSION['sucesss']="Added";
                        header("Location:buy.php");
                    }
                    else{
                           // echo"notworking";
                            $_SESSION['status']="contact is not added";
                            header("Location:buy.php");
                        }
        }
       ?>