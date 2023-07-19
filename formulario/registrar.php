<?php

include("base_datos.php"); 





if(isset($_POST['inicio'])){ 
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {

    $name= trim($_POST['nombre']);
    $email= trim($_POST['email']);
    $contra= trim($_POST['password']); 
    $consulta= "INSERT INTO datos( nombre, email, contra) VALUES ('$name','$email','$contra')";
    $resultado= mysqli_query($conex,$consulta);

      if($resultado){
       ?>
      <h3 class="ok"> ¡Has iniciado sesión correctamente!</h3>

      <?php


      }  else {

        ?>
        <h3 class="bad"> ¡Ups ha ocurrido un error al iniciar sesión !</h3>
  
        <?php

      } 
    }
    else{

        ?>
        <h3 class="bad"> Por favor complete los campos </h3>
  
        <?php



    }
      





}









?>