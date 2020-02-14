<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contenido</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th style="border-bottom: 1px solid #000; padding: 10px 5px;">title 1#</th>
				<th style="border-bottom: 1px solid #000; padding: 10px 5px;">title 2#</th>
				<th style="border-bottom: 1px solid #000; padding: 10px 5px;">title 3#</th>
				<th style="border-bottom: 1px solid #000; padding: 10px 5px;">title 4#</th>
				<th style="border-bottom: 1px solid #000; padding: 10px 5px;">title 5#</th>	
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 1#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 2#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 3#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 4#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 5#</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 1#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 2#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 3#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 4#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 5#</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 1#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 2#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 3#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 4#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 5#</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 1#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 2#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 3#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 4#</td>
				<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">contenido 5#</td>
			</tr>
		</tbody>
	</table>

	<p>tabla de tecnicos</p>
	<style>
/*th {
  padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1; 
}
th:first-child {
	padding-left: 0; 
}
th:last-child {
  padding-right: 0; 
}

td {
  padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1; 
}
td:first-child {  
	padding-left: 0; 
}
td:last-child {
  padding-right: 0; 
  }*/

</style>

<b><big> <h1>
	RECAUDO BOGOTA
</h1></big></b>
<i style="display: block; margin-bottom: 20px;"><label>Buen día,</label></i>        
<i><label>El aplicativo de turnos registro el siguiente cambio en la malla de técnicos, ejecutado por el analista: </label></i><br>
<table style="border-spacing: 0; margin: 20px;">
	<thead>
		<tr>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;">Nombre del Analista</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" >Cédula del Analista</th>
		</tr> 
	</thead>
	<tbody>
		<tr>
			<td style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1; background-color: #F2F3F4;" >' . $nombre . '</td>
			<td style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1; background-color: #F2F3F4;">' . $documento . '</td>
		</tr>
	</tbody>
</table>
<i style="display: block; margin-bottom: 20px;" ><label>Con la modificación del siguiente registro: </label></i>
<i><label>*Revisar archivo adjunto.</label></i><br>
<br>
<br>
<b><label>Observaciones:</label></b>
<u><i><label>Este mensaje ha sido enviado por un sistema automatico. Por favor no intente responder a este mensaje ya que este buzón de correo no es revisado por ninguna persona</label></i></u>

<table id="table_programacion_tecnico" class="table  table-turnos" >
	<thead>
		<tr>
			<th rowspan="2" class="width40 text-center" style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;">Fecha</th>
			<th colspan="4" class="width40 text-center" style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;">Datos personales</th>
			<th colspan="2" class="width20 text-center" style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;">Atención</th>
			<th colspan="2" class="width30 text-center" style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;">Zona</th>
			<th colspan="2" class="width20 text-center" style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;">Horario</th>
			<th colspan="2" class="width50 text-center" style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;">Ubicación</th>
			<th colspan="2" class="width20 text-center" style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;">Almuerzo</th>
			<th colspan="4" class="width40 text-center" style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;">Capacitación</th>
		</tr>
		<tr>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="text-center">Cargo</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="text-center">Documento</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="text-center">Nombre</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="text-center">Teléfono</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width20 text-center">Turno</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width10 text-center">Ticket</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width20 text-center">Zona</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width20 text-center">Sub  zona</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width10 text-center">Inicio</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width10 text-center">Fin</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width30 text-center">Estacion</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width20 text-center">Taquilla</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width10 text-center">Inicio</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width10 text-center">Fin</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width10 text-center">Inicio</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width10 text-center">Fin</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width20 text-center">Actividad</th>
			<th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;" class="width20 text-center">Sala</th>
		</tr>
	</thead> 
	<tbody id="tbody_programacion_tecnico">
	</tbody>
</table>
</body>
</html>

<?php

$contents = array(["contenido 1#", "contenido 2#", "contenido 3#", "contenido 4#", "contenido 5#"],
	["contenido 1#", "contenido 2#", "contenido 3#", "contenido 4#", "contenido 5#"],
	["contenido 1#", "contenido 2#", "contenido 3#", "contenido 4#", "contenido 5#"],
	["contenido 1#", "contenido 2#", "contenido 3#", "contenido 4#", "contenido 5#"],
	["contenido 1#", "contenido 2#", "contenido 3#", "contenido 4#", "contenido 5#"]);

$table = '<table>
<thead>
<tr>
<th style="border-bottom: 1px solid #000; padding: 10px 5px;">title 1#</th>
<th style="border-bottom: 1px solid #000; padding: 10px 5px;">title 2#</th>
<th style="border-bottom: 1px solid #000; padding: 10px 5px;">title 3#</th>
<th style="border-bottom: 1px solid #000; padding: 10px 5px;">title 4#</th>
<th style="border-bottom: 1px solid #000; padding: 10px 5px;">title 5#</th>	
</tr>
</thead>
<tbody>
'; 

foreach ($contents as $key => $row) {
	$table .= '
	<tr>
	<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">'.$row[0].'</td>
	<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">'.$row[1].'</td>
	<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">'.$row[2].'</td>
	<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">'.$row[3].'</td>
	<td style="border-bottom: 1px solid #ddd; padding: 10px 5px;">'.$row[4].'</td>
	</tr>';	
}		


