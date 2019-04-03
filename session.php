<?php
	session_start();
	include('conn.php');
	if(isset($_SESSION['login']) && $_SESSION['login'] ==  "true"){
		header('location: customer-orders.php');
	}
	
	if(isset($_POST['cemail']) && isset($_POST['cpassword']))
	{
		$e = $_POST['cemail'];
		$p = $_POST['cpassword'];
	}

/* Select query for login using Mysqli start */
	
	   $query = "SELECT email,password FROM customers WHERE email = '$e' and password = '$p'";

	   
		$res = mysqli_query($link,$query) or die(mysqli_error($link));
		 if (mysqli_num_rows($res) == 1) {
			 $row = mysqli_fetch_array($res);
			
			 if($e == $row['email'] && $p == $row['password']){ 
			$_SESSION["login"] = "true";
			
			header('location:customer-orders.php');
			 }
		}
		else{
			print_r ($query);
			
		}
	
/* Select query for login using Mysqli End */
	
?>