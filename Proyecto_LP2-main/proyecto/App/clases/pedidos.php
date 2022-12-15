<?php

  require 'base_datos/bd_clientes.php';

  $message = '';

  if(!empty($_POST['nom_pe']) && !empty($_POST['estado_pe']) && !empty($_POST['precio_pe'])) {

      if (!empty($_POST['nom_pe']) && !empty($_POST['estado_pe']) && !empty($_POST['precio_pe'])) {

        $sql = "INSERT INTO pedido (nom_pe, estado_pe, precio_pe) VALUES (:nom_pe, :estado_pe, :precio_pe)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom_pe', $_POST['nom_pe']);
        $stmt->bindParam(':estado_pe', $_POST['estado_pe']);
        $stmt->bindParam(':precio_pe', $_POST['precio_pe']);


        if ($stmt->execute()) {
          $message = 'se ha registrado con exito';
        } else {
          $message = 'lo sentimos, hay un problema';
        }
      }

    else{
      $message = 'Las contraseñas no coinciden.';
    }
  }
  else{
    $message = 'Complete todos los Campos';
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style media="screen">
    .volver{
      padding: 20px;
      background: #901169;
      margin: auto;
      margin-top: 10px;
      text-align: center;
    }
    .volver a{
      color: #fff;
      font-family: sans-serif;
      text-decoration: none;
    }
    </style>
  </head>
  <body>


    <?php if(!empty($message)): ?>
      <p align="center"> <?= $message ?></p>
    <?php endif; ?>


<div class="contenedor">
        <h1 class="titulo">Registrate</h1>
        <hr class="border">
    <form action="pedidos.php" method="POST" class="formulario" name="login" >
          <div class="form-group">
                   <input type="text" name="nom_pe" class="usuario" placeholder="Nombre de Pedido">
            </div>

            <div class="form-group">
                   <input type="number" name="estado_pe" class="password" placeholder="Estado de Pedido">
             </div>

             <div class="form-group">
                   <input type="number" name="precio_pe" class="password" placeholder="Precio de Pedido">
              </div>



      <input type="submit" value="Submit" style="padding:15px;">

    </form>
    <div class="volver">
      <a href="/proyecto/index.php">VOLVER</a>
    </div>

  </body>
</html>
