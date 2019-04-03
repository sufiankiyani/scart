<?php
include('conn.php');
$name = $_POST['cname'];
$email = $_POST['cemail'];
$pwd = $_POST['cpassword'];


/* Code using  Mysqli Start */

    
        $sql = "insert into customers(name,email,password) values('$name','$email','$pwd' )"; 
        $result = mysqli_query($link,$sql) or die(mysqli_error($link));
        if(isset($result))
        {
            header('location: customer-orders.php');
        }
    

?>