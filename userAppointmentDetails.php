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
        <!-- Appointment Detail Section -->
        <section class="sec pst-upcmg-jb-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="aptmnt-dtl-wrap">                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="job-aptmnt-wrap">
                                        <div class="single-aptmnt-wrap">
                                            <div class="single-aptmnt-btn-wrap">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button class="btn job-action-btn" data-toggle="modal" data-target="#tipCleaner">Tip Cleaner</button>
                                                        <button class="btn job-action-btn" data-toggle="modal" data-target="#unsatisfactoryClean">Report</button>
                                                    </div>
                                                </div>
                                            </div>                                        
                                            <div class="single-aptmnt-body-wrap">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img src="images/bathroom-interior-1457847.jpg" class="img-fluid single-aptmnt-img" alt="Image">
                                                    </div>
                                                    <div class="col-12">
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
                                                    <div class="col-12">
                                                        <div class="job-desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="action-icn-wrap">
                                                            <a href="javascript:;" class="action-icn"><i class="fas fa-street-view"></i></a>
                                                            <a href="javascript:;" class="action-icn"><i class="fas fa-envelope"></i></a>
                                                            <a href="javascript:;" class="action-icn"><i class="fab fa-whatsapp"></i></a>
                                                            <a href="javascript:;" class="action-icn"><i class="fas fa-comment"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-job-rating-wrap">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="raty2" title="regular"><img alt="1" src="images/star-on.png" title="regular">&nbsp;<img alt="2" src="images/star-on.png" title="regular">&nbsp;<img alt="3" src="images/star-on.png" title="regular">&nbsp;<img alt="4" src="images/star-off.png" title="regular">&nbsp;<img alt="5" src="images/star-off.png" title="regular"><input name="score" type="hidden" value="3" readonly=""></div>
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
            </div>
        </section>
        <!-- Appointment Detail Section -->
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