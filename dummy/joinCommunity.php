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
    <!-- Community Section -->
    <section class="sec community-sec">
        <div class="sec-ovrlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-7 offset-5">
                    <div class="cstm-container">
                        <div class="box"></div>
                        <div class="cstm-container-forms">
                            <div class="cstm-container-info">
                                <div class="info-item">
                                    <div class="table">
                                        <div class="table-cell">
                                            <p>Don't have an account?</p>
                                            <div class="btn">Sign Up</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="table">
                                        <div class="table-cell">
                                            <p>Already have an account?</p>
                                            <div class="btn">Log in</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cstm-container-form">
                                <div class="form-item sign-up">
                                    <div class="table">
                                        <div class="table-cell">
                                            <div class="form-item-hed">
                                                <h2>Become an OCHA CLEANER</h2>
                                            </div>
                                            <form>
                                                <input class="community-cstm-input" name="Username" placeholder="Enter Email" type="text" />
                                                <input class="community-cstm-input" name="Password" placeholder="Password" type="Password" />
                                                <!-- <button class="btn" type="submit">Continue</button>  -->
                                                <a href="joinCommunityDetailForm.php" class="btn">Continue</a>
                                            </form>
                                            <div class="divider-or">
                                                <p>or</p>
                                            </div>
                                            <div class="login-with-wrap">
                                                <div class="login-with-fb">
                                                    <a href="javascript:;">Continue with <span><i class="fab fa-facebook-f"></i></span></a>
                                                </div>
                                                <div class="login-with-in">
                                                    <a href="javascript:;">Continue with <span><i class="fab fa-instagram"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-item log-in">
                                    <div class="table">
                                        <div class="table-cell">
                                            <div class="form-item-hed">
                                                <h2>Log In</h2>
                                            </div>
                                            <form>
                                                <input class="community-cstm-input" name="email" placeholder="Enter Email" type="text" />
                                                <input class="community-cstm-input" name="Password" placeholder="Password" type="Password" />
                                                <div class="forgot-password-wrap">
                                                    <a href="javascript:;" class="forgot-password-link">Forgot Password</a>
                                                </div>
                                                <button class="btn" type="submit">Log In</button>
                                            </form>
                                            <div class="divider-or">
                                                <p>or</p>
                                            </div>
                                            <div class="login-with-wrap">
                                                <div class="login-with-fb">
                                                    <a href="javascript:;">Continue with <span><i class="fab fa-facebook-f"></i></span></a>
                                                </div>
                                                <div class="login-with-in">
                                                    <a href="javascript:;">Continue with <span><i class="fab fa-instagram"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-item forgot-password">
                                    <div class="table">
                                        <div class="table-cell">
                                            <div class="form-item-hed">
                                                <h2>Forgot Password</h2>
                                            </div>
                                            <form id="forgotPass" novalidate>
                                                <input class="community-cstm-input" name="email" placeholder="Enter Registered Email" type="text" />
                                                <button class="btn openResetPassMdl" data-toggle="modal" data-target="#resetPassword" type="submit">Submit</button>
                                            </form>
                                            <div class="back-to-login">
                                                <a href="javascript:;" class="back-to-login-link">Go Back to Login Page</a>
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
    <!-- Community Section -->
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