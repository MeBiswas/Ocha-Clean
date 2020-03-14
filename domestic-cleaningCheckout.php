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
    <!-- Place Order Section -->
    <section class="sec place-order-sec">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div id="accordion">
                        <div class="card ordr-card">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                <div class="card-header">
                                    <span class="order_acc_no">1</span> Select Date
                                </div>
                            </a>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="calendar"></div>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="collapse" href="#collapseTwo"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card ordr-card">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                <div class="card-header">
                                    <span class="order_acc_no">2</span> Choose Time
                                </div>
                            </a>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="form-body">
                                    <div class="card-body pb-0">
                                        <label>Select Start Time</label>
                                        <input type="text" id="timepicker" placeholder="Please Select Time" class="form-control" />
                                    </div>
                                    <div class="card-body">
                                        <label>Select End Time</label>
                                        <input type="text" id="timepicker2" placeholder="Please Select Time" class="form-control" />
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="collapse" href="#collapseThree"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card ordr-card">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                <div class="card-header">
                                    <span class="order_acc_no">3</span> How often would you like to repeat the clean?
                                </div>
                            </a>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group text-left">
                                        <div class="row">
                                            <div class="col-12 mb-2">
                                                <div class="pretty p-icon p-curve p-pulse">
                                                    <input type="checkbox">
                                                    <div class="state p-info-o">
                                                        <i class="icon mdi mdi-check fas fa-check"></i>
                                                        <label> Daily</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="pretty p-icon p-curve p-pulse">
                                                    <input type="checkbox">
                                                    <div class="state p-info-o">
                                                        <i class="icon mdi mdi-check fas fa-check"></i>
                                                        <label> Weekly</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="pretty p-icon p-curve p-pulse">
                                                    <input type="checkbox">
                                                    <div class="state p-info-o">
                                                        <i class="icon mdi mdi-check fas fa-check"></i>
                                                        <label> Fortnightly</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="pretty p-icon p-curve p-pulse">
                                                    <input type="checkbox">
                                                    <div class="state p-info-o">
                                                        <i class="icon mdi mdi-check fas fa-check"></i>
                                                        <label> Monthly</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="pretty p-icon p-curve p-pulse">
                                                    <input type="checkbox">
                                                    <div class="state p-info-o">
                                                        <i class="icon mdi mdi-check fas fa-check"></i>
                                                        <label> One-Off</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="collapse" href="#collapseFour"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card ordr-card">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                <div class="card-header">
                                    <span class="order_acc_no">4</span> How Many rooms and bathrooms do you have?
                                </div>
                            </a>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <p class="sel-room-txt">Select Number of Rooms</p>
                                        </div>
                                        <div class="col-3">
                                            <div class="cart_options_wrap">
                                                <div class="inc_dec_inpt_wrap">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                                                              <span class="icon_minus"><i class="fas fa-minus"></i></span>
                                                            </button>
                                                        </span>
                                                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                                                                <span class="icon_plus"><i class="fas fa-plus"></i></span>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-9">
                                            <p class="sel-room-txt">Select Number of Bathrooms</p>
                                        </div>
                                        <div class="col-3">
                                            <div class="cart_options_wrap">
                                                <div class="inc_dec_inpt_wrap">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                                                              <span class="icon_minus"><i class="fas fa-minus"></i></span>
                                                            </button>
                                                        </span>
                                                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                                                                <span class="icon_plus"><i class="fas fa-plus"></i></span>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="collapse-accrdn"><i class="fas fa-arrow-right"></i></a>
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
                                    <button class="btn theme-btn-2" data-toggle="modal" data-target="#orderSummary">Proceed</button>
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
    <!-- Modal -->
    <?php include('include/modal.php'); ?>
    <!-- Modal -->
    <!-- Scripts -->
	<?php include('include/masterjs.php'); ?>
	<!-- Plugin Initialization -->
    <script type="text/javascript" src="js/pluginInit/flagSelectorInit.js"></script>
    <script type="text/javascript" src="js/pluginInit/pignoseInit.js"></script>
    <script type="text/javascript" src="js/pluginInit/mdTimePickerInit.js"></script>
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