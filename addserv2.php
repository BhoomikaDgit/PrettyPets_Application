<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
    $sname=$_POST['sname'];
    $petname=$_POST['petcat'];
    $desc=$_POST['desc'];
    $cstatus = 'center';
    $sdate = $_POST['sdate'];
$sdm=$admin->cud("INSERT INTO `pet_services`(`s_name`,`pet_id`,`short_desc`,`cstatus`,`sdate`)
    VALUES('$sname','$petname','$desc','$cstatus','$sdate')","saved");
 echo "<script> alert('services added successfully');window.location='../viewpetserv.php'</script>";
}       
?>



