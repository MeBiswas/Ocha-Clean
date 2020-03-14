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
    <!-- Detail Form Section -->
    <section class="sec detail-form-sec">
        <div class="sec-ovrlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-hed">
                        <h2>Become an OCHA CLEANER</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="detail-form-wrap">
                        <div class="detail-form-content">
                            <form>
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
                                    <div class="col-6">
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
                                                    <label>Date of Birth</label>
                                                    <input data-provide="datepicker" type="text" name="" class="form-control" placeholder="Enter Date of Birth">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group text-left">
                                                    <label>Email Address</label>
                                                    <input type="text" name="" class="form-control" placeholder="Enter Date of Birth">
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
                                            <div class="col-12">
                                                <div class="form-group text-left">
                                                    <label>Company Status</label>
                                                    <select class="form-control">
                                                        <option selected="selected" disabled="disabled">Please Select</option>
                                                        <option value="1">Sole – Trader</option>
                                                        <option value="2">Private Limited Company</option>
                                                        <option value="3">Agency Staff</option>
                                                        <option value="4">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group text-left">
                                                    <label>Available For</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="availability">
                                                        <label class="form-check-label">Domestic</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="availability">
                                                        <label class="form-check-label">Commercial Cleaning</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="availability">
                                                        <label class="form-check-label">Short Term Rental</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group text-left">
                                                    <label>Select Gender</label>
                                                    <select class="form-control">
                                                        <option selected="selected" disabled="disabled">Please Select</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                        <option value="3">Other</option>
                                                    </select>
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
                                                    <label>Contact Number</label>
                                                    <input type="text" name="" class="form-control" placeholder="Enter Contact Number">
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
                                                    <label>What Cleaning have you done</label>
                                                    <select class="form-control">
                                                        <option selected="selected" disabled="disabled">Please Select</option>
                                                        <option value="1">Residential</option>
                                                        <option value="2">Commercial</option>
                                                        <option value="3">Industrial</option>
                                                        <option value="4">End of Tenancy</option>
                                                        <option value="5">Short term rental (air bnb)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group text-left">
                                                    <label>Company Description</label>
                                                    <textarea class="form-control" placeholder="Add Description about your Company"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group text-left">
                                                    <label>Eligibility</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="availability">
                                                        <label class="form-check-label">Passport info I can bring a valid passport</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="availability">
                                                        <label class="form-check-label">I have a National Insurance Number</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="availability">
                                                        <label class="form-check-label">I have a bank account</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="availability">
                                                        <label class="form-check-label">I do not have a criminal record</label>
                                                    </div>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="text-center mb-3">
                                            <a href="javascript:;" class="btn cstm-btn">Take picture of yourself holding passport</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center mb-3">
                                            <a href="javascript:;" class="btn cstm-btn">Upload your right to work documentation</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center mb-3">
                                            <a href="javascript:;" class="btn cstm-btn">Upload a copy of your insurance</a>
                                        </div>
                                        <div class="form-check text-center mb-3">
                                            <input class="form-check-input" type="checkbox" name="availability">
                                            <label class="form-check-label">Accept Terms and Conditions</label>
                                        </div>
                                        <div class="text-center">
                                            <a href="javascript:;" class="btn cstm-btn" data-toggle="modal" data-target="#adminReview">Submit Request</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Detail Form Section -->
    <!-- Modal Section -->
    <?php include('include/modal.php'); ?>
    <!-- Modal Section -->
    <!-- Footer -->
    <?php include('include/footer.php'); ?>
    <!-- Footer -->
	<!-- Scripts -->
	<?php include('include/masterjs.php'); ?>
	<!-- Plugin Initialization -->
    <script type="text/javascript" src="js/pluginInit/flagSelectorInit.js"></script>
    <script type="text/javascript" src="js/pluginInit/datepickerInit.js"></script>
	<!-- My Script -->
	<script type="text/javascript" src="js/myScript.js"></script>
	<!-- Scripts -->
</body>
</html>