<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
        <div class="row" >
         <div class="col col-md-4"></div>
         <div class="col col-md-4">
          <form method="post" action="<?php echo base_url('/seguridad/login'); ?>">
            <br>
          <img class="img-responsive" src="<?php echo base_url('/img/seguridad.png'); ?>" />
          <br>
           <div class="input-group form-group">
             <span class="input-group-addon">Usuario</span>
             <input type="text" autofocus name="usuario" class="form-control"/>
           </div>
           <div class="input-group form-group">
             <span class="input-group-addon">Clave</span>
             <input type="password" name="clave" class="form-control"/>
           </div>
           <div>
              <button type="submit" class="btn btn-primary">Ingresar</button>
           </div>

          </form>

         </div>
         <div class="col col-md-4"></div>

        </div>
    </div>
  </body>
</html>
