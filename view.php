<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>

  <h1>crud con mv de la tabla status</h1>

 <button type="button" id="nuevo-producto" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">AGREGAR</button>

<table class="table table-inverse">
<thead>
  <tr>
    <th>Status id</th>
    <th>Status</th>
  </tr>
</thead>
<tbody>
<?php 
require_once 'traerView.php';
 ?>
</tbody>
</table>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Registra un Status</h3>
  </div>
      <div class="modal-body">
        <form id="formularioAgregar" method="post">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">STATUS:</label>
            <input type="text" required="required" name="status"  id="status" maxlength="100"/>
            <input type="hidden" name="insertar" id="insertar" value="insertar">
          </div>
          <div class="modal-footer">
            <button type="submit" name="enviar" id="agregar" class="btn btn-primary">Agregar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          <div id="resp"></div>
        </form>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="bootstrap/jquery-3.2.1.js"></script>-->
    <script src="jquery/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/cloudflare.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/status.js"></script>
  </body>
</html>