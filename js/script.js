jQuery(document).ready(function($){
console.log('What are you looking for here?')

$('#x-close').click(function() {
	$('#cookie-container').fadeOut('slow', function() {
		console.log("Faded out")
	});
});


})