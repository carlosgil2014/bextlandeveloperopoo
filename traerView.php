<?php 
	require 'StatusModel.php';
$status = new StatusModel();
$status_data =$status->read();
//var_dump($status_data);

$num_status = count($status_data);
echo '<tr class="odd gradeX">';
for ($i=0; $i <count($status_data); $i++) { 
	$btnEdit='<a class="btn btn-primary" href="javascript:editarProducto('.$status_data[$i]['id_status'].');">Editar</a>';
	$btnEliminar='<a class="btn btn-danger" href="javascript:editarEliminar('.$status_data[$i]['id_status'].');">Eliminar</a>';
		echo '<td>'.$status_data[$i]['id_status'].'</td>
		<td>'.$status_data[$i]['status'].'</td>
		<td>
		'.$btnEdit.'
		'.$btnEliminar.'
		</td>
		</tr>';
	}
 ?>