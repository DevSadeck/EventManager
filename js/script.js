
$(document).ready(function (){
	$("#service").click(function (){
	    $('html, body').animate({
	        scrollTop: $("#NosServices").offset().top
	    }, 2000);
	});

	$("#produit").click(function (){
	    $('html, body').animate({
	        scrollTop: $("#NosProduits").offset().top
	    }, 2000);
	});

	$('.carousel').carousel();
	// $(document).on('click touchstart', '.header .nav > li', function(){
	//     $('.header .nav > li ').removeClass('active');
	//     $(this).addClass('active');
	// });

});

// $(function () {
//   $('[data-toggle="tooltip"]').tooltip();
// })