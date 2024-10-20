<?php
include '../config.php';
$admin= new Admin();


    $msg=$_POST['msg'];
    $c_id=$_SESSION['cust_id'];

    
    

   
    
    

    $sdm=$admin->cud("INSERT INTO `feedback`(`cust_id`,`feedback`)
    VALUES('$c_id','$msg')","saved");
    echo "<script> alert('Feedback Sent Successfully');window.location='../index.php'</script>";




?>
