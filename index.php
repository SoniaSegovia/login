<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Estructuras de control</title>
  </head>
  <body>
    <div class="container">
        <div class="row justificy-content-center"></div>
        <div  class ="col-6 p-5 bg-white shadow-lg rounded"></div>
    <h1>Inicio de Sesion!</h1>
<hr>
<form method="post" action="">
    

<div class="form-group">
    <label for="usuario">Usuario</label>
    <input id="usuario" class="form-control" type="text" name="usuario"  value ="juan"require>
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input id="password" class="form-control" type="text" name="password"   value ="12345"require>
</div>
 <br>
 <a href="http://">olvido la contraseña?</a>

 <br>
 <br>
 <button class = "btn-btn-primary" type = "submit">Enviar</button>
 </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>