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
    <!-- Reset Password Section -->
    <section class="sec community-sec">
        <div class="sec-ovrlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-7 offset-5">
                    <div class="cstm-container">
                        <div class="box"></div>
                        <div class="cstm-container-forms">
                            <div class="cstm-container-form reset-pass">
                                <div class="form-item">
                                    <div class="table">
                                        <div class="table-cell">
                                            <div class="form-item-hed">
                                                <h2>Reset Password</h2>
                                            </div>
                                            <form id="resetSuccess">
                                                <input class="community-cstm-input" name="New Password" placeholder="New Password" type="Password" />
                                                <input class="community-cstm-input" name="Confirm Password" placeholder="Confirm Password" type="Password" />
                                                <button class="btn" type="submit" data-toggle="modal" data-target="#resetPasswordSuccess">Submit</button> 
                                            </form>
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
    <!-- Reset Password Section -->
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
	<!-- My Script -->
	<script type="text/javascript" src="js/myScript.js"></script>
	<!-- Scripts -->
</body>
</html>