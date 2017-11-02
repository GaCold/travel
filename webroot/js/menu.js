
$(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()>50){
            $(".nav-menu").addClass('fixedmenu').fadeIn('slow');
        }
        else{
        	$(".nav-menu").removeClass('fixedmenu').fadeIn('slow');
        }
    });
});
