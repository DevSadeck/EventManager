

$(document).ready(function (){
	$("#evenement").click(function (){
	    $('html, body').animate({
	        scrollTop: $("#NosEvenements").offset().top
	    }, 2000);
	});
	
})