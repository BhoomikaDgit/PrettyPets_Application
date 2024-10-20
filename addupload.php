<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $target='uploads/';
    $image=$target.basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$image);
    $target='videos/';
    $video=$target.basename($_FILES['video']['name']);
    move_uploaded_file($_FILES['video']['tmp_name'],$video);
$sdm=$admin->cud("INSERT INTO `blogs`(`b_title`,`short_desc`,`image`,`video`,`date`)
    VALUES('$title','$desc','$image','$video',now())","saved");
    echo "<script> alert('Blogs added successfully');window.location='../viewblogs.php'</script>";
}       
?>

