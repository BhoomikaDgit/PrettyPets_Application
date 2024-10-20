<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['login']))
{
    
    $email=$_POST['email'];
	$password=$_POST['password'];

	$stmt=$admin->ret("SELECT * FROM `customers` WHERE `cust_email`='$email' AND `password`='$password'");

	$num=$stmt->rowCount();

	if($num > 0)
	{
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		$id=$row['cust_id'];
		$_SESSION['cust_id']=$id;
		echo"<script>alert('login successfully');window.location='../index.php';</script>";
	}
	else
	{
		echo"<script>alert('invalid username or password');window.location='../register.php';</script>";

	}

}       



?>
<?php
include '../config.php';
$admin= new Admin();

if(isset($_POST['register']))
{
    
    $name=$_POST['name'];
    $email2=$_POST['email2'];
    $password2=$_POST['password2'];
    $phone=$_POST['phone'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];

    

	
 
    


   
    
    

    $sdm=$admin->cud("INSERT INTO `customers`(`cust_name`,`cust_email`,`password`,`cust_phone`,`cust_address`,`gender`,`date`)
    VALUES('$name','$email2','$password2','$phone','$address','$gender',now())","saved");
    echo "<script> alert('Register successfully');window.location='../register.php'</script>";

}       



?>
