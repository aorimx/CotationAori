
$(document).ready(function () {
	
	$('.menu-bar').on('click', function () {
		$('.headerM').toggleClass('abrir');
	});

	$('.btnVerMas').on('click', function () {
		console.log("object");
		$('.parrafo3').toggleClass('verMas');
	});
});