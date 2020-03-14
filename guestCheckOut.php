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
    <?php include('include/header.php'); ?>
    <!-- Header -->
    <!-- Page Header Section -->
    <section class="sec gst-chck-ot-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-hed">
                        <h2 class="sec-title">Guest Checkout</h2>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <!-- Page Header Section -->
    <!-- Guest Checkout Sections -->
    <section class="sec clnr-reg-sec form-1">
        <div class="container">
            <div class="wrap_register_white">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="inr_signup left_info">
                            <form class="" method="">
                                <!--  -->                                
                                <div class="row">                                    
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>First Name</label>
                                            <input type="text" name="" class="form-control" placeholder="Enter First Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Last Name</label>
                                            <input type="text" name="" class="form-control" placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Email Address</label>
                                            <input type="text" name="" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Billing Address</label>
                                            <textarea class="form-control" placeholder="Enter Billing Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Select Country</label>
                                            <select class="form-control">
                                                <option selected="selected" disabled="disabled">Please Select</option>
                                                <option value="1">United States of America</option>
                                                <option value="2">India</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Select State</label>
                                            <select class="form-control">
                                                <option selected="selected" disabled="disabled">Please Select</option>
                                                <option value="1">State 1</option>
                                                <option value="2">State 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Select City</label>
                                            <select class="form-control">
                                                <option selected="selected" disabled="disabled">Please Select</option>
                                                <option value="1">City 1</option>
                                                <option value="2">City 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Zip/Post Code</label>
                                            <input type="text" name="" class="form-control" placeholder="Enter Zip/Post Code">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Contact Number</label>
                                            <input type="text" name="" class="form-control" placeholder="Enter Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Card Number*</label>
                                            <input type="text" name="" class="form-control" placeholder="Enter Card Number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Security Code(CVC)*</label>
                                            <input type="text" name="" class="form-control" placeholder="Enter Security Code">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group text-left">
                                            <label>Expiration Date*</label>
                                            <select class="form-control">
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="2">03</option>
                                                <option value="2">04</option>
                                                <option value="2">05</option>
                                                <option value="2">06</option>
                                                <option value="2">07</option>
                                                <option value="2">08</option>
                                                <option value="2">09</option>
                                                <option value="2">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group text-left">
                                            <label class="m-t-15"></label>
                                            <select class="form-control">
                                                <option value="1">2019</option>
                                                <option value="2">2020</option>
                                                <option value="3">2021</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>                                
                                <!--  -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="button_nex_prev">                    
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check mb-3 m-t-10 p-l-0">
                                <div class="pretty p-icon p-curve p-pulse">
                                    <input type="checkbox">
                                    <div class="state p-info-o">
                                        <i class="icon mdi mdi-check fas fa-check"></i>
                                        <label> I Accept <a href="javascript:;" class="clr-txt" data-toggle="modal" data-target="#termsModal">TERMS AND CONDITIONS</a> and <a href="javascript:;" class="clr-txt" data-toggle="modal" data-target="#privacyPolicyModal">PRIVACY POLICY</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="javascript:;" class="btn theme-btn">Checkout</a>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-- Guest Checkout Sections -->
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
	<!-- My Script -->
	<script type="text/javascript" src="js/myScript.js"></script>
	<!-- Scripts -->
</body>
</html>