<?php
include '../config.php';
$admin= new Admin();
$id = $_GET['id'];
$stmt=$admin->cud("UPDATE `intrequest` set `i_status`='Your Request has been cancelled..Reason: Breed is not available on that requested Date' where `ir_id`='$id'","updated");
echo "<script>alert('Rejected Successfully');window.location='../viewintreq.php'</script>";
?>



