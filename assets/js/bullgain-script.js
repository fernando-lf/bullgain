$(document).ready(function () {
	var sync1 = $("#slider");
	var sync2 = $("#navigation");

	var flag = false;

	var slides = sync1.owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 6000,
		autoplayHoverPause: false,
		nav: false,
		dots: true
	});
	var thumbs = sync2.owlCarousel({

		loop: false,
		margin: 10,
		autoplay: false,
		nav: false,
		dots: false, responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			600: {
				items: 1,
				nav: false
			},
			1000: {
				items: 1,
				nav: true,
				loop: false,
				margin: 20
			}
		}
	}).on('click', '.owl-item', function (e) {
		e.preventDefault();
		sync1.trigger('to.owl.carousel', [$(e.target).parents('.owl-item').index(), 300, true]);
	}).on('change.owl.carousel', function (e) {
		if (e.namespace && e.property.name === 'position' && !flag) {
		}
	}).data('owl.carousel');

	// -----------------my script--------------------------------
	var all = $(".side .owl-stage .owl-item ").length;
	console.log(all);
	var height1 = $(".side .owl-stage .owl-item ").height();
	var height = $(".side .owl-stage .owl-item ").height() * 5;
	$(".side .owl-stage").css("height", height + "px");
	var syncposi = $(".side .owl-stage .active").index();
	console.log(syncposi);
	if (syncposi == 0) {
		$(".owl-prev").css({ "pointer-events": "none", "opacity": 0.3 });
	}

	$(".owl-next").click(function () {
		var index = $(".side .owl-stage .active").index();
		if (index > 4 && index <= 22) {
			$('.side .owl-stage').animate({ scrollTop: '+=' + height1 });

		}
		$(".owl-prev").css({ "pointer-events": "auto", "opacity": 1 });
		if (index == 0) {
			$('.side .owl-stage').scrollTop(0);
			console.log("hi");
		}
	});
	$(".owl-prev").click(function () {
		var index = $(".side .owl-stage .active").index();
		if (index > 5) {
			$('.side .owl-stage').animate({ scrollTop: '-=' + height1 });
		}
		if (index < 2) {
			$('.side .owl-stage').animate({ scrollTop: '-=' + height1 * 2 });
		}

		if (index == 0) {
			$(".owl-prev").css({ "pointer-events": "none", "opacity": 0.3 });
		}
	});

	setInterval(function () {
		var syncposi = $(".side .owl-stage .active").index();
		if (syncposi == 0) {
			$(".owl-prev").css({ "pointer-events": "none", "opacity": 0.3 });
		}
	}, 100);
	/*fancybox*/
	$('.fancybox').fancybox();
});

/* Courses */

$('.slider-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	vertical: true,
	asNavFor: '.slider-for',
	dots: false,
	focusOnSelect: true,
	verticalSwiping: true,
	responsive: [
		{
			breakpoint: 992,
			settings: {
				vertical: false,
			}
		},
		{
			breakpoint: 768,
			settings: {
				vertical: false,
			}
		},
		{
			breakpoint: 580,
			settings: {
				vertical: false,
				slidesToShow: 3,
			}
		},
		{
			breakpoint: 380,
			settings: {
				vertical: false,
				slidesToShow: 2,
			}
		}
	]
});

/* Simulation BTC */
function simulate(btcToday) {
	var valor1 = parseInt(document.getElementById('txt1').value, 10);
	var valor2 = parseInt(document.getElementById('txt2').value, 10);
	var coinValue = 17172;




	switch (valor1) {
		//valor que eu teria hoje = (valor digitado / preço da moeda na época) * preço da moeda atualmente
		case 2010:
			coinValue = (valor2 / 0.06) * (btcToday / 5.12);
			break;
		case 2011:
			coinValue = (valor2 / 0.43) * (btcToday / 5.12);
			break;
		case 2012:
			coinValue = (valor2 / 5.81) * (btcToday / 5.12);
			break;
		case 2013:
			coinValue = (valor2 / 19.87) * (btcToday / 5.12);
			break;
		case 2014:
			coinValue = (valor2 / 841.07) * (btcToday / 5.12);
			break;
		case 2015:
			coinValue = (valor2 / 238.49) * (btcToday / 5.12);
			break;
		case 2016:
			coinValue = (valor2 / 382.63) * (btcToday / 5.12);
			break;
		case 2017:
			coinValue = (valor2 / 992.69) * (btcToday / 5.12);
			break;
		case 2018:
			coinValue = (valor2 / 9521.59) * (btcToday / 5.12);
			break;
	}

	if (document.getElementById("txt2").value.length < 1) {
		coinValue = 0;
	}

	coinValue = new Intl.NumberFormat('pt-BR', { maximumSignificantDigits: 8 }).format(coinValue);

	document.getElementById('result').value = coinValue;
}

/* ------------- */
/*JS FOR SCROLLING THE ROW OF THUMBNAILS*/
$(document).ready(function () {
	$('.vid-item').each(function (index) {
		$(this).on('click', function () {
			var current_index = index + 1;
			$('.vid-item .thumb').removeClass('active');
			$('.vid-item:nth-child(' + current_index + ') .thumb').addClass('active');
		});
	});
});

/* --- */

document.getElementById('void').addEventListener('click', function (e) {
	e.preventDefault();
});

/* Switch class carousel button */

function switchElement() {
	let e = document.getElementById('btnHeader');
	let bd = document.getElementById('body');
	let img = document.getElementById('imgBtnHeader');

	if (e.getAttribute('data-bs-slide') == "next") {
		e.classList.add('carousel-control-prev-ps');
		e.classList.remove('carousel-control-next-ps');
		e.setAttribute('data-bs-slide', 'prev');
		bd.style.backgroundImage = "url(assets/img/homeGif2.gif)";
		img.style.transform = "rotate(180deg)";

		

	} else {
		e.classList.add('carousel-control-next-ps');
		e.classList.remove('carousel-control-prev-ps');
		e.setAttribute('data-bs-slide', 'next');
		bd.style.backgroundImage = "url(assets/img/homeGif1.gif)";
		img.style.transform = "rotate(0deg)";
	}
}
