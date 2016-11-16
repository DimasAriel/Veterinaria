<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>usuarios</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
    <h3>Usuarios </h3>
    <div class="row">
    <form method="post" action="<?php echo base_url('usuario/guardar'); ?>">
      <div class="col-md-6">
        <div class="form-group input-group">
          <span class="input-group-addon">ID: </span>
          <input  type="text" readonly class="form-control" value="<?php $usuario->id; ?>" name="id" />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Usuario:</span>
          <input type="text" class="form-control" value="<?php $usuario->usuario; ?>" name="usuario" />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Clave:</span>
          <input type="text" class="form-control" value="<?php $usuario->clave; ?>" name="clave" />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Nombre:</span>
          <input type="text" class="form-control" value="<?php $usuario->nombre; ?>" name="nombre" />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Email:</span>
          <input type="text" class="form-control" value="<?php $usuario->email; ?>" name="email" />
        </div>

<div class="text-center">
  <button class="btn btn-primary" type="submit">Guardar</button>
</div>
    </div>
  </div>

</form>
<div>
<h3>Registros Anteriores </h3>
<table class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Usuario</th>
    <th>Email</th>
    <td>
      --
    </td>
    </tr>
</thead>
<tbody>
  <?php

      foreach($usuarios as $usuario){

         $linkEdit = base_url("/usuario/?id={$usuario->id}");
         $linkDelete = base_url("/usuario/delete/?id={$usuario->id}");

        echo  "<tr>
              <td>{$usuario->id}</td>
              <td>{$usuario->nombre}</td>
              <td>{$usuario->usuario}</td>
              <td>{$usuario->email}</td>
              <td>
                 <a href='{$linkEdit}' class='btn btn-info btn-sm'>Edit</a>
                 <a href='{$linkDelete}' onclik='return validarBorrar(); 'class='btn btn-danger btn-sm'>Del</a>
              </td>
        </tr>";

      }

  ?>

</tbody>
</table>
</div>

<div class="text-right">
  <a href="<?php echo base_url('/seguridad/salir'); ?>" class="btn btn-warning">Salir</a>
</div>

</div>
<script>
   function validarBorrar(){

     return confirm("Seguro que quieres borrar esta fila");
   }
</script>
  </body>
</html>
