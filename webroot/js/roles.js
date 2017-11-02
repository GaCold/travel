$(function(){
	$('#checkall').click(function(){
		if( $('input[type="checkbox"]:checked').length == $('input[type="checkbox"]').length){
			$(" input[type='checkbox'] ").prop('checked', false);
		}
		else{
			$(" input[type='checkbox'] ").prop("checked",true);
		}
	});
});
