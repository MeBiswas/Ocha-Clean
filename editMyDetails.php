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
        <!-- Edit My Details Sections -->
        <section class="sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-hed">
                            <h2 class="sec-title">Edit Details</h2>
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
                                                    <img id="imgOutput" class="changed-image" />
                                                    <img id="prevImg" src="images/women-s-white-and-black-button-up-collared-shirt-774909.jpg" class="img-fluid prfl-img">
                                                    <span class="prfl-img-change"><i class="fas fa-edit"></i></span>
                                                    <input type="file" name="image" id="imageToUpload" accept="image/*" onchange="loadFile(event)">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Select Country</label>
                                                <select class="form-control">
                                                    <option selected="selected" value="1">United States of America</option>
                                                    <option value="2">India</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" value="Jane" disabled="disabled">
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
                                                <label>Date of Birth</label>
                                                <input data-provide="datepicker" type="text" class="form-control" value="01/01/1995" disabled="disabled">
                                                <span class="clndr-icn"><i class="fas fa-calendar-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" value="+1 9876543210">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" value="janedoe@example.com">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Select Gender</label>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="pretty p-default p-curve">
                                                            <input type="radio" name="gender" disabled="disabled"/>
                                                            <div class="state p-success-o">
                                                                <label>Male</label>
                                                            </div>
                                                        </div>
                                                        <div class="pretty p-default p-curve">
                                                            <input type="radio" name="gender" checked="checked"/>
                                                            <div class="state p-success-o">
                                                                <label>Female</label>
                                                            </div>
                                                        </div>
                                                        <div class="pretty p-default p-curve">
                                                            <input type="radio" name="gender" disabled="disabled"/>
                                                            <div class="state p-success-o">
                                                                <label>Other</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Enter Post Code/Zip Code</label>
                                                <input type="text" class="form-control" value="123456">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Enter Full Address</label>
                                                <textarea class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Experience</label>
                                                <select class="form-control">
                                                    <option>Please Select</option>
                                                    <option selected="selected" value="1">below 1 year</option>
                                                    <option value="2">1-2 years</option>
                                                    <option value="3">2-5 years</option>
                                                    <option value="4">5 years</option>
                                                    <option value="5">more</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Cleaning Experience</label>
                                                <div class="row">
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> Home Cleaning</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> Hotel Cleaning</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> End of Tenancy Cleaning</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox" checked="checked">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> Office Cleaning</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> Other Cleaning</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>What Cleaning are you available for?</label>
                                                <div class="row">
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> Domestic</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox" checked="checked">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> Commercial Cleaning</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> Short Term Rental</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-left">
                                                <label>Eligibility</label>
                                                <div class="row">
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox" checked="checked">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> I have right to work in the country that i live in</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox" checked="checked">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> I have a National Insurance Number or equivalent</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox" checked="checked">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> I have a bank account</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="pretty p-icon p-curve p-pulse">
                                                            <input type="checkbox" checked="checked">
                                                            <div class="state p-info-o">
                                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                                <label> I do not have a criminal record</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                            
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
                                    <a href="javascript:;" class="btn theme-btn">Save Details</a>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </section>
        <!-- Edit My Details Sections -->        
    </section>
    <!-- Dashboard Content -->
    <!-- Footer -->
    <?php include('include/footer.php'); ?>
    <!-- Footer -->
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