<?php
include '../config.php';
$admin= new Admin();
$id = $_GET['id'];
 $stmt=$admin->cud("UPDATE `intrequest` set `i_status`='Approved' where `ir_id`='$id'","updated");
echo "<script>alert('Approved Successfully');window.location='../viewintreq.php'</script>";
?>



