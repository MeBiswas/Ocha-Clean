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
    <?php include('include/userSidebar.php'); ?>
    <!-- Dashboard Sidebar -->
    <!-- Dashboard Content -->
    <section class="cleaner-dash-wrap">
        <!-- My Account Head Section -->
        <section class="sec profile-hed-wrap">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="sec-hed">
                            <h2 class="sec-title">My Account</h2>
                        </div>
                    </div>
                </div> -->
                <div class="row align-items-center">
                    <div class="col-4">
                        <!-- <div class="pretty p-switch p-fill">
                            <input type="checkbox" checked="checked" />
                            <div class="state">
                                <label>Online</label>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-4">
                        <div class="cleaner-profile-img-wrap">
                            <div class="hovereffect">
                                <img class="img-fluid cleaner-profile-img" src="images/man-wearing-black-zip-up-jacket-near-beach-smiling-at-the-736716.jpg" alt="Profile Image">
                                <div class="overlay">
                                   <a class="info" href="editUserDetails.php">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="book-clean-btn-wrap">
                            <a href="domestic-cleaningCheckout.php" class="btn theme-btn">Book New Clean</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- My Account Head Section -->
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
        <!-- Past/Future Cleans Section -->
        <section class="sec pst-upcmg-jb-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="pst-upcmg-jb-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-hed">
                                        <h2 class="sec-title">Past Cleans, Future Cleans</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="clnr-jobs-wrap">
                                                <div class="clnr-jobs-hed-wrap">
                                                    <h3>Cleaning booked</h3>
                                                </div>
                                                <div class="single-job-wrap">
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="usr-nam m-t-15">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
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
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="usr-nam m-t-15">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="job-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    <a href="javascript:;">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="clnr-jobs-wrap">
                                                <div class="clnr-jobs-hed-wrap">
                                                    <h3>Cleaner Confirmed</h3>
                                                </div>
                                                <div class="single-job-wrap">
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="usr-nam m-t-15">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
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
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="usr-nam m-t-15">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="job-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    <a href="javascript:;">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="clnr-jobs-wrap">
                                                <div class="clnr-jobs-hed-wrap">
                                                    <h3>Cleaning in progress</h3>
                                                </div>
                                                <div class="single-job-wrap">
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="usr-nam m-t-15">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
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
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="usr-nam m-t-15">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="job-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    <a href="javascript:;">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="clnr-jobs-wrap">
                                                <div class="clnr-jobs-hed-wrap">
                                                    <h3>Cleaning Complete</h3>
                                                </div>
                                                <div class="single-job-wrap">
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="usr-nam m-t-15">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
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
                                                    <div class="single-job-body-wrap">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-job-img" alt="Image">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="usr-nam m-t-15">
                                                                    <h4>User Name</h4>
                                                                </div>
                                                                <div class="clng-typ">
                                                                    <span>Type of Cleaning</span>
                                                                </div>
                                                                <div class="time">
                                                                    <span>Time</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="job-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    <a href="javascript:;">View Detail</a>
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="view-mr-wrap">
                                        <a href="userAppointments.php" class="btn theme-btn">Review your clean</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
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
    <script type="text/javascript" src="js/pluginInit/hamburgerIconAnimation.js"></script>
	<!-- My Script -->
	<script type="text/javascript" src="js/myScript.js"></script>
    <script type="text/javascript">
        $('#paymentSuccess').modal();
    </script>
	<!-- Scripts -->
</body>
</html>