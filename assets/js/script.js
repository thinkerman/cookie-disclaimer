jQuery(document).ready(function($){
	'use strict';
	var _container = $('#cookie-container');
	var _disclaimerLink = $('#disclaimer-text>p>a');
	var _agreeButton = $('#agree-close');
	var _xButton = $('#x-close');
	console.log('What are you looking for here?');
	
	//if user already agreed to the cookie do not show disclaimer
	if($.cookie('user-choice') == 'User Agreed'){
		_container.remove();
	}else {
		_container.delay(2500).fadeIn('slow');
	}

	//add target attr to links in disclaimer text
	 _disclaimerLink.attr({
		'target': 'blank'
	});

	//save cookie when user closes the disclaimer
	_xButton.click(function() {
		_container.fadeOut('slow');
		$.cookie('user-choice','User Agreed',{path:'/'})
	})

	//save cookie when user agrees
	_agreeButton.click(function() {
		_container.fadeOut('slow');
		$.cookie('user-choice','User Agreed',{path:'/'})
	})


	//if ellipses is in button, change tooltip to full text in the button
	_agreeButton.mouseover(function() {
		if ($('#agree-close:contains(...)')) {
		_agreeButton.attr('title',_agreeButton.text());
	}
	});


})