
$(document).ready(function () {
	
	$('.menu-bar').on('click', function () {
		$('.headerM').toggleClass('abrir');
	});

	$('.txtVerMas1').on('click', function () {
		$('.parrafo1').toggleClass('verMas');
		$('.txt1').toggleClass('txt1None');
		$('.bgProducto1').toggleClass('bgProducto1VerMas');
		$('.producto1').toggleClass('producto1VerMas');
	});

	$('.txtVerMas2').on('click', function () {
		$('.parrafo2').toggleClass('verMas2');
		$('.txt2').toggleClass('txt2None');
		$('.bgProducto2').toggleClass('bgProducto2VerMas');
		$('.producto2').toggleClass('producto2VerMas');
	});

	$('.txtVerMas3').on('click', function () {
		$('.parrafo3').toggleClass('verMas3');
		$('.txt3').toggleClass('txt3None');
		$('.bgProducto3').toggleClass('bgProducto3VerMas');
		$('.producto3').toggleClass('producto3VerMas');
	});

	$('.txtProfesionista').on('click', function () {
		$('.txtEmpresa').toggleClass('txtEmpresaGris');
		$('.txtProfesionista').toggleClass('txtProfesionistaRojo');
		$('.sliderEmpresa').toggleClass('gray');
		$('.sliderProfesionista').toggleClass('red');
	
		$('.ulForm').toggleClass('ulFormSlider');

	});

	$('.txtEmpresa').on('click', function () {
		$('.txtEmpresa').toggleClass('txtEmpresaGris');
		$('.txtProfesionista').toggleClass('txtProfesionistaRojo');
		$('.sliderEmpresa').toggleClass('gray');
		$('.sliderProfesionista').toggleClass('red');
		
		$('.ulForm').toggleClass('ulFormSlider');

	});
	
});