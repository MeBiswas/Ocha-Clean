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
        <!-- Profile Head Section -->
        <section class="sec profile-hed-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-hed">
                            <h2 class="sec-title">My Profile</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-4">
                        <div class="pretty p-switch p-fill">
                            <input type="checkbox" checked="checked" />
                            <div class="state">
                                <label>On Job</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="cleaner-profile-img-wrap">
                            <div class="hovereffect">
                                <img class="img-fluid cleaner-profile-img" src="images/women-s-white-and-black-button-up-collared-shirt-774909.jpg" alt="Profile Image">
                                <div class="overlay">
                                   <a class="info" href="editMyDetails.php">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="circles">
                            <div class="first circle">
                                <span>10</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profile Head Section -->
        <!-- Calender Section -->
        <section class="sec calender-sec">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div id='external-events'>
                            <h4>My Schedule</h4>
                            <div id='external-events-list'>
                                <div class='fc-event'>Cleaning Job</div>
                            </div>
                            <div class='add-event'>
                                <i class="material-icons">add_circle_outline</i><span>Add New Job</span>
                            </div>
                            <p>
                                <input type='checkbox' id='drop-remove' />
                                <label for='drop-remove'>remove after drop</label>
                            </p>
                        </div>
                    </div>
                    <div class="col-10">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Calender Section -->
        <!-- Job Preference Section -->
        <section class="sec job-prefnce-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cover-distance-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-hed">
                                        <h2 class="sec-title">Job Preference</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <p>The number of miles that you are willing to travel away from their postcode/zipcode</p>
                                </div>
                                <div class="col-2">
                                    <div class="cart_options_wrap">
                                        <div class="inc_dec_inpt_wrap">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                                                      <span class="icon_minus"><i class="fas fa-minus"></i></span>
                                                    </button>
                                                </span>
                                                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                                                        <span class="icon_plus"><i class="fas fa-plus"></i></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-20">
                                <div class="col-6">
                                    <p>What Cleaning are you available for?</p>
                                </div>
                                <div class="col-6">
                                    <div class="clng-prfrnc-chcbx text-left">
                                        <div class="pretty p-icon p-curve p-pulse">
                                            <input type="checkbox">
                                            <div class="state p-info-o">
                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                <label> Domestic</label>
                                            </div>
                                        </div>
                                        <div class="pretty p-icon p-curve p-pulse">
                                            <input type="checkbox">
                                            <div class="state p-info-o">
                                                <i class="icon mdi mdi-check fas fa-check"></i>
                                                <label> Commercial Cleaning</label>
                                            </div>
                                        </div>
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
                    </div>
                </div>
            </div>
        </section>
        <!-- Job Preference Section -->
        <!-- Past/Upcoming Jobs Section -->
        <section class="sec pst-upcmg-jb-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="pst-upcmg-jb-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-hed">
                                        <h2 class="sec-title">Past Jobs, Upcoming Jobs</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="clnr-jobs-wrap">
                                                <div class="clnr-jobs-hed-wrap">
                                                    <h3>Past Jobs</h3>
                                                </div>
                                                <div class="single-job-wrap">
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="usr-nam">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="job-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                    consequat.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-job-wrap">
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="usr-nam">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="job-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                    consequat.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-job-wrap">
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="usr-nam">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="job-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                    consequat.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="view-mr-wrap">
                                                    <a href="pastJobs.php" class="btn theme-btn">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="clnr-jobs-wrap">
                                                <div class="clnr-jobs-hed-wrap">
                                                    <h3>Upcoming Jobs</h3>
                                                </div>
                                                <div class="single-job-wrap">
                                                    <div class="single-job-btn-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button class="btn job-action-btn">Accept</button>
                                                                <button class="btn job-action-btn">Reject</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="usr-nam">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="job-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    <a href="javascript:;">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-job-wrap">
                                                    <div class="single-job-btn-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button class="btn job-action-btn">Accept</button>
                                                                <button class="btn job-action-btn">Reject</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="usr-nam">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="job-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    <a href="javascript:;">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-job-wrap">
                                                    <div class="single-job-btn-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button class="btn job-action-btn">Accept</button>
                                                                <button class="btn job-action-btn">Reject</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="usr-nam">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="job-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    <a href="javascript:;">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="view-mr-wrap">
                                                    <a href="upcomingJobs.php" class="btn theme-btn">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Past/Upcoming Jobs Section -->
        <!-- Side Slider Section -->
        <button class="btn slider-arrow"><i class="fas fa-angle-double-left"></i></button>
        <span class="side-slider-counter">5</span>
        <section class="side-slider-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-job-wrap">
                            <div class="single-job-btn-wrap">
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn job-action-btn">Accept</button>
                                        <button class="btn job-action-btn">Reject</button>
                                    </div>
                                </div>
                            </div>
                            <div class="single-job-body-wrap">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                    </div>
                                    <div class="col-3">
                                        <div class="usr-nam">
                                            <h4>User Name</h4>
                                        </div>
                                        <div class="clng-typ">
                                            <span>Type of Cleaning</span>
                                        </div>
                                        <div class="time">
                                            <span>Time</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="job-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <a href="javascript:;">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Side Slider Section -->
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
    <script type="text/javascript" src="js/pluginInit/fullCalenderInit.js"></script>
    <script type="text/javascript" src="js/pluginInit/circleProgressInit.js"></script>
    <script type="text/javascript" src="js/pluginInit/hamburgerIconAnimation.js"></script>
	<!-- My Script -->
	<script type="text/javascript" src="js/myScript.js"></script>
	<!-- Scripts -->
</body>
</html>