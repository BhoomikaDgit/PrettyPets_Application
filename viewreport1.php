<?php



include 'config.php';
$admin= new Admin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include 'sidebar.php' ?> 
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include 'header.php' ?>
            <!-- END HEADER DESKTOP-->
<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Booking Reports</h4>

                                <br>
                                <br>

                                <form class="forms-sample" method="POST" action="viewreport1.php">

                                    <div class="form-group">
                                        <label for="exampleInputName1">Select starting date</label>
                                        <input type="date" name="start_date" class="form-control" id="exampleInputName1" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Select ending date</label>
                                        <input type="date" name="end_date" class="form-control" id="exampleInputName1" required>
                                    </div>


                                    <button type="submit" name="view_report" class="btn btn-primary mr-2">view report</button>
                                    <a href="viewreport1.php" class="btn btn-light">Clear</a>
                                </form>
                            </div>
                        </div>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                 <?php
                    //showing order table
                    if (isset($_POST['view_report'])) {

                        $start_date = $_POST['start_date'];

                        $end_date = $_POST['end_date'];
                    ?>

                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <br>
                    <br>
                    <h2 style="text-align: center;">Reports</h2>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                     <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Order id</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Address1</th>
                                                <th>Address2</th>
                                                <th>District</th>
                                                <th>Zip</th>
                                                <th>Shipping method</th>
                                                <th>Total Amount</th>
                                                <th>Ordered Date</th>
                                                <th>Ordered Status</th>
                                                <!-- <th>Shipment</th> -->
                                                <!-- <th class="text-right">Update</th> -->
                                            </tr>
                                        </thead>
                                        <?php 
                                                    $stmt=$admin->ret("select * from `orders` where `o_stutus`!='Canceled' and `o_date` between '$start_date' and '$end_date'");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['or_id']?></td>
                                                <td><?php echo $row['fname']?></td>
                                                <td><?php echo $row['lname']?></td>
                                                <td><?php echo $row['email']?></td>
                                                
                                                <td><?php echo $row['add1']?></td>
                                                <td><?php echo $row['add2']?></td>
                                                <td><?php echo $row['district']?></td>
                                                <td><?php echo $row['zip']?></td>
                                                <td><?php echo $row['shipping_method']?></td>
                                                <td><?php echo $row['total_ammount']?></td>
                                                <td><?php echo $row['o_date']?></td>
                                                <td><?php echo $row['o_stutus']?></td>
                                                <!-- <td><a href="sendship.php?id=<?php echo $row['or_id'] ?>" class="btn btn-primary">Send Shipment</a></td> -->
                                   
                                              

                                            </tr>
                                           
                                        </tbody>
                                        <?php } ?>
                                        
                                    </table>

                                    <br><br>


                                    <h4>Sold Pet Details</h4>
                                    <hr>

                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Pet ID</th>
                                                <th>Pet Code</th>
                                                <th>Pet Category</th>
                                                <th>Breed</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th class="text-right">Price</th>
                                                <th class="text-right">Description</th>
                                                <th class="text-right">Image</th>
                                                <!-- <th class="text-right">Service</th>
                                                <th class="text-right">Update</th>
                                                <th class="text-right">Delete</th> -->
                                                
                                            </tr>
                                        </thead>
                                        <?php 
                                                    $stmt=$admin->ret("SELECT * FROM (( `pet_table` INNER JOIN `pet_category` on pet_category.category_id=pet_table.pc_id)INNER JOIN `pet_breed` on pet_breed.breed_id=pet_table.pb_id) where pet_table.status='sold'");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

                                                    
                                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['pet_id']?></td>
                                                <td><?php echo $row['pet_code']?></td>
                                                <td><?php echo $row['category_name']?></td>
                                                <td><?php echo $row['breed_name']?></td>

                                                   <?php 
                                                             $dateOfBirth = $row['dob'];
                                                             $dob = new DateTime($dateOfBirth);
                                                             $now = new DateTime();
                                                             $diff = $now->diff($dob);
                     
                                                         ?>
                                    <td><?php echo $diff->y." Year ".$diff->m." month ".$diff->d." days " ?></td>
                                               
                                                
                                                <td><?php echo $row['gender']?></td>
                                                <td><?php echo $row['pet_price']?></td>
                                                <td><textarea readonly=""><?php echo $row['pet_desc']?></textarea></td>
                                                <td><img src="controller/<?php echo $row['pet_image']?>" style="max-width:200px !important;height: 160px"></td>

                                                 <!-- <td><a href="addservices2.php?pcid=<?php echo $row['pet_id'] ?>" class="btn btn-primary" onclick="return confirm('Are you sure want to service?')">ADD SERVICE</a></td>
                                                <td><a href="updatepet.php?pcid=<?php echo $row['pet_id'] ?>" class="btn btn-success" onclick="return confirm('Are you sure want to update?')">UPDATE</a></td>
                                                <td><a href="controller/deletepet.php?pcid=<?php echo $row['pet_id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">DELETE</a></td>
                                                -->
                                            </tr>
                                           
                                        </tbody>
                                        <?php } ?>
                                        
                                    </table>

                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <?php include 'footer.php' ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>

    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
