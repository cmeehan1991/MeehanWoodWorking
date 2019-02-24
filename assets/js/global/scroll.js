$(document).ready(function(){
	console.log('hello');
	$(".jumplink").click(function(){
		var section = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 2000)
	});
});