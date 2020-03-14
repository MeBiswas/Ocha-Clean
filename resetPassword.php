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
                        <form action="" id="resetPassword" class="log-reg-form" novalidate="novalidate">
                            <span class="log-reg-form-title">Reset Password</span>

                            <div class="input-wrap m-b-23">
                                <span class="input-lbl">New Password</span>
                                <input class="cstm-input" type="password" name="pass" placeholder="Type new password">
                                <span class="cstm-input-focus" data-symbol="&#xf190;"></span>
                            </div>

                            <div class="input-wrap">
                                <span class="input-lbl">Confirm Password</span>
                                <input class="cstm-input" type="password" name="pass" placeholder="Confirm your password">
                                <span class="cstm-input-focus" data-symbol="&#xf190;"></span>
                            </div>                            
                            
                            <div class="log-reg-btn-wrap m-t-51">
                                <button type="submit" class="btn theme-btn" data-toggle="modal" data-target="#resetPasswordSuccess">Submit</button>
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