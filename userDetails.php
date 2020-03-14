<!DOCTYPE html>
<html>
<head>
	<title> Ocha Clean </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon -->
    <link rel="icon" href="images/favicon.png" sizes="32x32" type="image/png">
    <!-- Stylesheets -->
   	<?php include('include/mastercss.php'); ?>
    <!-- Stylesheets -->
</head>
<body>
	<!-- Header -->
    <?php include('include/headerDashboard.php'); ?>
    <!-- Header -->
    <!-- Dashboard Sidebar -->
    <?php include('include/sidebar.php'); ?>
    <!-- Dashboard Sidebar -->
    <!-- Dashboard Content -->
    <section class="cleaner-dash-wrap">
        <!-- My Details Sections -->
        <section class="sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-hed">
                            <h2 class="sec-title">My Profile</h2>
                        </div>
                    </div>
                </div>
                <div class="wrap_register_white">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="inr_signup left_info">
                                <form class="" method="">
                                    <!--  -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="prfl-img-wrap">
                                                <figure>
                                                    <img src="images/man-wearing-black-zip-up-jacket-near-beach-smiling-at-the-736716.jpg" class="img-fluid prfl-img">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" value="John" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" value="Doe" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" value="johndoe@email.com" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" value="9876543210" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Full Address</label>
                                                <textarea class="form-control" disabled="disabled">#some address</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Billing Address</label>
                                                <textarea class="form-control" disabled="disabled">#some address</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Bank Name*</label>
                                                <input type="text" class="form-control" value="ABC Bank" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Account Name*</label>
                                                <input type="text" class="form-control" value="John Doe" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>International Bank Account Number*</label>
                                                <input type="text" class="form-control" value="1234567890" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>IFSC Code*</label>
                                                <input type="text" class="form-control" value="12345" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Swift/BIC Code*</label>
                                                <input type="text" class="form-control" value="123" disabled="disabled">
                                            </div>
                                        </div>                           
                                    </div>                                
                                    <!--  -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">                        
                        <div class="row m-t-25">
                            <div class="col-12">                                
                                <div class="text-center">
                                    <a href="javascript:;" class="btn theme-btn">Edit Profile</a>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </section>
        <!-- My Details Sections -->               
    </section>
    <!-- Dashboard Content -->
    <!-- Footer -->
    <?php include('include/footer.php'); ?>
    <!-- Footer -->
    <!-- Modal -->
    <?php include('include/modal.php'); ?>
    <!-- Modal -->
	<!-- Scripts -->
	<?php include('include/masterjs.php'); ?>
	<!-- Plugin Initialization -->
    <script type="text/javascript" src="js/pluginInit/flagSelectorInit.js"></script>
    <script type="text/javascript" src="js/pluginInit/hamburgerIconAnimation.js"></script>
	<!-- My Script -->
	<script type="text/javascript" src="js/myScript.js"></script>    
	<!-- Scripts -->
</body>
</html>