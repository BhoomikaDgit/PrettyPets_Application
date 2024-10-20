<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
    $cat=$_POST['cat'];
    $catid=$_POST['catid'];
$stmt=$admin->cud("UPDATE `pet_category` set `category_name`='$cat' where `category_id`='$catid'","updated");
    echo "<script> alert('category updated successfully');window.location='../viewcategory.php'</script>";
} 
if(isset($_POST['upb']))
{
    $mcat=$_POST['mcat'];
    $breed=$_POST['breed'];
    $bid=$_POST['bid'];
$stmt=$admin->cud("UPDATE `pet_breed` set `petcat_id`='$mcat',`breed_name`='$breed' where `breed_id`='$bid'","updated");
    echo "<script> alert('Breed updated successfully');window.location='../viewcategory.php'</script>";
} 
?>



