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
    <title>PRETTY PETS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
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
    <link href="style1.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3" style="color: #7ab730 !important"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>Kadamaje Farmhouse,Uppinangdy,Dhakshina kannada</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3" style="color: #7ab730 !important"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>dkadammje@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3" style="color: #7ab730 !important"></i>
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


    <!-- Products Start -->
     <!-- Products Start -->
     <div class="container-fluid py-5">
        <div class="container">
            <!--Important link from https://bootsnipp.com/snippets/XqvZr-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"><div class="pd-wrap">
        <div class="container">
            <div class="heading-section">
                <h2>Product Details</h2>
            </div>
            <div class="row" >
 <div class="col-lg-6" >
            <h3>Billing Details</h3>
            <form action="Controller/add.php" class="row contact_form"  autocomplete="off"  method="post">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" placeholder="First name" name="fname" required="" />
                <span class="placeholder" data-placeholder="First name"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last" name="lname" placeholder="Last name" />
                <span class="placeholder" data-placeholder="Last name"></span>
              </div>
              <div class="col-md-12 form-group">
                <input type="email" class="form-control" id="company" name="email" placeholder="Email" />
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="add1" placeholder="Address 1" />
                <span class="placeholder" data-placeholder="Address 1"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" placeholder="Address 2" name="add2" />
                <span class="placeholder" data-placeholder="Address 2"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <select  required class="form-control" name="dist" id="dist">
                  <option value="1">District</option>
