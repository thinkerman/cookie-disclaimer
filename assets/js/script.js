jQuery(document).ready(function($){
	console.log('What are you looking for here?')
	
	
	if($.cookie('user-choice') == 'User Agreed'){
		console.log($.cookie('user-choice'))
	}else {
		$('#cookie-container').delay(2500).fadeIn('slow');
	}

	$('#disclaimer-text>p>a').attr({
		'target': 'blank'
	});


	$('#x-close').click(function() {
		$('#cookie-container').fadeOut('slow');
		$.cookie('user-choice','User Agreed',{path:'/'})
	})
	$('#agree-close').click(function() {
		$('#cookie-container').fadeOut('slow');
		$.cookie('user-choice','User Agreed',{path:'/'})
	})

	function get_positions(){
		var offset = $( this ).offset()
		
	}

get_positions();

})