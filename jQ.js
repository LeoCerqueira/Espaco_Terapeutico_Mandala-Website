$('.head ul ul').hide();

$('.menuicon').on('click', function () {
	$('.head ul ul').fadeToggle();
});

const icons = document.querySelectorAll('.icon');
icons.forEach((icon) => {
	$('.menuicon').on('click', function () {
		icon.classList.toggle('open');
	});
});
