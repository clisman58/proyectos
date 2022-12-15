<?php
include_once "clases/clase_cliente.php";

if (isset($_POST["submit"])) {
    $id_cli = $_POST["id_cli"];

    $cliente = new cliente();
    $cliente->setId_cli($id_cli);
    $resultado = $cliente->EliminarClientes();

    if ($resultado != 0) {
        header("location: Administrar_Clientes.php");
    } else {
        echo "Error: Informacion no Eliminada";
    }
}
