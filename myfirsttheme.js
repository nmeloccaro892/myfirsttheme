// Execute jQUery functions *after* jQuery JS has loaded
$(function(){
	// Auto-hide alert messages after 3s
	$('alert').delay(3000).fadeOut(3000);
	
	//Add bootstrap affix to the nav
	$('#primary-nav').attr('data-spy','affix');
	$('#primary-nav').attr('data-offset-top','134');
	
	
	// Capture hover over sidebar
	$('#main .row .span4').hover(
			function(){
				$(this).addClass('highlight');
			},
			function(){
				$(this).removeClass('highlight');
			}
	);
	
	// Capture double-click of post paragraphs
	$('.story-content p').dblclick(function(){
		$(this).addClass('deleting');
		$(this).slideUp('1000');
	});
	
	// Listen for keyup events
	$(document).keyup(function(e){
		switch(e.which) {
		//case 39: // right arrow
			//window.location = 'http://www.apple.com';
			//break;
		case 20: // caps lock
			$('input[name=s').val('');
			break;
		case 27: // escape key
			$('#main').slideUp();
			break;
		}
	});
});