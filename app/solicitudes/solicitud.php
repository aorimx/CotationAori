<?php
	require_once('../lib/pdf/mpdf.php');

$data = array();
	foreach ($_POST as $key => $value){
		$data[] = $value;
		echo "$key = $value";
}


$lista="";
foreach($_POST as $key => $value){
   if(strpos($key,"item-done"))
       $lista.="<li>".$value."</li>";
}


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
	<div id="divSolicitud">
			<h1 class="h1Style">Solicitud de cotización para la empresa: '.$empresa.'</h1>
			
			<h2 class="h2Style">Objetivo</h2>
			
			<p class="pStyle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan ipsum imperdiet, euismod elit sed, tempor lacus. Vestibulum imperdiet tincidunt pulvinar. Nam luctus pulvinar mattis. Etiam consequat tempor nulla, et tristique risus pellentesque vel. Sed aliquam ut dui vitae laoreet. Phasellus aliquam ac urna vitae imperdiet. Etiam sit amet pulvinar diam, ut ornare elit. Sed lobortis est non justo lobortis facilisis. In pellentesque nunc vel posuere consequat. Maecenas sit amet dignissim risus. Nulla facilisi. Duis lacinia placerat tempus. Aliquam ipsum dui, eleifend sed commodo vitae, ultricies ut quam. Curabitur ultricies finibus nisl a tempus. Donec sit amet hendrerit erat, a pulvinar dolor.</p>
			<div>
				<h2 class="h2Style">'.$typePage.'</h2>
				<p class="pList">Características de la página web:</p>
				<div id="lista">
					<ul id="listElement">
						<li>'.$elemnto1.'</li>
						<li>'.$elemnto2.'</li>
						<li>'.$elemnto3.'</li>
						<li>'.$elemnto4.'</li>
						<li>'.$elemnto5.'</li>
						'.$lista.'
						
					</ul>
				</div>

				<p class="pStyle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan ipsum imperdiet, euismod elit sed, tempor lacus. Vestibulum imperdiet tincidunt pulvinar. Nam luctus pulvinar mattis. Etiam consequat tempor nulla, et tristique risus pellentesque vel. Sed aliquam ut dui vitae laoreet. Phasellus aliquam ac urna vitae imperdiet. Etiam sit amet pulvinar diam, ut ornare elit. Sed lobortis est non justo lobortis facilisis. In pellentesque nunc vel posuere consequat. Maecenas sit amet dignissim risus. Nulla facilisi. Duis lacinia placerat tempus. Aliquam ipsum dui, eleifend sed commodo vitae, ultricies ut quam. Curabitur ultricies finibus nisl a tempus. Donec sit amet hendrerit erat, a pulvinar dolor.</p>
			</div>
			
		</div>
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

	$mpdf->SetDisplayMode('fullpage');
	$mpdf->SetWatermarkImage('img/cabeza.JPG', 1, '', array( -8, 0));
	$mpdf->showWatermarkImage = true;
	$css = file_get_contents('cssSoli/ArchivoPdf.css');
	$mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);
	$mpdf->Output('solicitud.pdf', 'I');
	
?>