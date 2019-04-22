// Event saat link di klik
$('.page-scroll').on('click', function(e){

	//ambil isi href
	var tujuan = $(this).attr('href');
	//tangkap element yang bersangkutan
	var elemenTujuan = $(tujuan);

	// pindahkan scroll
	$('html, body').animate({
		scrollTop: elemenTujuan.offset().top - 80
	}, 1000, 'easeInOutExpo');

	e.preventDefault();

});

// Efek Parallax

$(window).on('load', function() {
	// Left side
	$('.left-side .isikiri').each(function(i) {
		setTimeout(function() {
			//$('.portfolio .thumbnail').eq(i).addClass('muncul');
			$('.left-side .isikiri').eq(i).addClass('mpShow');
		}, 700 *i);
	});

	// Right side
	// About me
	$('.p-About-me').addClass('pShow');

	// Ul
	$('.work-ex ul').each(function(i) {
		setTimeout(function() {
			//$('.portfolio .thumbnail').eq(i).addClass('muncul');
			$('.work-ex ul').eq(i).addClass('wShow');
		}, 300 *i);
	});	
});

$(window).scroll(function(){
	var wScroll = $(this).scrollTop();

	// My project
	if(wScroll > $('.my-project').offset().top - 220) {
		$('.my-project .thumbnail').each(function(i) {
			setTimeout(function() {
				$('.my-project .thumbnail').eq(i).addClass('muncul');
			}, 200 * (i+1));
		});
	}	
});

// Back to top
$(window).scroll(function(){
	if($(this).scrollTop() > 200) {
		$('.go-top').fadeIn(200);
	} else {
		$('.go-top').fadeOut(200);
	};
});

$('.go-top').click(function(e) {
	e.preventDefault();
	$('html, body').animate({
		scrollTop:0
	}, 1000, 'easeInOutExpo');
});