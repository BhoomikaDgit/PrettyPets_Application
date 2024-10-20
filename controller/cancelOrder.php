<?php
define('DIR','../');
require_once DIR . 'config.php';
$admin = new Admin();

if(isset($_GET['or_id'])){
    $orid = $_GET['or_id'];

    $stmt = $admin -> cud("UPDATE `orders` SET `o_stutus` = 'Canceled' WHERE `orders`.`or_id` = '$orid'","updated");
    
      if($stmt){
            echo "<script>alert('Order Canceled Successfully.');
                        window.location.href='../orders.php';
                    </script>";
        }else{
                    echo "<script>alert('Something Went Wrong Please Try Again.');
                       window.location.href='../orders.php';
                    </script>";
        }
}


?>