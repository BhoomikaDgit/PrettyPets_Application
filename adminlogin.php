<?php
include "../config.php";
$admin=new Admin();
if(isset($_POST['Login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$stmt=$admin->ret("SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'");
$num=$stmt->rowCount();
if($num > 0)
{
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$id=$row['a_id'];
$_SESSION['a_id']=$id;
echo"<script>alert('login successfully');window.location='../index2.php';</script>";
}
else
{
echo"<script>alert('invalid username or password');window.location='../index.php';</script>";
}
}
?>