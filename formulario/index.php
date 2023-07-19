<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="estilos.css">

 <title>Formulario</title>
</head>
<body>
 <form action="" method="POST" id="form">
 <div class="form">
 <h1>Registro</h1>
 <div class="grupo">
 <input type="text" name="nombre" id="nombre" ><span class="barra" ></span>
 <label for="">Nombre</label>
 </div>
 <div class="grupo">
 <input type="email" name="email" id="email"  ><span class="barra" ></span>
 <label for="">Email</label>
 </div>
 <div class="grupo">
 <input type="password" name="password" id="password" ><span class="barra" ></span>
 <label for="">Password</label>
 </div>
 <button type="submit" name= "inicio">Iniciar Sesión </button>
 <p class="warnings" id="warnings"></p>
 </div>
 </form>


  <?php
    include("registrar.php"); 
    
   ?>

 

</body>
</html>