$table .= '</tbody>
</table>';		
echo $table;

$nombre = "Jose Roberto Saavedra Carvajal";
$documento = "1023980167";
$styleTDTH = "padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1;";
$styleTD_Gray = "padding: 12px 15px; text-align: left; border-bottom: 1px solid #E1E1E1; background-color: #F2F3F4;";
$messageUpdateTecnicos = '
<b><big> <h1>
RECAUDO BOGOTA
</h1></big></b>
<i style="display: block; margin-bottom: 20px;"><label>Buen día,</label></i>        
<i><label>El aplicativo de turnos registro el siguiente cambio en la malla de técnicos, ejecutado por el analista: </label></i><br>
<table style="border-spacing: 0; margin: 20px;">
<thead>
<tr>
<th style="'.$styleTDTH.'">Nombre del Analista</th>
<th style="'.$styleTDTH.'" >Cédula del Analista</th>
</tr> 
</thead>
<tbody>
<tr>
<td style="'.$styleTD_Gray.'" >' . $nombre . '</td>
<td style="'.$styleTD_Gray.'">' . $documento . '</td>
</tr>
</tbody>
</table>
<i style="display: block; margin-bottom: 20px;" ><label>Con la modificación del siguiente registro: </label></i>
';

$tableTecnicos = '
<table id="table_programacion_tecnico" class="table  table-turnos" >
<thead>
<tr>
<th style="'.$styleTDTH.'" rowspan="2" class="width40 text-center">Fecha</th>
<th style="'.$styleTDTH.'" colspan="4" class="width40 text-center">Datos personales</th>
<th style="'.$styleTDTH.'" colspan="2" class="width20 text-center">Atención</th>
<th style="'.$styleTDTH.'" colspan="2" class="width30 text-center">Zona</th>
<th style="'.$styleTDTH.'" colspan="2" class="width20 text-center">Horario</th>
<th style="'.$styleTDTH.'" colspan="2" class="width50 text-center">Ubicación</th>
<th style="'.$styleTDTH.'" colspan="2" class="width20 text-center" >Almuerzo</th>
<th style="'.$styleTDTH.'" colspan="4" class="width40 text-center">Capacitación</th>
</tr>
<tr>
<th style="'.$styleTDTH.'" class="text-center">Cargo</th>
<th style="'.$styleTDTH.'" class="text-center">Documento</th>
<th style="'.$styleTDTH.'" class="text-center">Nombre</th>
<th style="'.$styleTDTH.'" class="text-center">Teléfono</th>
<th style="'.$styleTDTH.'" class="width20 text-center">Turno</th>
<th style="'.$styleTDTH.'" class="width10 text-center">Ticket</th>
<th style="'.$styleTDTH.'" class="width20 text-center">Zona</th>
<th style="'.$styleTDTH.'" class="width20 text-center">Sub  zona</th>
<th style="'.$styleTDTH.'" class="width10 text-center">Inicio</th>
<th style="'.$styleTDTH.'" class="width10 text-center">Fin</th>
<th style="'.$styleTDTH.'" class="width30 text-center">Estacion</th>
<th style="'.$styleTDTH.'" class="width20 text-center">Taquilla</th>
<th style="'.$styleTDTH.'" class="width10 text-center">Inicio</th>
<th style="'.$styleTDTH.'" class="width10 text-center">Fin</th>
<th style="'.$styleTDTH.'" class="width10 text-center">Inicio</th>
<th style="'.$styleTDTH.'" class="width10 text-center">Fin</th>
<th style="'.$styleTDTH.'" class="width20 text-center">Actividad</th>
<th style="'.$styleTDTH.'" class="width20 text-center">Sala</th>
</tr>
</thead> 
<tbody>
</tbody>
</table>
';
$messageUpdateTecnicos .= $tableTecnicos;

$messageUpdateTecnicos .= '
<br>
<br>
<i><label>*Revisar archivo adjunto.</label></i><br>
<br>
<br>
<b><label>Observaciones:</label></b>
<u><i><label>Este mensaje ha sido enviado por un sistema automatico. Por favor no intente responder a este mensaje ya que este buzón de correo no es revisado por ninguna persona</label></i></u>
';

echo $messageUpdateTecnicos;     


?>
<?php 
$data = [[ "name" => "contenido 1#", "number" => 1],
[ "name" => "contenido 2#", "number" => 2],
[ "name" => "contenido 3#", "number" => 3],
[ "name" => "contenido 4#", "number" => 4],
[ "name" => "contenido 5#", "number" => 5],
[ "name" => "contenido 6#", "number" => 6],
[ "name" => "contenido 7#", "number" => 7]];

?>	
<script>
	var data2 = '<?php echo json_encode($data); ?>';
	data2 = JSON.parse(data2);
	var nombres_chart = [];
	var number_chart = [];
	for(let i = 0; i < data2.length; i++){ 
		nombres_chart[i] = data2[i].name;  
		number_chart[i] = data2[i].number; 
	}
	console.log({data2, number_chart, nombres_chart});

</script> 




