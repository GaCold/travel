$(document).ready(function(){
	$(function(){
		$(window).scroll(function(){
			if($(this).scrollTop()>70){
				$(".btn-top").fadeIn('slow');
			}
			else{
				$(".btn-top").fadeOut('slow');
			}

		});

		$(".btn-top").click(function(){
			$("body,html").animate({scrollTop:0},1000);
			return false;
		});
	});
});