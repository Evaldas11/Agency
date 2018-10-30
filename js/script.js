$(function(){
	var $hamb = $('.hamburger');
	var $overlay =$('.overlay');
	var $nav = $(' nav');
	var $form = $('footer .newsletter .email form');
	var $filters = $('.portfolio .grid .leftgrid .filter ul li a');
	var $works = $('.portfolio .grid .rightgrid .first');
	var $read_more = $('header .bottom button');

	$hamb.on('click', function(){
		$overlay.toggle();
		$nav.toggle();
	});
	$overlay.on('click', function(){
		$overlay.toggle();
		$nav.toggle();
	});
	$form.on('submit', function(e){
		e.preventDefault();
		var $empty_field = false;
		var $form_field = $(this).find('input');
		$(this).find('h6').remove();
		$form_field.each(function(){
			if ($(this).val() == '') {
				$empty_field = true;
				$(this).before("<h6>Empty fields, please fill in</h6>");
				}
			});
			function validateEmail(email) {
			var re = /\S+@\S+\.\S+/;
			return re.test(String(email).toLowerCase());
			}
			var $email_field = $form.find('input[name="email"]');
			if (!validateEmail($email_field.val())) {
			$empty_field = true;
			$email_field.before("<h6>Incorrect email address.</h6>");
			}
		if ($empty_field) {
		}
		else {	
			var email = $(this).find('input[name="email"]').val();
			var data = JSON.stringify({"email":email});	
			$.ajax ({
				url: 'write_database.php',
				method: 'POST',
				data: data,
				success: function(DATA) {
					$form.html('<h4>Thank you for subscribing!</h4>');
				},
				error: function(msg)  {
					console.log('An error ocurred: ' + msg);
				},
			});
		}
	});
	$filters.on('click', function(e){
		e.preventDefault();
		var $category = $(this).attr('id');
		var $work_items = $works.find('.work_item');
		$(this).addClass('active').parent().siblings().find('a').removeClass('active');
		
		if($category == 'all') {
			$work_items.addClass('hide');
			setTimeout(function(){
				$work_items.removeClass('hide');
			}, 500);
		} else {
			$work_items.addClass('hide');
			setTimeout(function(){
				$('.' + $category).removeClass('hide');
			}, 500);
		}
	});
	$read_more.on('click', function(){
		console.log($read_more.html());
		$(this).parent().find('.text .hidden').toggle();

		if ($(this).html() == ' READ MORE') {
			$(this).html(' CLOSE MORE');
		} else {
			$(this).html(' READ MORE');
		}
	});
});