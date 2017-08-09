<?php
	require_once('../lib/pdf/mpdf.php');


$data = array();
	foreach ($_POST as $key => $value){
		$data[] = $value;
}


$lista="";
foreach($_POST as $key => $value){
   if(strpos($key,"item-done"))
       $lista.="<li>".$value."</li>";
}

	$nombre =  $data[0];
	$empresa = $data[1];
	$typePage =  $data[4];



	if (isset($_POST['cb1'])){
  		$elemnto1 = htmlspecialchars('Caracteristica');
	}

	if (isset($_POST['cb2'])){
  		$elemnto2 = htmlspecialchars('Caracteristica2');
	}

	if (isset($_POST['cb3'])){
  		$elemnto3 = htmlspecialchars('Caracteristica diferente');
	}

	if (isset($_POST['cb4'])){
  		$elemnto4 = htmlspecialchars('Caracteristica ejemplo');
	}

	if (isset($_POST['cb5'])){
  		$elemnto5 = htmlspecialchars('CaracteristicaxD');
	}

	
	$html = '
<body>
	
	<header>
		 
	</header>
	<div class="fecha">
		<p class="pFecha">Fecha: '.date("d/m/Y").' &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</p>
		<p class="pFecha">Lugar: Guadalajara, Jalisco, México.</p>
		<p class="pNombre">Con Atención a: '.$nombre.'</p>
		<p class="pNombre">Puesto / Ocupación:</p>
		<p class="pNombre">Empresa: '.$empresa.'</p>
	</div>
	<div id="divSolicitud">
			<p class="h1Style">Hola '.$nombre.', </p>
			<p class="pStyle">A través de la presente cotización agradezco de antemano tu preferencia y me complace comentarte que está dentro de nuestro ADN, el querer colaborar en el desarrollo de plataformas digitales que impulsen la imagen y resultados de profesionistas o empresas en toda Latino América.</p>
			<div>
				<p class="pList">AORI se especializa en el desarrollo de productos que cuenten con:</p>
				<div class="lista">
					<ul class="listElement">
						<li>Factibilidad Comercial</li>
						<li>Facilidad de Uso y</li>
						<li> Factibilidad de Navegación</li>
					</ul>
				</div>

				<p class="pCoti">Como profesionista y empresario, comprendo el tedio que significa el disponer de una herramienta digital que no funcione adecuadamente y que genere más problemas que soluciones. Justamente por ello, pongo a tu disposición la siguiente cotización que te brindara tranquilidad y resultados.</p>
			</div>
			<p class="pType">'.$typePage.':</p>
			<div class="lista">
					<ul class="listElement">
						<li>'.$elemnto1.'</li>
						<li>'.$elemnto2.'</li>
						<li>'.$elemnto3.'</li>
						<li>'.$elemnto4.'</li>
						'.$lista.'
					</ul>
			</div>
			<div class="divFirma">
				<p class="pFirma">Quedo a tus órdenes,</p>
				<p class="pFirma">A T E N T A M E N T E,</p>
				<img src="img/Firma.jpg" id="imgFirma">
				<p class="pDirector">Director General</p>
			</div>			
		</div>
	<footer>
		<div id="boxDirection">
			<div id="line">
				<hr class="linehr">
			</div>
			<div id="txtDirection">
				<p class="pDir">Victoriano Salado Álvarez #128 L-2, C.P. 44600 Ladrón de Guevara. Guadalajara, Jalisco&nbsp;&nbsp; T.(33) 2306 2020 // (33) 2306 2030</p>
			</div>
		</div>
		<div id="correo">
			<p id="pCorreo">&nbsp;&nbsp;&nbsp;www.aori.mx &nbsp;&nbsp;| &nbsp;&nbsp;hola@aori.mx &nbsp;</p>
		</div>
	</footer>
</body>';
	
	
	$mpdf = new mPDF('c', 'A4', 0,'Montserrat', 0, 0, 0, 0);

	$mpdf->SetDisplayMode('fullpage');
	$mpdf->SetWatermarkImage('img/cabeza.JPG', 1, '', array( -8, 0));
	$mpdf->showWatermarkImage = true;
	$css = file_get_contents('cssSoli/ArchivoPdf.css');
	$mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);
	$mpdf->Output('solicitud.pdf', 'I');
	
?>