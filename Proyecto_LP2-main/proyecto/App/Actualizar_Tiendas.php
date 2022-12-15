<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/proyecto/css/style.css">
  </head>
  <body>
    <div class="contenedor">

<?php
include_once "clases/clase_tienda.php";

$id_ti = $_POST["id_ti"];
$tienda = new tienda();
$tienda->setId_ti($id_ti);
$resultado = $tienda->mostrarTiendasPorId();

foreach ($resultado->fetchAll() as $item) {
    ?>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>" class="formulario">
      <div class="form-group">
        <input type="text" name="nom_ti" class="usuario" placeholder="Nombre Tienda" value="<?= $item["nom_ti"] ?>">
      </div>

        <div class="form-group">
             <input type="text" name="nom_prop_ti" class="password" placeholder="Nombre Propietario" value="<?= $item["nom_prop_ti"] ?>">
        </div>

        <div class="form-group">
              <input type="text" name="direc_ti" class="usuario" placeholder="Dirección" value="<?= $item["direc_ti"] ?>">
        </div>

        <div class="form-group">
              <input type="number" name="telf_ti" class="usuario" placeholder="Ingrese Teléfono" value="<?= $item["telf_ti"] ?>">
        </div>

        <div class="form-group">
              <input type="text" name="rubro_ti" class="usuario" placeholder="Rubro" value="<?= $item["rubro_ti"] ?>">
        </div>

        <input type="hidden" name="id_ti" value="<?= $id_ti ?>">
        <input type="submit" name="submit" value="actualizar" style="padding:15px; font-size: 15px;">
    </form>
    <?php
}

if (isset($_POST["submit"])) {
    $nom_ti = $_POST["nom_ti"];
    $nom_prop_ti = $_POST["nom_prop_ti"];
    $direc_ti = $_POST["direc_ti"];
    $telf_ti = $_POST["telf_ti"];
    $rubro_ti = $_POST["rubro_ti"];
    $id_ti = $_POST["id_ti"];

    $resultado = $tienda->ActualizarTiendas($id_ti, $nom_ti, $nom_prop_ti, $direc_ti, $telf_ti, $rubro_ti);


    if ($resultado != 0) {
        header("location: Administrar_Tiendas.php");
    } else {
        echo "Error: Informacion no actualizada";
    }

}
?>
</div>
</body>
</html>
