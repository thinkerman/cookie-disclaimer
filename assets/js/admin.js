jQuery(document).ready(function($){


var select = $('.selectpicker');
var options = $('option')
select.selectpicker({
  style: 'btn-info',
  size: 4
});

options.each(function(){
	$(this).attr('data-token',$(this).attr('label'));
})


})