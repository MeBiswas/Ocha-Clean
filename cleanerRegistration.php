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
    <section class="page-hed-sec">
        <div class="page-hed-ovrl"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-hed-content-wrap">
                        <div class="page-hed-title">
                            <h1 class="entry-title">Become an Ocha Cleaner</h1>
                        </div>
                        <div class="page-breadcrumb-wrapper">
                            <span>
                                <a href="index.php">
                                    <img src="images/svg/house.svg" alt="house icon" class="img-fluid breadcrumb-icon" />
                                </a>
                            </span>
                            <span class="breadcrumb-separator">/</span>
                            <span><a href="becomeCleaner.php">Requirements</a></span>
                            <span class="breadcrumb-separator">/</span>
                            <span>Become an Ocha Cleaner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header Section -->
    <!-- Become Cleaner Registrations Sections -->
    <section class="sec page_numbers">
        <div class="container">
            <ul class="numb_pag list-inline d-flex justify-content-center" type="none">
                <li class="list-inline-item bsns_dtl_li active"><span>1</span></li>
                <li class="list-inline-item stor_subs_li"><span>2</span></li>
                <li class="list-inline-item stor_subs_li"><span>3</span></li>
            </ul>
        </div>
    </section>
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
                                        <div class="prfl-img-wrap">
                                            <figure>
                                                <img id="imgOutput" class="changed-image" />
                                                <img id="prevImg" src="images/upload-placeholder.png" class="img-fluid prfl-img">
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
                                                <option selected="selected" disabled="disabled">Please Select</option>
                                                <option value="1">United States of America</option>
                                                <option value="2">India</option>
                                            </select>
                                        </div>
                                    </div>
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
                                            <label>Date of Birth</label>
                                            <input data-provide="datepicker" type="text" name="" class="form-control" placeholder="Enter Date of Birth">
                                            <span class="clndr-icn"><i class="fas fa-calendar-alt"></i></span>
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
                                            <label>Email Address</label>
                                            <input type="text" name="" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                    </div>                                    
                                </div>                                
                                <!--  -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="button_nex_prev">
                    <div class="">
                        <div class="form-group text-right">
                            <a class="btn theme-btn btn_nex" href="#">Next <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec clnr-reg-sec form-2">
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
                                            <label>Select Gender</label>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="pretty p-default p-curve">
                                                        <input type="radio" name="gender" />
                                                        <div class="state p-success-o">
                                                            <label>Male</label>
                                                        </div>
                                                    </div>
                                                    <div class="pretty p-default p-curve">
                                                        <input type="radio" name="gender" />
                                                        <div class="state p-success-o">
                                                            <label>Female</label>
                                                        </div>
                                                    </div>
                                                    <div class="pretty p-default p-curve">
                                                        <input type="radio" name="gender" />
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
                                            <input type="text" name="" class="form-control" placeholder="Enter Post Code/Zip Code">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Enter Full Address</label>
                                            <textarea class="form-control" placeholder="Enter Full Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-left">
                                            <label>Experience</label>
                                            <select class="form-control">
                                                <option selected="selected" disabled="disabled">Please Select</option>
                                                <option value="1">below 1 year</option>
                                                <option value="2">1-2 years</option>
                                                <option value="3">2-5 years</option>
                                                <option value="4">5 years</option>
                                                <option value="5">more</option>
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
                    <div class="">
                        <div class="form-group text-right">
                            <a class="btn theme-btn btn_nex" href="#">Next <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec clnr-reg-sec form-3">
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
                                                        <input type="checkbox">
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
                                                        <input type="checkbox">
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
                                                        <input type="checkbox">
                                                        <div class="state p-info-o">
                                                            <i class="icon mdi mdi-check fas fa-check"></i>
                                                            <label> I have right to work in the country that i live in</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <div class="pretty p-icon p-curve p-pulse">
                                                        <input type="checkbox">
                                                        <div class="state p-info-o">
                                                            <i class="icon mdi mdi-check fas fa-check"></i>
                                                            <label> I have a National Insurance Number or equivalent</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <div class="pretty p-icon p-curve p-pulse">
                                                        <input type="checkbox">
                                                        <div class="state p-info-o">
                                                            <i class="icon mdi mdi-check fas fa-check"></i>
                                                            <label> I have a bank account</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <div class="pretty p-icon p-curve p-pulse">
                                                        <input type="checkbox">
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
                <div class="button_nex_prev">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center mb-3">
                                <a href="javascript:;" class="btn theme-btn" data-toggle="modal" data-target="#uploadPic">Take picture of yourself holding passport</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center mb-3">
                                <a href="javascript:;" class="btn theme-btn" data-toggle="modal" data-target="#uploadPic">Upload your right to work documentation</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check text-center mb-3 reg-tc">
                                <div class="pretty p-icon p-curve p-pulse">
                                    <input type="checkbox">
                                    <div class="state p-info-o">
                                        <i class="icon mdi mdi-check fas fa-check"></i>
                                        <label> Read and accepted our <a href="javascript:;" class="clr-txt" data-toggle="modal" data-target="#termsModal">TERMS AND CONDITIONS</a> and <a href="javascript:;" class="clr-txt" data-toggle="modal" data-target="#privacyPolicyModal">PRIVACY POLICY</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="javascript:;" class="btn theme-btn" data-toggle="modal" data-target="#adminReview">Submit Request</a>
                            </div>
                        </div>
                    </div>                    
                </div>                
            </div>
        </div>
    </section>
    <!-- Become Cleaner Registrations Sections -->
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