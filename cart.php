<?php 

include 'config.php';
 if(isset($_SESSION['cust_id'])){
        $cid = $_SESSION['cust_id'] ;
    }

$admin = new Admin();

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="cart/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="cart/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="cart/css/style.css" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5" style="background-color:#FFF !important">
           
           
        </div>
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>Kadamaje Farmhouse,Uppinangdy,Dhakshina kannada</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>dkadammaje@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>9483286010</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include 'header.php' ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5" style="background-color:rgb(122 183 48) !important">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<?php 
                    if(isset($_SESSION['cust_id'])){
                ?>

    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-12 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr style="background-color:rgb(122 183 48) !important">
                            <th scope="col">Images</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                       <?php
                            $stmt = $admin -> ret("SELECT * FROM `cart` WHERE `cust_id` = '$cid'");
                            $i = 0;
                            $a = 0;
                            $subtotal = 0;
                            while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
                               $a++;
                                $pid = $row['p_id'];
                                // $att_id = $row['att_id'];
                                // if($att_id == "NULL"){
                                //     $atprice = 0;
                                // }else{
                                    // $attstmt = $admin -> ret("SELECT * FROM `attribution` WHERE `at_id` = '$att_id'");
                                    // $attrow = $attstmt -> fetch(PDO::FETCH_ASSOC);
                                    // $atprice = $attrow['v_price'];
                                // }
                                $astmt = $admin -> ret("SELECT * FROM `products` WHERE `p_id` = '$pid' ");
                                $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
                            ?>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img width="50px" class="img-fluid" src="admin/controller/<?php echo $arow['image'] ?>" alt="" />
                    </div>
                    <div class="media-body">
                      <td>
                      <p><?= $arow['p_name']?></p>

                    </div>
                  </div>
                </td>
                <td>
                  <h5><?= $price =  $arow['p_price'];  echo " .00/-" ?></h5>
                </td>
                <td class="quantity-box"><input type="number" name="quntity" id="<?= $i ?>" onChange="changeRate(<?= $row['c_id']?>,<?php echo $i; ?>,<?= $row['p_id'] ?>)" size="4" value="<?= $row['quantity']?>" min="1" step="1" class="c-input-text qty text text"></td>
                
                  <td class="total-pr">
                                        <p><?php echo $totlepproduct = $price * $row['quantity'] ; echo " .00/-"?></p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="Controller/delete.php?fromcartid=<?= $row['c_id']?>">
                  <i class="fas fa-times"></i>
                </a>
                                    </td>

                                <?php 
                                $subtotal = $subtotal +  $totlepproduct;
                             ++$i;
                            }

                                ?>
 <?php  } ?>
                                  </td>
              </tr>
              
                
              
            </tbody>
          </table>

<br><br><br><?php
        if ($i == 0) {
                            ?>
                          
                                <div colspan="100%" style="bottom:60px"     class="alert alert-danger text-center">
                                    No records
                                </div>
                          
                        <?php }else{ ?>


                        <div class="row my-4">
                <div class="col-lg-7 col-sm-12"></div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0" style="background-color:rgb(122 183 48) !important">
                        <h4 class="font-weight-semi-bold m-0">Order summary
</h4>
                    </div>
                    <div class="card-body" >
                        <div class="d-flex justify-content-between mb-3 pt-1" >
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">₹ <?=  $subtotal ?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Tax ( 5% )</h6>
                            <h6 class="font-weight-medium"> ₹ <?php
                                    $actualPrice        =   "";
                                    $total              =   $subtotal ;//User Entry Total Amount
                                    $gst                =   5;//User Entry GST Tax %
                                    $calculateTax       =   100+$gst;
                                    $calculateAmount    =   $total*100;
                                    $actualPrice        =   $calculateAmount/$calculateTax;
                                    $actualPrice       =   round($actualPrice,2);
                                    $gstAmount         =   round($total-$actualPrice,2);
                                    echo $gstAmount;

                                    $grandtotal = $subtotal + $gstAmount;
                            
                            ?></h6>
                        </div><div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping Cost</h6>
                            <h6 class="font-weight-medium"> <?php
                                if($grandtotal > 150){ 
                            ?>
                            <div class="ml-auto font-weight-bold"> Free </div>
                            <?php
                                }else{ 
                                   $grandtotal = $grandtotal + 50;
                            ?>
                            <div class="ml-auto font-weight-bold"> ₹ 50 </div>
                            <?php
                                }
                            ?></h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Grand Total ( Including GST )</h5>
                            <h5 class="font-weight-bold">₹ <?php 
                            $_SESSION['grandtotal'] =  $grandtotal;
                            
                            echo $_SESSION['grandtotal'] ." /-";
                            ?> </h5>
                        </div>
                        <a href="checkout.php" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                        
                    </div>
                </div>
                    

                   
                </div>
              
            </div>


                      <?php  } ?>
                    
                       
                        
                 
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    <?php include 'footer.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
<script>
    function changeRate(id,pos,pid) {

        var qu = document.getElementsByName("quntity")[pos].value;
        window.location.href="Controller/add.php?cartid="+id+"&cartproductq="+qu+"&pid="+pid;
        }
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="cart/lib/easing/easing.min.js"></script>
    <script src="cart/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="cart/mail/jqBootstrapValidation.min.js"></script>
    <script src="cart/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="cart/js/main.js"></script>
</body>

</html>