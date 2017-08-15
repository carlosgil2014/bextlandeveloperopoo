<?php 
//require('StatusModel.php');

echo '<h1>crud con mv de la tabla status</h1>';
$status = new StatusModel();
$status_data =$status->read();
//var_dump($status_data);

$num_status = count($status_data);

echo "<h2>Numero de estatus: <mark>$num_status</mark></h2>";

echo "<h2>Tabla de status</h2>";
echo '<table>
	<tr>
		<th>status id</th>
		<th>estatus</th>
	</tr>';
	for ($i=0; $i <count($status_data); $i++) { 
		echo '<tr>
			<td>'.$status_data[$i]['id_status'].'</td>
			<td>'.$status_data[$i]['status'].'</td>
			<td></td>
		</tr>';
	}

echo '</table>';

echo "<h2>insertar de status</h2>";
$new_status = array(
'id_status'=> 0,
'status' => 'otro status'
);
//$status->create($new_status);

echo "<h2>modificar de status</h2>";
$update_status = array(
'id_status'=> 8,
'status' => 'otroo status'
);
//$status->update($update_status);

echo "<h2>eliminar de status</h2>";
$status->delete(8);