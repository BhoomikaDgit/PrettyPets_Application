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
            <?php include "header.php"?>
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

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Pet Type</th>
                                                <th>Breed Name</th>
                                                <th>Requested Date</th>
                                                <th>Status</th>
                                                <th></th>
                                        
                                            </tr>
                                        </thead>
                                        <?php 
                                                    $stmt=$admin->ret("SELECT * FROM (((`intrequest` inner join `pet_category` on pet_category.category_id = intrequest.pett_id) inner join `pet_breed` on pet_breed.breed_id = intrequest.breeed_id) inner join `customers` on customers.cust_id = intrequest.c_id)");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['cust_name']?></td>
                                                <td><?php echo $row['category_name']?></td>
                                                <td><?php echo $row['breed_name']?></td>
                                                <td><?php echo $row['date']?></td>
                                                <?php if($row['i_status'] == 'pending') { ?>
                                                <td><a href="controller/approveint.php?id=<?php echo $row['ir_id'] ?>" class="btn btn-success">Approve</a></td>
                                                    <td><a href="controller/rejectint.php?id=<?php echo $row['ir_id'] ?>" class="btn btn-danger">Reject</a></td>

                                            <?php }elseif($row['i_status'] == 'Approved') { ?>

                                            	  <td style="color: green"><?php echo $row['i_status']?></td>
                                            	  <td></td>


                                            <?php }else{ ?>

                                                <td><a href="sendreason.php?int=<?php echo $row['ir_id'] ?>" class="btn btn-primary">Send Reason</a></td>
                                                <td></td>

                                            <?php } ?>
                                          
                                               
                                                
                                            </tr>
                                           
                                        </tbody>
                                        <?php } ?>
                                        
                                    </table>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <?php include 'footer.php' ?>
                    </div>
                </div>
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
