$(document).ready(function(){
	$(function(){
		$(window).scroll(function(){
			if($(this).scrollTop()>0){
				$("#mySidenav a").fadeIn('slow');
			}
			else{
				$("#mySidenav a").fadeOut('slow');
			}
		});
	});
});