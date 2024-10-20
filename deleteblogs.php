<?php
include '../config.php';
$admin= new Admin();
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `blogs` where `b_id`='$pcid'","deleted");
echo "<script> alert('blogs deleted successfully');window.location='../viewblogs.php'</script>";
?>



