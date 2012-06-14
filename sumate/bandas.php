<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://ga-api-javascript-samples.googlecode.com/svn-history/r7/trunk/src/explorer/css/custom-theme/jquery-ui-1.7.2.custom.css" />
<link rel="stylesheet" type="text/css" href="css/formularios.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   $("#fecha").datepicker();
});
jQuery(function($){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '&#x3c;Ant',
		nextText: 'Sig&#x3e;',
		currentText: 'Hoy',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		'Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
		dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
		weekHeader: 'Sm',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});
</script>
</head>
<body>
<div id="bandas"> 
	<div class='banner' style="background: url('img/shows_en_vivo.jpg')"></div>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		<div class='row'>
			<span>Nombre de contacto</span><input type="text" name="nombre">
		</div>
		<div class='row'>
			<span>Telefono a contactar</span><input type="text" name="telefono">
		</div>
		<div class='row'>
			<span>Lugar del evento</span><input type="text" name="lugar">
		</div>
		<div class='row'>
			<span>Fecha del evento</span><input type="text" name="fecha" id="fecha" size="19"  />
		</div>
		<div class='row'>
			<span>Precio</span><input type="text" name="precio">
		</div>
		<div class='row'>
			<span>Descripción<br><i>(opcional)</i></span>
			<textarea cols="50" rows="4" name="descripcion" placeholder="Descripcion del evento..."></textarea>
		</div>
		<input class='enviar' type="submit" value="Enviar" >
	</form>
</div>
</body>
</html>