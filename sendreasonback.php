<?php
include '../config.php';
$admin= new Admin();
$id = $_POST['intid'];
$reas = $_POST['reas'];
$stmt=$admin->cud("UPDATE `intrequest` set `i_status`='$reas' where `ir_id`='$id'","updated"); echo"<script>alert('Reason Sent Successfully');window.location='../viewintreq.php'</script>";
?>



