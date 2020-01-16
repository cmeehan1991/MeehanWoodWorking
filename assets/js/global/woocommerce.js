$(document).ready(function(){
	$('.stars span a').each(function(){
		$(this).html("<i class='far fa-star'></i>");
	});
	
	$('.stars span a i').hover(function(){
		var current = $(this).attr('class');
		if(current.indexOf('far') > -1){
			$(this).attr('class', 'fas fa-star');
		}else{
		}
	});
	
	$('.stars span a i').mouseleave(function(){
		var current = $(this).attr('class');
		if(!current.indexOf('active')){
			$(this).attr('class', 'far, fa-star');
		}
	});
	
	$('.stars span a').click(function(){
		var current = $(this).attr('class').split('-')[1];
		var i = 1; 
		console.log(current);
		$('.stars span a i').each(function(index){
			if(index < current){
				$(this).attr('class', 'fas fa-star');
				$(this).addClass('active');
			}else if(index >= current){
				$(this).attr('class', 'far fa-star');
				$(this).removeClass('active');
			}
		});
		
	});
	
	$('li.nav-item a.nav-link').each(function(){
		var currText = $(this).text();
		if(currText == 'Cart'){
			$(this).html('<i class="fas fa-shopping-cart"></i>');
		}
	});
});