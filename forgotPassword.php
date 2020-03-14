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
    <!-- Form Section -->
    <section class="sec sign-up-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="wrap-form">
                        <form action="" id="forgotPassword" class="log-reg-form" novalidate="novalidate">
                            <span class="log-reg-form-title">Forgot Password</span>

                            <div class="input-wrap m-b-23">
                                <span class="input-lbl">Enter Registered Email</span>
                                <input class="cstm-input" type="text" placeholder="Type your email">
                                <span class="cstm-input-focus" data-symbol="&#xf159;"></span>
                            </div>                            
                            
                            <div class="log-reg-btn-wrap m-t-51">
                                <button type="submit" class="btn theme-btn" data-toggle="modal" data-target="#resetPassword">Submit</button>
                            </div>
                            
                            <div class="alrd-hv-acc m-t-30">
                                <a href="login.php">Go Back to Login Page</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Form Section -->
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
    <script type="text/javascript" src="js/pluginInit/owlInit.js"></script>
	<!-- My Script -->
	<script type="text/javascript" src="js/myScript.js"></script>
	<!-- Scripts -->
</body>
</html>