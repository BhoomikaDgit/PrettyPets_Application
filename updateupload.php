<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
    $title=$_POST['title'];
    $b_id=$_POST['b_id'];
    $desc=$_POST['desc'];
    $video=$_POST['vid'];
    $image=$_POST['img'];
    $date=$_POST['date'];
if(is_uploaded_file($_FILES["image"]["tmp_name"])){
        $imagetargetfolder ='uploads/'; 
        $image=$imagetargetfolder.basename($_FILES["image"]["name"]); 
        move_uploaded_file($_FILES["petimg"]["tmp_name"],$image); 
}
if(is_uploaded_file($_FILES["video"]["tmp_name"])){
        $imagetargetfolder ='videos/'; 
        $video=$imagetargetfolder.basename($_FILES["video"]["name"]);
        move_uploaded_file($_FILES["video"]["tmp_name"],$video); 
    }



   


   
    
    

    $stmt=$admin->cud("UPDATE `blogs` set `b_title`='$title',`short_desc`='$desc',`image`='$image',`video`='$video',`date`='$date' where `b_id`='$b_id'","updated");
    echo "<script> alert('Blogs updated successfully');window.location='../viewblogs.php'</script>";

} 



?>

