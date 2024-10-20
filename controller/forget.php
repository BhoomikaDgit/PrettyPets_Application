<?php
include("../config.php");
$admin=new Admin();

$email=$_POST['email'];
$sql=$admin->ret("select * From customers where cust_email='$email'");
$num=$sql->rowCount();
	if($num>0){
		
			echo"email is exist";
			$otp=rand(999999, 111111);
			echo $_SESSION['otp']=$otp;
			echo$_SESSION['supemail']=$email;
			header("location:../phpmailer/index.php?email=$email");
	}
	else
	{ 
echo"email is not exist";
echo "<script>window.location='../register.php';</script>";
	}

	?>
	