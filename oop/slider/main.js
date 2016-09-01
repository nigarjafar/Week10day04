jQuery(document).ready(function($) {
	var arr = ['images/1.jpg','images/2.jpg','images/3.jpg','images/4.jpg']
	
	i = 0
	a = 0
	$('.right').click(function(event) {
		i++
		a -= 106;
		if (i > arr.length - 1) {
			i = 0 ;
		}

		$('.big').attr('src',arr[i]);

		$('.sliderItems').css('left', a+"px");
		img=(($('.sliderItems').children()).length -5) * -106;
		console.log(img);

		if (a<img) {
			a=0;
		}
	});

	$('.left').click(function(event) {
		i--
		a += 106;
		if (i < 0) {
			i = arr.length - 1;
		}
		$('.big').attr('src',arr[i]);

		$('.sliderItems').css('left', a+"px");
		img1=(($(".sliderItems").children()).length -4) * -106;
		console.log(img1);
		if (a>0) {
			a=img1;
		}

	});


	$('.sliderItem').click(function(e) {
		$('.big').attr('src',$(this).children().attr('src'));

	});
	
	$('.sliderItems').click(function(e) {
		console.log(e)

	});

    
	
});