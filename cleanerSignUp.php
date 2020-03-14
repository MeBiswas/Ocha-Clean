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
                        <form action="#" class="log-reg-form" novalidate="novalidate">
                            <span class="log-reg-form-title">Become an Ocha Cleaner</span>

                            <div class="input-wrap m-b-23">
                                <span class="input-lbl">Username</span>
                                <input class="cstm-input" type="text" name="username" placeholder="Type your username">
                                <span class="cstm-input-focus" data-symbol="&#xf206;"></span>
                            </div>

                            <div class="input-wrap m-b-23">
                                <span class="input-lbl">Password</span>
                                <input class="cstm-input" type="password" name="pass" placeholder="Type your password">
                                <span class="cstm-input-focus" data-symbol="&#xf190;"></span>
                            </div>

                            <div class="input-wrap">
                                <span class="input-lbl">Confirm Password</span>
                                <input class="cstm-input" type="password" name="pass" placeholder="Confirm your password">
                                <span class="cstm-input-focus" data-symbol="&#xf190;"></span>
                            </div>
                            
                            <div class="log-reg-btn-wrap m-t-51">
                                <button class="btn theme-btn">Continue</button>
                            </div>

                            <div class="cont-txt text-center p-t-54 p-b-20">
                                <span>Or Continue with</span>
                            </div>

                            <div class="social-lnk-wrap">
                                <a href="#" class="social-fb">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Continue with Facebook</span>
                                </a>

                                <a href="#" class="social-insta">
                                    <i class="fab fa-instagram"></i>
                                    <span>Continue with Instagram</span>
                                </a>
                            </div>
                            <div class="alrd-hv-acc m-t-30">
                                <a href="login.php">Already have an account Login</a>
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