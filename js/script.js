jQuery(document).ready(function($){
	console.log('What are you looking for here?')
	
	
	if($.cookie('user-choice') == 'User Agreeds'){

		//set cookie
		console.log($.cookie('user-choice'))
	}else {
		$('#cookie-container').delay(2500).fadeIn('slow');
	}
	$('#x-close').click(function() {
		$('#cookie-container').fadeOut('slow');

		//set cookie
		$.cookie('user-choice','User Agreed',{path:'/'})
	})
	$('#agree-close').click(function() {
		$('#cookie-container').fadeOut('slow');
		$.cookie('user-choice','User Agreed',{path:'/'})
	})


})