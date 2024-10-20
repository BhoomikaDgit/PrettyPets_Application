<?php
include '../config.php';
$admin= new Admin();


if(isset($_POST['add']))
{
    
    $pett_id=$_POST['pett_id'];
    $c_id=$_SESSION['cust_id'];
    $breeed_id=$_POST['breeed_id'];
    $date=$_POST['date'];

    $istatus = 'pending';
    
    

   
    
    

    $sdm=$admin->cud("INSERT INTO `intrequest`(`pett_id`,`c_id`,`breeed_id`,`date`,`i_status`)
    VALUES('$pett_id','$c_id','$breeed_id','$date','$istatus')","saved");
    echo "<script> alert('Request Sent Successfully');window.location='../index.php'</script>";

}       



?>