<!-- <option>Bagalkot </option>
                  <option>Ballari (Bellary) </option>
                  <option>Belagavi (Belgaum) </option>
                  <option>Bengaluru </option>
                  <option>Bengaluru (Bangalore) Rural </option>
                  <option>Bengaluru (Bangalore) Urban </option>
                  <option>Bidar </option>
                  <option>Chamarajanagar </option>
                  <option>Chikballapur </option>
                  <option>Chikkamagaluru (Chikmagalur) </option>
                  <option>Chitradurga </option>
                  <option>Dakshina Kannada </option>
                  <option>Davangere </option>
                  <option>Dharwad </option>
                  <option>Gadag </option>
                  <option>Hassan </option>
                  <option>Haveri </option>
                  <option>Kalaburagi (Gulbarga) </option>
                  <option>Kodagu </option>
                  <option>Kolar </option>
                  <option>Koppal </option>
                  <option>Mandya </option>
                  <option>Mysuru (Mysore) </option>
                  <option>Raichur </option>
                  <option>Ramanagara </option>
                  <option>Shivamogga (Shimoga) </option>
                  <option>Tumakuru (Tumkur) </option>
                  <option>Udupi </option>
                  <option>Uttara Kannada (Karwar) </option>
                  <option>Vijayapura (Bijapur) </option>
                  <option>Yadgir </option> -->
                  <option> Dakshina Kannada</option>
                </select>
              </div>
             
              <div class="col-md-12 form-group p_star">
                <input type="number" class="form-control" id="city" placeholder="Orders will be accepted only for dakshina kannada Zip code" name="zip" />
                <span class="placeholder" data-placeholder="Zip code"></span>
              </div>
              
           <hr class="mb-4">
                            <div class="title"> <span>Payment</span> </div>
                            <div class="d-block my-4">
                                <div class="custom-control custom-radio">
                                    <input  name="paymentMethod" value="Credit card" type="radio" class="custom-control-input"  onclick="javascript:yesnoCheck();"  id="noCheck" >
                                    <label class="custom-control-label"  for="noCheck">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input  name="paymentMethod" value="Debit card" type="radio" class="custom-control-input" onclick="javascript:yesnoCheck2();" id="yesCheck2" >
                                    <label class="custom-control-label" for="yesCheck2">Debit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input  name="paymentMethod" onclick="javascript:yesnoCheck();"  id="yesCheck" value="Cash On Delivery" type="radio" class="custom-control-input">
                                    <label class="custom-control-label" for="yesCheck">Cash On Delivery</label>
                                </div>
                            </div>
                            <div class="row" id="ifYes" style="visibility:hidden">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" name="cname" id="cc-name" placeholder="" > <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback"> Name on card is required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Card number</label>
                                    <input type="text" class="form-control" name="cnumber" id="cc-number" placeholder="" pattern="[0-9]{16}" title="Please Enter 16 digit Card No" >
                                    <div class="invalid-feedback"> Credit card number is required </div>
                                </div>
                            
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="number" min="1" name="dd" class="form-control" id="cc-expiration" placeholder="DD" >
                                    <div class="invalid-feedback"> Expiration date required </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration"> &nbsp; </label>
                                    <input type="number" min="1" class="form-control" name="yyyy" id="cc-expiration" placeholder="YYYY" >
                                    <div class="invalid-feedback"> Expiration Year required </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="password" class="form-control" name="cvv" id="cc-cvv" placeholder="" >
                                    <div class="invalid-feedback"> Security code required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div >
                                        <ul style="list-style: none">
                                            <li><img  style="width:400px;"class="img-fluid" src="img/payment-icon/1.png" alt=""></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-1">   
              
          
          </div>
 <div class="col-lg-6">
            <div class="order_box">
              <div class="mb-4" >
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shipping-option" value="Standard Delivery" class="custom-control-input" checked="checked" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Standard Delivery</label> <span class="float-right font-weight-bold"></span> </div>
                                    <div class="ml-4 mb-2 small">(3-7 business days)</div>
                                    </div>

              <h2>Your Order</h2>
              <ul class="" style="list-style: none">
               
                <li>
                  <a href="#">Product
                    <span>Total</span>

                  </a>
                </li>
                 <?php
                                      $stmt = $admin -> ret("SELECT * FROM `cart` WHERE `cust_id` = '$cid'");
                                      $subtotal = 0;  
                                      while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
                                         $pid = $row['p_id'];
                                         $astmt = $admin -> ret("SELECT * FROM `products` WHERE `p_id` = '$pid' ");
                                         $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
                            ?>
                <li>
                  <a href="#"> </a><?= $arow['p_name']?>
                    <span class="middle"><?= $row['quantity']?> *</span>
                    <span class="last"><?php echo $price =  $arow['p_price'] ; echo " .00/-" ?></span>
                    <!-- <span><?php echo $totlepproduct = $price * $row['quantity'] ; echo " .00/-"?></span>-->
                 
                   <?php
                                     $subtotal = $subtotal +  $totlepproduct;
                                    }
                                    ?>
                </li>
               
                
              </ul>
              <ul class="list list_2" style="list-style: none">
                <li>
                  <a href="#">Subtotal
                    <span>₹ <?= $subtotal?></span>
                  </a>
                </li>
                <li>
                  <a href="#">Tax ( 5% )
                    <span> ₹ <?php
                                    $actualPrice        =   "";
                                    $total              =   $subtotal;//User Entry Total Amount
                                    $gst                =   5;//User Entry GST Tax %
                                    $calculateTax       =   100+$gst;
                                    $calculateAmount    =   $total*100;
                                    $actualPrice        =   $calculateAmount/$calculateTax;
                                    $actualPrice       =   round($actualPrice,2);
                                    $gstAmount         =   round($total-$actualPrice,2);
                                    echo $gstAmount;

                                    $grandtotal = $subtotal + $gstAmount;
                            
                            ?></span>
                  </a>
                </li>
                <li>
                  <a href="#">Shipping
                    <span><?php
                                if($_SESSION['grandtotal'] > 150){ 
                                    $_SESSION['shipping'] = "Free";
                            ?>
                            <div class="ml-auto font-weight-bold"> Free </div>
                            <?php
                                }else{ 
                                   $_SESSION['grandtotal'] = $_SESSION['grandtotal'] + 50;
                                   $_SESSION['shipping'] = 50;
                            ?>
                            <div class="ml-auto font-weight-bold"> ₹ 50 </div>
                            <?php
                                }
                            ?></span>
                  </a>
                </li>
                <li>
                  <a href="#">Grand Total ( Including GST )
                    <span> <?= $_SESSION['grandtotal'] ." /-"?></span>
                  </a>
                </li>
              </ul>
                            <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector" required="" />
                <label for="f-option4">I’ve read and accept the </label>
                <a href="terms.html">terms & conditions*</a>
              </div>
              <button type="submit" name="placeorder" class="btn btn-secondary">Place Your Order</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </section>


                </div>
            </div>
            
         
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="   sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </div>
    </div>
    <!-- Products End -->
    <!-- Products End -->


    <!-- Offer Start -->
  
    <!-- Offer End -->


    <!-- Pricing Plan Start -->

    <!-- Pricing Plan End -->
    

    <!-- Footer Start -->
    <?php include 'footer.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script type="text/javascript">
        $(document).ready(function() {
            var slider = $("#slider");
            var thumb = $("#thumb");
            var slidesPerPage = 4; //globaly define number of elements per page
            var syncedSecondary = true;
            slider.owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: false,
                autoplay: false, 
                dots: false,
                loop: true,
                responsiveRefreshRate: 200
            }).on('changed.owl.carousel', syncPosition);
            thumb
                .on('initialized.owl.carousel', function() {
                    thumb.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    nav: true,
                    item: 4,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: slidesPerPage, 
                    navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                    responsiveRefreshRate: 100
                }).on('changed.owl.carousel', syncPosition2);
            function syncPosition(el) {
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);
                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }
                thumb
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = thumb.find('.owl-item.active').length - 1;
                var start = thumb.find('.owl-item.active').first().index();
                var end = thumb.find('.owl-item.active').last().index();
                if (current > end) {
                    thumb.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    thumb.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }
            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    slider.data('owl.carousel').to(number, 100, true);
                }
            }
            thumb.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                slider.data('owl.carousel').to(number, 300, true);
            });


            $(".qtyminus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1> 0)
                    { now--;}
                    $(".qty").val(now);
                }
            })            
            $(".qtyplus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    $(".qty").val(parseInt(now)+1);
                }
            });
        });
    </script>
    <script type="text/javascript">
      
        function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'hidden';
    }
    else document.getElementById('ifYes').style.visibility = 'visible';

}





    </script>
    <script type="text/javascript">
      
        function yesnoCheck2() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'hidden';
    }
    else document.getElementById('ifYes').style.visibility = 'visible';
   

}





    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>