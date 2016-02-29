$(document).ready(function(){
	$('.list-selects ul').css('display', 'none')
	$('.choice-select').click(function(){
		$('.list-selects ul').toggle('fast');
	})
	$('.list-selects li').not('.choice-select').click(function(){
		var textValue = $(this).text();
		$('.choice-select').text(textValue)
		$('.list-selects ul').toggle('fast');
	});
})