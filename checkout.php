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
    <!-- Place Order Section -->
    <section class="sec place-order-sec">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div id="accordion">
                        <div class="card ordr-card">
                            <div class="card-header">
                                <span class="order_acc_no">1</span> Login<span class="logged_in"><i class="fas fa-check"></i></span>
                                <div class="change_btn_wrap">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        <button class="btn theme-btn-2">Change</button>    
                                    </a>
                                </div>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="logout_link"><a href="login.php">Logout & Sign In to another account</a></p>
                                    <div class="cont_checkot_btn_wrap">
                                        <button class="btn theme-btn">Continue Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ordr-card">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                <div class="card-header"><span class="order_acc_no">2</span> Property Address</div>
                            </a>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio1">
                                            <input type="radio" class="form-check-input" id="radio1" name="optradio" checked>
                                            <div class="ordr_addr_wrap">
                                                <div class="ordr_addr">
                                                    <p class="ordr_usr_nam">Jane Doe</p>
                                                    <p class="ordr_addr_det">8581 Ramblewood Ave. Rolling Meadows, IL 60008</p>
                                                    <button class="btn theme-btn-2 m-t-10">Book Here</button>
                                                </div>
                                                <div class="edit_btn_container">
                                                    <a href="javascript:;">Edit</a>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input" id="radio2" name="optradio">
                                            <div class="ordr_addr_wrap">
                                                <div class="ordr_addr">
                                                    <p class="ordr_usr_nam">Jane Doe</p>
                                                    <p class="ordr_addr_det">8581 Ramblewood Ave. Rolling Meadows, IL 60008</p>
                                                    <button class="btn theme-btn-2 m-t-2">Book Here</button>
                                                </div>
                                                <div class="edit_btn_container">
                                                    <a href="javascript:;">Edit</a>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ordr-card">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                <div class="card-header"><span class="order_acc_no"><i class="fas fa-plus"></i></span> Add a new Address</div>
                            </a>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control cstm-form-cntrl" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control cstm-form-cntrl" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" name="pin" class="form-control cstm-form-cntrl" placeholder="Pincode">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" name="locality" class="form-control cstm-form-cntrl" placeholder="Locality">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control cstm-form-cntrl" rows="3" id="comment" placeholder="Full Address"></textarea>
                                                </div> 
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control cstm-form-cntrl" rows="3" id="comment" placeholder="Billing Address"></textarea>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="email" name="city" class="form-control cstm-form-cntrl" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select name="cars" class="custom-select my_cstm_sel">
                                                        <option selected disabled="disabled">Select State</option>
                                                        <option value="volvo">California</option>
                                                        <option value="fiat">Florida</option>
                                                        <option value="audi">Texas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="row">
                                            <div class="col-12">
                                                <button class="btn theme-btn-2 m-t-10">Save</button>
                                                <button class="btn cancel_btn m-t-10">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ordr-card">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                <div class="card-header"><span class="order_acc_no">3</span> Order Summary</div>
                            </a>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="ordr-smmry-wrap border-0">
                                        <div class="ordr-smmry-details">
                                            <p>Domestic Cleaning</p>
                                            <span class="ordr-smmry-dt-tm">29/02/2020 at 01:00 PM</span>
                                            <span class="ordr-smmry-rooms">Rooms: 3, Bathrooms: 1</span>
                                            <span class="ordr-smmry-basis">One-off</span>
                                        </div>
                                        <div class="ordr-smmry-amnt">
                                            <span>$ 149.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ordr-card">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                <div class="card-header"><span class="order_acc_no">4</span> Payment Options</div>
                            </a>
                            <div id="collapseFive" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="ordr_pmt_wrap">
                                        <label class="form-check-label" for="radio1">
                                            <input type="radio" class="form-check-input" id="radio1" name="optradio" checked>
                                            <div class="ordr_pmt_met_wrap">
                                                <p class="pmt_met_nam">Credit/Debit/ATM Card</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="ordr_pmt_wrap">
                                        <label class="form-check-label" for="radio1">
                                            <input type="radio" class="form-check-input" id="radio1" name="optradio" checked>
                                            <div class="ordr_pmt_met_wrap">
                                                <p class="pmt_met_nam">Cash on Delivery</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                </div>
                <div class="col-4">
                    <div class="price_detail_wrap">
                        <div class="price_detail_hed">
                            <p>Cleaning Details</p>
                        </div>
                        <div class="price_detail_body">
                            <div class="clng-dtl-wrap">
                                <span class="clng-dtl-lbl">Date Selected</span>
                                <span class="clng-dtl-price">Feb 29 2020</span>
                            </div>
                            <div class="clng-dtl-wrap">
                                <span class="clng-dtl-lbl">Chosen Time</span>
                                <span class="clng-dtl-price">01:00 PM</span>
                            </div>
                            <div class="clng-dtl-wrap">
                                <span class="clng-dtl-lbl">Cleaning Occurence</span>
                                <span class="clng-dtl-price">One-Off</span>
                            </div>
                            <div class="clng-dtl-wrap">
                                <span class="clng-dtl-lbl">Number of Rooms</span>
                                <span class="clng-dtl-price">3</span>
                            </div>
                            <div class="clng-dtl-wrap">
                                <span class="clng-dtl-lbl">Number of Bathrooms</span>
                                <span class="clng-dtl-price">1</span>
                            </div>
                        </div>
                        <div class="price_detail_foot">
                            <p>You will save $49.99 on this order</p>
                            <div class="ordr-prcd-wrap">
                                <div class="ttl-amnt">
                                    <span>Total Amount</span>
                                    <span>$ 149.99</span>
                                </div>
                                <div class="order-btn-wrap">
                                    <button class="btn theme-btn-2" onclick="toUserDashboard()">Pay & Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Place Order Section -->
    <!-- Footer -->
    <?php include('include/footer.php'); ?>
    <!-- Footer -->
    <!-- Scripts -->
	<?php include('include/masterjs.php'); ?>
	<!-- Plugin Initialization -->
    <script type="text/javascript" src="js/pluginInit/flagSelectorInit.js"></script>
    <script type="text/javascript" src="js/pluginInit/hamburgerIconAnimation.js"></script>
	<!-- My Script -->
	<script type="text/javascript" src="js/myScript.js"></script>
    <script type="text/javascript">
        $('.collapse-accrdn').on('click', function(){
            $('#accordion').parent().hide();
            $('.col-4').addClass('col-12 text-center');
        });
    </script>
	<!-- Scripts -->
</body>
</html>