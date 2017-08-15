<?php 
require 'StatusModel.php';
$status = new StatusModel();

if( isset($_POST['insertar']) ){
$statuss = $_POST['status'];
$new_status->create($new_status);
}

if ( isset($_POST['update']) ) {
$update_status = $_POST['status'];
$status->update($update_status);
}

if ( isset($_POST['delete']) ) {
$delete_status = $_POST['status'];
$status->delete($delete_status);
}

 ?>
