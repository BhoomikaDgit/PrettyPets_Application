<?php
include '../config.php';
$admin= new Admin();
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `pet_category` where `category_id`='$pcid'","deleted");
echo "<script> alert('category deleted successfully');window.location='../viewcategory.php'</script>";
$pcid = $_GET['pcid'];
$stmt=$admin->cud("DELETE FROM `pet_breed` where `breed_id`='$pcid'","deleted");
echo "<script> alert('Pet breed deleted successfully');window.location='../viewcategory.php'</script>";
?>



