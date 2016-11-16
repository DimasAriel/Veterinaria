<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Aplicacion de veterinaria</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
    <h3>Animales</h3>
    <div class="row">
    <form method="post" action="<?php echo base_url('veterinaria/guardar'); ?>">
      <div class="col-md-6">
        <div class="form-group input-group">
          <span class="input-group-addon">Codigo:</span>
          <input readonly type="text" class="form-control" value="<?php $veterinaria->id; ?>" name="id" />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Nombre:</span>
          <input type="text" class="form-control" value="<?php $veterinaria->nombre; ?>" name="nombre" />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Fecha de Nacimiento:</span>
          <input type="date" class="form-control" value="<?php $veterinaria->fecha_de_nacimiento; ?>" name="fecha_de_nacimiento" />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Tipo:</span>
          <select name="tipo" class="form-control" data-style="btn-primary" value="<?php $veterinaria->tipo; ?>">
          <option name="Gato">Gato</option>
          <option name="Perro">Perro</option>
          <option name="Ave">Ave</option>
          <option name="Hanster">Hanster</option>
          <option name="Conejo">Conejo</option>
        </select>
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Raza:</span>
          <input type="text" class="form-control"  value="<?php $veterinaria->raza; ?>" name="raza" />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Peso:</span>
          <input type="text" class="form-control" value="<?php $veterinaria->peso; ?>" name="peso" />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Color:</span>
          <input type="text" class="form-control" value="<?php $veterinaria->color; ?>" name="color" />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Foto:</span>
          <input type="file" class="form-control" accept="image/*"   name="foto"/>

        </div>
<!-- value="?php $veterinaria->foto; ?>" -->
        <div class="form-group">
          <label for="comment">Commentario:</label>
          <textarea class="form-control" rows="5" id="comment" value="<?php $veterinaria->comentario; ?>" name="comentario"></textarea>
          <!--<span class="input-group-addon">Comentario:</span> -->
          <!--<input type="text" class="form-control" value="?php $veterinaria->comentario; ?>" name="comentario" /> -->
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
    <th>Fecha de Nacimiento</th>
    <th>Tipo</th>
    <th>Raza</th>
    <th>Peso</th>
    <th>Color</th>
    <th>Foto</th>
    <th>comentario</th>
    <td>
      --
    </td>
    </tr>
</thead>
<tbody>
  <?php

      foreach($veterinarias as $veterinaria){

         $linkEdit = base_url("/veterinaria?id={$veterinaria->id}");
         $linkDelete = base_url("/veterinaria/delete/?id={$veterinaria->id}");


        echo  "<tr>
              <td>{$veterinaria->id}</td>
              <td>{$veterinaria->nombre}</td>
              <td>{$veterinaria->fecha_de_nacimiento}</td>
              <td>{$veterinaria->tipo}</td>
              <td>{$veterinaria->raza}</td>
              <td>{$veterinaria->peso}</td>
              <td>{$veterinaria->color}</td>
              <td>{$veterinaria->foto}</td>
              <td>{$veterinaria->comentario}</td>

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
  <a href="<?php echo base_url('/Seguridad/salir'); ?>" class="btn btn-warning">Salir</a>
</div>

</div>
<script>
   function validarBorrar(){

     return confirm("Seguro que quieres borrar esta fila");
   }
</script>
  </body>
</html>
