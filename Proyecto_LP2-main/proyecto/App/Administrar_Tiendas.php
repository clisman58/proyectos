<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        background: #181D35;
        font-family: sans-serif;
      }
      .tabla{
        background: #511058;
        color: #fff;
        margin: auto;
      }
      .tabla_cuadro{
        padding: 20px;
      }
      .tabla_celda{
        padding: 10px;
        background: #901169;
      }
      .volver{
        padding: 20px;
        width: 80px;
        background: #901169;
        margin: auto;
        margin-top: 10px;
        text-align: center;
      }
      a{
        color: #fff;
        font-family: sans-serif;
        text-decoration: none;
      }
      h2{
        color: #fff;
        font-family: sans-serif;
      }
    </style>
  </head>
  <body>
  </body>
</html>
<?php
include_once "clases/clase_tienda.php";

$tienda = new tienda();
$resultado = $tienda->MostrarTiendas();

    echo "<h2>numero de resultados: ".$resultado->rowCount()."</h2>";
    echo "<table class='tabla'>
            <tr class='tabla_prin'>
                <th class='tabla_cuadro'>#</th>
                <th class='tabla_cuadro'>Nombre Tienda</th>
                <th class='tabla_cuadro'>Nombre Propietario</th>
                <th class='tabla_cuadro'>Dirección</th>
                <th class='tabla_cuadro'>Teléfono</th>
                <th class='tabla_cuadro'>Rubro</th>
                <th class='tabla_cuadro'>&nbsp;</th>
                <th class='tabla_cuadro'>&nbsp;</th>
                <th class='tabla_cuadro'>&nbsp;</th>
            </tr>";
    foreach ($resultado->fetchAll() as $k => $item) {
        echo "<tr>
                <td class='tabla_celda'>" . ($k + 1) . "</td>
                <td class='tabla_celda'>" . $item["nom_ti"] . "</td>
                <td class='tabla_celda'>" . $item["nom_prop_ti"] . "</td>
                <td class='tabla_celda'>" . $item["direc_ti"] . "</td>
                <td class='tabla_celda'>" . $item["telf_ti"] . "</td>
                <td class='tabla_celda'>" . $item["rubro_ti"] . "</td>
                <td class='tabla_celda'><form method='post' action='clases/Tiendas_Añadir.php'>
                        <input type='submit' name='submit' value='Añadir'>
                    </form>
                </td>
                <td class='tabla_celda'><form method='post' action='Eliminar_Tiendas.php'>
                        <input type='hidden' name='id_ti' value='".$item["id_ti"]."'>
                        <input type='submit' name='submit' value='Eliminar'>
                    </form>
                </td>
                <td class='tabla_celda'><form method='post' action='Actualizar_Tiendas.php'>
                        <input type='hidden' name='id_ti' value='".$item["id_ti"]."'>
                        <input type='submit' name='submit2' value='Actualizar'>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
  ?>
  <div class="volver">
    <a href="/proyecto/index.php">VOLVER</a>
  </div>
