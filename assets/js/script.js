jQuery(document).ready(function($){
	console.log('What are you looking for here?')
	
	//if user already agreed to the cookie do not show disclaimer
	if($.cookie('user-choice') == 'User Agreed'){
		$('#cookie-container').remove();
	}else {
		$('#cookie-container').delay(2500).fadeIn('slow');
	}

	//add target attr to links in disclaimer text
	$('#disclaimer-text>p>a').attr({
		'target': 'blank'
	});

	//save cookie when user closes the disclaimer
	$('#x-close').click(function() {
		$('#cookie-container').fadeOut('slow');
		$.cookie('user-choice','User Agreed',{path:'/'})
	})

	//save cookie when user agrees
	$('#agree-close').click(function() {
		$('#cookie-container').fadeOut('slow');
		$.cookie('user-choice','User Agreed',{path:'/'})
	})


	//if ellipses is in button, change tooltip to full text in the button
	$('#agree-close').mouseover(function() {
		if ($('#agree-close:contains(...)')) {
		$('#agree-close').attr('title',$('#agree-close').text());
	}
	});


})