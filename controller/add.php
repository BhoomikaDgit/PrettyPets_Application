<?php 
include '../config.php';

$admin = new Admin();

if(isset($_POST['addtocart'])){
    $cid = $_SESSION['cust_id'];
    $pid = $_POST['pid'];
    $cquant = $_POST['quantity'];
    
    // if(isset($_POST['att'])){
    //     $att = $_POST['att'];
    // }else{
    //     $att = "NULL";
    // }

    $stmt = $admin->ret("SELECT * FROM `cart` WHERE `p_id` = '$pid' AND `cust_id` = '$cid'");
    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
    $num = $stmt -> rowcount();
    if($num>0){
        $updatedquant = 0;
        $Dqun =$row['quantity'];
        $updatedquant = $cquant + $Dqun;
        $stmt = $admin->cud("UPDATE `cart` SET  
         `quantity` = '$updatedquant' WHERE `cart`.`p_id` = '$pid' AND `cart`.`cust_id` = '$cid'","updated");
        $_SESSION['cart'] = "true";
        $admin->redirect('../cart');
     
    }else{
          $stmt = $admin -> cud("INSERT INTO `cart` ( `cust_id`, `p_id`, `quantity`,`date`) VALUES 
          ('".$cid."','".$pid."','".$cquant."',NOW())","saved");
          $admin->redirect('../cart');

    }
}

if(isset($_GET['cartid']) && isset($_GET['cartproductq'])){
    $pid = $_GET['pid'];
    $cartproductq = $_GET['cartproductq'];
    $stmt = $admin -> ret("SELECT * FROM `products` WHERE `p_id` = '$pid'");
    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
    if( $cartproductq > $row['quantity']){
        echo "<script>
            alert('This Product limit is exceeded.');
            window.location.href='../cart.php';
            </script>";
    }else{
    
    $cartid = $_GET['cartid'];
     $stmt = $admin->cud("UPDATE `cart` SET `quantity` = '$cartproductq' 
     WHERE `cart`.`c_id` = '$cartid'","updated");
    $admin->redirect('../cart');
    }
    
}
  if(isset($_POST['placeorder'])){
           $cname = "";
           $cnumber = "";
           if(isset($_POST['paymentMethod']) && $_POST['paymentMethod'] == "Credit card" ){
              $paymentMethod = $_POST['paymentMethod'];
              $cname = $_POST['fname'];
              $dd = $_POST['dd'];
              $cnumber = $_POST['cnumber'];
              $yyyy = $_POST['yyyy'];
              $cvv = $_POST['cvv'];
           }
            if(isset($_POST['paymentMethod']) && $_POST['paymentMethod'] == "Debit card" ){
               $paymentMethod = $_POST['paymentMethod'];
              $fname = $_POST['fname'];
              $dd = $_POST['dd'];
              $cnumber = $_POST['cnumber'];
              $yyyy = $_POST['yyyy'];
              $cvv = $_POST['cvv'];
           }
           if(isset($_POST['paymentMethod']) && $_POST['paymentMethod'] == "Cash On Delivery" ){
               $paymentMethod = $_POST['paymentMethod'];
           }
            $cid = $_SESSION['cust_id'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $add1 = $_POST['add1'];
                $add2 = $_POST['add2'];
                $dist = $_POST['dist'];
                $zip = $_POST['zip'];
                $shippingoption = $_POST['shipping-option'];
                $stutus = "Ordered";
                $totammount = $_SESSION['grandtotal'];
                $stmt = $admin -> cud("INSERT INTO `orders` ( `fname`, `lname`, `email`, `add1`, `add2`, `district`, `zip`, `shipping_method`, `total_ammount`, `c_id`, `o_date`, `o_stutus`) 
                VALUES ('".$fname."','".$lname."','".$email."','".$add1."','".$add2."','".$dist."','".$zip."','".$shippingoption."','".$totammount."','".$cid."',NOW(),'".$stutus."') ","saved");
                  if($stmt){
                    $stmt = $admin -> ret("SELECT `or_id` FROM `orders` WHERE `c_id` = '$cid' ORDER BY `or_id` DESC");
                    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
                    $oid = $row['or_id'];

                    $stmt = $admin -> cud("INSERT INTO `payment` (`ord_id`,  `pa_type`, `amount`, `cname`, `cnumber`, `date`) 
                    VALUES('".$oid."','".$paymentMethod."','".$totammount."','".$fname."','".$cnumber."',NOW()) ","saved");
                    $i = 0;
                    $stmt = $admin -> ret("SELECT * FROM `cart` WHERE `cust_id` = '$cid'");
                    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
                        $productId[$i] = $row['p_id'];
                        $qun[$i] = $row['quantity'];
                        // $att[$i] = $row['att_id'];
                        $i++;
                    }
                    $x=0;
                    while($x < $i){ 
                        $pid = $productId[$x];
                        $q = $qun[$x];
                        // $at = $att[$x];
                        $stmt = $admin -> cud("INSERT INTO `pending_order` ( `o_id`, `p_id`, `quantity`, `c_id`, `po_date`) 
                        VALUES ('".$oid."','".$pid."','".$q."','".$cid."',NOW())","saved");
                        
                        $astmt = $admin -> ret("SELECT * FROM `products` WHERE `p_id` = '$pid'");
                        $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
                        $getq = $arow['quantity'];
                        $getsold = $arow['p_sold'];
                        $newq = $getq - $q;
                        $newsold = $getsold + $q;
                        $admin -> cud("UPDATE `products` SET `quantity` = '$newq' WHERE `products`.`p_id` = '$pid'","update");
                        $admin -> cud("UPDATE `products` SET `p_sold` = '$newsold' WHERE `products`.`p_id` = '$pid'","update");

                        $x++;
                    }

                    
                   


                    echo "<script>
                    alert('Your order is placed.');
                    window.location.href='../orders.php';
                    </script>";
                    }else{
                        echo "<script>
                    alert('Somthing went wrong please try again.');
                    window.location.href='../checkout.php';
                    </script>";
                }

       }








?>