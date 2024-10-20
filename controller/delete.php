<?php
define('DIR','../');
require_once DIR . 'config.php';
$admin = new Admin();

if(isset($_GET['fromcartid'])){
    $fromcartid = $_GET['fromcartid'];
     $stmt = $admin -> cud("DELETE FROM `cart` WHERE `cart`.`c_id` = '$fromcartid'","deleted");
        if($stmt){
            echo "<script>alert('Deleted Successfully.');
                        window.location.href='../cart.php';
                    </script>";
        }else{
                    echo "<script>alert('Something Went Wrong Please Try Again.');
                       window.location.href='../cart.php';
                    </script>";
        }

}
?>