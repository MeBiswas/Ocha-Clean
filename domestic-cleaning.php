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
    <section class="page-hed-sec" style="background-image: url(images/interior-design-of-a-house-1571460.jpg)">
        <div class="page-hed-ovrl"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-hed-content-wrap">
                        <div class="page-hed-title">
                            <h1 class="entry-title">Domestic Cleaning</h1>
                        </div>
                        <div class="page-breadcrumb-wrapper">
                            <span>
                                <a href="index.php">
                                    <img src="images/svg/house.svg" alt="house icon" class="img-fluid breadcrumb-icon" />
                                </a>
                            </span>
                            <span class="breadcrumb-separator">/</span>
                            <span>Domestic Cleaning</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header Section -->
    <!-- Countries Sections -->
    <section class="sec cntry-sec">
        <div class="container">
            <div class="row">               
                <div class="col-lg-12 text-center">
                    <div class="sec-hed">
                        <h2 class="sec-title">Select Your Country</h2>
                    </div>             
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="flag-card-wrap">
                        <div class="flag-sngl-card-wrap">
                            <a href="javascript:;">
                                <figure>
                                    <img src="images/flags/Flag_of_India.png" class="img-fluid flag-img" alt="Flag">
                                </figure>
                                <span>India</span>
                            </a>
                        </div>
                        <div class="flag-sngl-card-wrap">
                            <a href="javascript:;">
                                <figure>
                                    <img src="images/flags/Flag_of_Australia.png" class="img-fluid flag-img" alt="Flag">
                                </figure>
                                <span>Australia</span>
                            </a>
                        </div>
                        <div class="flag-sngl-card-wrap">
                            <a href="javascript:;">
                                <figure>
                                    <img src="images/flags/Flag_of_Canada.png" class="img-fluid flag-img" alt="Flag">
                                </figure>
                                <span>Canada</span>
                            </a>
                        </div>
                        <div class="flag-sngl-card-wrap">
                            <a href="javascript:;">
                                <figure>
                                    <img src="images/flags/Flag_of_China.png" class="img-fluid flag-img" alt="Flag">
                                </figure>
                                <span>China</span>
                            </a>
                        </div>
                        <div class="flag-sngl-card-wrap">
                            <a href="javascript:;">
                                <figure>
                                    <img src="images/flags/Flag_of_France.png" class="img-fluid flag-img" alt="Flag">
                                </figure>
                                <span>France</span>
                            </a>
                        </div>
                        <div class="flag-sngl-card-wrap">
                            <a href="javascript:;">
                                <figure>
                                    <img src="images/flags/Flag_of_Germany.png" class="img-fluid flag-img" alt="Flag">
                                </figure>
                                <span>Germany</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="row">
                <div class="col-12">
                    <div class="selct-cntry-wrap">
                        <div id="flagSelect2" class="slct-cntry" data-input-name="country2" data-selected-country="PLS"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countries Sections -->
    <!-- Zip Section -->
    <section class="sec entr-zip-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>If your Country is not Listed above</h4>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input type="text" id="zipCode" class="form-control" name="" placeholder="Enter Zip/Post Code">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="prcd-btn-wrap">
                        <a href="domestic-cleaningCheckout.php" class="btn theme-btn-2">Proceed</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Zip Section -->
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
    <script type="text/javascript">
        $('#zipCode').on('change', function(){
            $('#comingSoon').modal();
        });
    </script>   
	<!-- Scripts -->
</body>
</html>