<?php
include_once "clases/clase_tienda.php";

if (isset($_POST["submit"])) {
    $id_ti = $_POST["id_ti"];

    $tienda = new tienda();
    $tienda->setId_ti($id_ti);
    $resultado = $tienda->EliminarTiendas();

    if ($resultado != 0) {
        header("location: Administrar_Tiendas.php");
    } else {
        echo "Error: Informacion no Eliminada";
    }
}
