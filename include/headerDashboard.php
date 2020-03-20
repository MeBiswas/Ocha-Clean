<style type="text/css">
	/*Place this particular style in developer CSS only*/
	.noti-icon-wrap {
		width: 50px;
		display: inline;
		padding: 4% 0;
		position: relative;
		font-size: 22px;
	}
	.noti-counter {
		position: absolute;
		font-size: 13px;
		border: 2px solid #1dd79d;
		background-color: #1dd79d;
		top: 5px;
		right: 0;
		border-radius: 100%;
		width: 18px;
		text-align: center;
		font-weight: 600;
		color: #fff;
		height: 18px;
		line-height: 1.1;
	}
	.top-notify.top-dashmain-li.top-dropdwn-active {
		opacity: 1;
		visibility: visible;
	}
	.top-notify {
		background-color: #ffffff;
		border: 1px solid #eeeeee;
		max-width: 300px;
		position: absolute;
		right: 25%;
		text-align: left;
		border-radius: 4px;
		top: 67px;
		width: 100%;
		opacity: 0;
		visibility: hidden;
		z-index: 2;
		-webkit-box-shadow: 4px 4px 10px -1px rgba(107,107,107,1);
		-moz-box-shadow: 4px 4px 10px -1px rgba(107,107,107,1);
		box-shadow: 4px 4px 10px -1px rgba(107,107,107,1);
	}
	.top-notify > h4 {
		border-bottom: 1px solid #bfbfbf;
		margin-bottom: 0px;
		margin-top: 0;
		padding: 8px 10px;
		font-size: 20px;
		font-weight: 600;
	}
	.notify-contnt {
		float: left;
		min-height: 100px;
		text-align: center;
		width: 100%;
	}
	.noti-mini {
		border-bottom: 1px solid #eeeeee;
		cursor: pointer;
		float: left;
		padding: 5px 10px;
		width: 100%;
	}
	.noti-img {
		float: left;
		width: 100%;
		max-width: 15%;
	}
	.noti-img img {
		border-radius: 50%;
		width: 50px;
		height: 50px;
		object-fit: cover;
	}
	.noti-desc {
		float: left;
		max-width: 85%;
		padding: 2px 4px 2px 10px;
		text-align: left;
		width: 100%;
	}
	.noti-desc h5 {
		font-size: 12px;
		margin: 0;
		position: relative;
		width: calc(100% - 11px);
	}
	.noti-desc span {
		font-size: 12px;
	}
	.noti-mini .noti-desc h5 a {
		color: #333333;
		display: inline-block;
		font-size: 12px;
		font-weight: 600;
		padding: 2px 0;
	}	
	.dash-alerts a {
		padding: 5px;
		display: block;
		text-decoration: none;
	}
</style>
<header class="header-sec">    
    <!-- Main Header -->
    <div class="main-navbar">
    	<div class="container-fluid">
			<nav class="navbar navbar-expand-md">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="logo" class="img-fluid logo-img">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav my-navbar mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="aboutUs.php">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="support.php">Contact Us</a>
						</li>
					</ul>
					<div class="nav-btn-wrap">
						<a class="noti-icon-wrap">
							<i class="fas fa-bell"></i>
							<span class="noti-counter">2</span>
						</a>
						<div class="top-notify top-dashmain-li">
                            <h4>Notifications</h4>
                            <div class="notify-contnt">
                                <div class="noti-mini">
                                    <div class="noti-img">
                                        <img src="images/women-s-white-and-black-button-up-collared-shirt-774909.jpg" class="img-fluid">
                                    </div>
                                    <div class="noti-desc">
                                        <h5>
                                            <a href="other-user-profile.html"> Tony Stark </a> accept your Offer.
                                        </h5>
                                        <span><i class="fa fa-globe"></i> 10 min ago</span>
                                    </div>
                                </div>
                                <div class="noti-mini">
                                    <div class="noti-img">
                                        <img src="images/women-s-white-and-black-button-up-collared-shirt-774909.jpg" class="img-fluid">
                                    </div>
                                    <div class="noti-desc">
                                        <h5>
                                            <a href="other-user-profile.html"> William James </a> shared a memory.
                                        </h5>
                                        <span><i class="fa fa-globe"></i> 20 min ago</span>
                                    </div>
                                </div>
                                <div class="noti-mini">
                                    <div class="noti-img">
                                        <img src="images/women-s-white-and-black-button-up-collared-shirt-774909.jpg" class="img-fluid">
                                    </div>
                                    <div class="noti-desc">
                                        <h5>
                                            <a href="other-user-profile.html">John Smith</a> added a new photo.                                            
                                        </h5>
                                        <span><i class="fa fa-globe"></i> 35 min ago</span>
                                    </div>
                                </div>
                                <div class="noti-mini">
                                    <div class="noti-img">
                                        <img src="images/women-s-white-and-black-button-up-collared-shirt-774909.jpg" class="img-fluid">
                                    </div>
                                    <div class="noti-desc">
                                        <h5>
                                            <a href="other-user-profile.html">Tony Stark </a> Commented on <a href="other-user-profile.html"> John Smith </a>'s Post .
                                        </h5>
                                        <span><i class="fa fa-globe"></i> 1 hrs ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div id="flagSelect" class="cstm-flagSelect" data-input-name="country2" data-selected-country="GB"></div>
						<div class="hamburger hamburger--spin-r">
						    <div class="hamburger-box">
						      	<div class="hamburger-inner"></div>
						    </div>
					  	</div>
					</div>
				</div>  
			</nav>        		
    	</div>
    </div>
    <!-- Main Header -->
</header>