<?php
	require_once('../lib/pdf/mpdf.php');


	$name = htmlspecialchars($_POST['inNombre']);
	$empresa = htmlspecialchars($_POST['inEmpresa']);
	$email = htmlspecialchars($_POST['inEmail']);
	$tel = htmlspecialchars($_POST['inTel']);
	
	$html = '
<body>
	<style>

	</style>
	<header>
		 <img id="logo" class="grayscale" src="img/Logo_black.png">
	</header>';

$html .='<div id="divSolicitud">
			<div>
			'.$name.'
			</div>
			<div>
			'.$empresa.'
			</div>
			<div>
			'.$email.'
			</div>
			<div>
			'.$tel.'
			</div>
		</div>';

$html .='
	<footer>
		<div id="boxDirection">
			<div id="line">
				<hr class="linehr">
			</div>
			<div id="txtDirection">
				<p class"pDir">Victoriano Salado Álvarez #128 L-2, C.P. 44600 Ladrón de Guevara. Guadalajara, Jalisco&nbsp;&nbsp; T.(33) 2306 2020 // (33) 2306 2030</p>
			</div>
		</div>
		<div id="correo">
			<p id="pCorreo">&nbsp;&nbsp;&nbsp;www.aori.mx &nbsp;&nbsp;| &nbsp;&nbsp;hola@aori.mx &nbsp;</p>
		</div>
		
	</footer>
</body>';
	
	$mpdf = new mPDF('c', 'A4', 0,'Montserrat', 0, 0, 0, 0);
	$css = file_get_contents('cssSoli/ArchivoPdf.css');
	$mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);
	$mpdf->Output('solicitud.pdf', 'I');
	
?>