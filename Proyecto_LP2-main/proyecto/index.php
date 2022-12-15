<?php

  session_start();

  require 'database.php';
  include_once 'includes/header.php';

  //require 'includes/header.php'



  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, usuario, password, email, nombre, apellidos, DNI, telefono, sexo, cargo FROM usuarioss WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if ($results > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mi pagina web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  	<title></title>
  	<link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="includes/css/estilos2.css">

  	<script type="text/javascript" src="js/script.js"></script>
    <script src="includes/js/jquery-3.1.0.min.js"></script>
    <script src="includes/js/main.js"></script>
  </head>
  <body>


    <?php if(!empty($user)): ?>
      <a href="logout.php" style="float: right; padding: 10px; position: fixed;">
        Logout</p>
      </a>
      <br><p align="center"> Bienvenido, <?= $user['nombre']." ". $user['apellidos']." de cargo ". $user['cargo'] ; ?>


      <?php
      if($user['cargo']=="administrador")
        include_once 'App/vistas/administrador.php';


      if($user['cargo']=="repartidor")
        include_once 'App/vistas/repartidor.php';



      ?>


      <div class="slideshow">
    <ul class="slider">
      <li>
        <img src="includes/img/1.jpg" alt="">
        <section class="caption">
          <h1>Productos</h1>
          <p>Llevamos todo producto Alimenticios o de Primera Necesidad a todo Huánuco.</p>
        </section>
      </li>
      <li>
        <img src="includes/img/2.jpg" alt="">
        <section class="caption">
          <h1>Pedidos</h1>
          <p>Envio Provincial e Interprovincial</p>
        </section>
      </li>
      <li>
        <img src="includes/img/3.jpg" alt="">
        <section class="caption">
          <h1>Servicios</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quis ipsa, id quidem quisquam unde.</p>
        </section>
      </li>

    </ul>

    <ol class="pagination">

    </ol>

    <div class="left">
      <span class="fa fa-chevron-left"></span>
    </div>

    <div class="right">
      <span class="fa fa-chevron-right"></span>
    </div>

  </div>




    <?php else: ?>


    <?php if(!empty($message)): ?>
      <a href="logout.php">
        salir</p>
      </a>
      <p> <?= $message ?></p>
    <?php endif; ?>
<div class="contenedor">
        <h1 class="titulo">Iniciar sesion</h1>
        <hr class="border">
            <span><a href="signup.php"></a></span>

            <form action="login.php" method="POST" class="formulario">
              <div class="form-group">
              <input type="text" name="usuario" class="usuario" placeholder="ingrese usuario">
            </div>
             <div class="form-group">
              <input type="password" name="password" class="password" placeholder="ingrese contraseña">
            </div>
              <input type="submit" value="Submit" style="padding:15px;">
            </form>

            <h3 class="titulo"> ¿No tienes una cuenta? <br><a href="signup.php">Registrate</a></h3>
            <?php endif; ?>

</div>
  </body>

  <?php include_once 'includes/footer.php'; ?>
</html>
