/*====================================
	Sticky Header
======================================*/ 
$(window).on('scroll', function() {
	if ($(this).scrollTop() > 100) {
		$('.header-sec').addClass("sticky");
	} else {
		$('.header-sec').removeClass("sticky");
	}
});
/*====================================
    Show Sidebar
======================================*/ 
$('.hamburger').on('click', function() {
    if($('.hamburger.hamburger--spin-r').hasClass('is-active')) {
        $('.dash-side-wrap').toggleClass('show');        
    }
    else {
        $('.dash-side-wrap').removeClass('show');         
    }
});
$('.cleaner-dash-wrap, .footer-sec').on('click', function() {
    $('.dash-side-wrap').removeClass('show'); 
});
/*====================================
	Cleaner Registration Form Toggle
======================================*/
$('.form-2, .form-3').hide();
$('.btn_nex').click(function(){
    $('.clnr-reg-sec').slideUp();
    $(this).closest('.clnr-reg-sec').next(".clnr-reg-sec").slideDown().addClass('now');
    $(this).closest('.clnr-reg-sec').prev(".clnr-reg-sec").removeClass('now');
});
/*====================================
	Cleaner Registration Image Change
======================================*/ 
$('#imgOutput').hide();
var loadFile = function(event) {
    var output = document.getElementById('imgOutput');
    output.src = URL.createObjectURL(event.target.files[0]);
    $('#imgOutput').show();
    $('#prevImg').hide();
}
/*====================================
	Form Submission Disable
======================================*/
$("#forgotPassword, #resetPassword").submit(function(e){
    e.preventDefault();
});
/*====================================
	Redirect To Page
======================================*/
function toResetPassword() {
	document.location.href='resetPassword.php';
}
function toLogin() {
	document.location.href='login.php';	
}
function toCleanerProfile() {
    document.location.href='cleanerProfile.php';        
}
function toSignUp() {
	document.location.href='cleanerSignUp.php';		    
}
function toUserDashboard() {
    document.location.href='userDashboard.php'
}
/*====================================
	Calender Add New Events
======================================*/
$('.add-event').on('click', function(){
    $('#newJob').modal();

});
$('#submit_modal').on('click', function(){
    var value= $('#event_name').val();
    if(value=='' || value==undefined || value==null){
        alert('Please Enter a Valid Job');
        return false;
    }
    $('#newJob').modal('hide');
    $('#event_name').val('');
    $('#external-events-list').append("<div class='fc-event'>"+value+"</div>");
});
/*====================================
	Increment & Decrement Miles
======================================*/
$(document).ready(function(){
    var quantitiy = 0;
    $('.quantity-right-plus').click(function(e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        $('#quantity').val(quantity + 1);

        // Increment

    });
    $('.quantity-left-minus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        // Increment
        if(quantity > 0){
            $('#quantity').val(quantity - 1);
        }
    });                    
});
/*====================================
	Side Content Toggle
======================================*/
$('.slider-arrow').on('click', function() {
    $(this).toggleClass('slide');
    $('.side-slider-sec').toggleClass('open');
});