function disp_message_welcome() {
	$('#animate1').fadeIn(1000);
	setTimeout(function() {
		$('#animate2').fadeIn(1000);
	}, 2000);
	setTimeout(function() {
		$('#animate3').fadeIn(1000);
	}, 2000);
	setTimeout(function() {
		$('#animate4').fadeIn(5000);
		$('#animate5').fadeIn(5000);
		$('#animate6').fadeIn(5000);
		$('#animate7').fadeIn(5000);
		$('#animate8').fadeIn(5000);
	}, 4000);

	/*$('#animate4').hover({
		$('#animate4').animate({
			'padding-top': '-50px'
		});
	});*/
}

function cookie_message_off() {
	var cookie_value = Cookies.get("cookie_alert");
	if (cookie_value == 0)
		$('.cookie_alert').hide();
	$('#close').on('click', function(){
		$('.cookie_alert').hide();
		Cookies.set("cookie_alert", 0);
	});
}

cookie_message_off();
disp_message_welcome();