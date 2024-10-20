<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['add']))
{
    $wname=$_POST['wname'];
    $w_id=$_POST['w_id'];
    $wphno=$_POST['wphno'];
    $waddress=$_POST['waddress'];
    $doj=$_POST['DOJ'];
    $gender=$_POST['gender'];
    $image=$_POST['img'];
if(is_uploaded_file($_FILES["image"]["tmp_name"])){
        $imagetargetfolder ='uploads/'; 
        $image=$imagetargetfolder.basename($_FILES["image"]["name"]); //['image'] HTML tag input imagedb name
        move_uploaded_file($_FILES["image"]["tmp_name"],$image); 
    }
  
   


   
    
    

    $stmt=$admin->cud("UPDATE `workers` set `w_name`='$wname',`w_phone`='$wphno',`w_address`='$waddress',`DOJ`='$doj',`gender`='$gender',`adhaar_image`='$image' where `w_id`='$w_id'","updated");
    echo "<script> alert('Workers updated successfully');window.location='../viewworkers.php'</script>";

}       



?>

