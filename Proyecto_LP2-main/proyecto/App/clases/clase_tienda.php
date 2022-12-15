<?php
include_once "conexion/ConexionBD.php";

class tienda{
    private $id_ti;
    private $nom_ti;
    private $nom_prop_ti;
    private $direc_ti;
    private $telf_ti;
    private $rubro_ti;

    public function getId_ti()
    {
        return $this->id_ti;
    }

    public function setId_ti($id_ti): void
    {
        $this->id_ti = $id_ti;
    }

    public function mostrarTiendasPorId()
    {
        try {
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT * FROM tienda WHERE id_ti=$this->id_ti";

            $resultado = $conn->query($sql);
            $conexionDB->cerrarConexion();
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function MostrarTiendas()
    {
      try {
          $conexionDB = new ConexionBD();
          $conn = $conexionDB->abrirConexion();
          $sql = "SELECT t.id_ti, t.nom_ti, t.nom_prop_ti, t.direc_ti, t.telf_ti, t.rubro_ti
                  FROM tienda as t";

          $resultado = $conn->query($sql);
          $conexionDB->cerrarConexion();
          return $resultado;
      } catch (Exception $e) {
          return $e->getMessage();
      }
    }

    public function ActualizarTiendas(int $id_ti, String $nom_ti, String $nom_prop_ti, String $direc_ti, int $telf_ti, String $rubro_ti): bool
    {
      try {
          $conexionDB = new ConexionBD();
          $conn = $conexionDB->abrirConexion();

          $sql = "UPDATE tienda
                  SET nom_ti='$nom_ti', nom_prop_ti='$nom_prop_ti', direc_ti='$direc_ti', telf_ti='$telf_ti', rubro_ti='$rubro_ti'
                  WHERE id_ti=$id_ti";
          $filasAfectadas = $conn->exec($sql);

          if($filasAfectadas != 0){
              $resultado = true;
          }else{
              $resultado = false;
          }

          return $resultado;
      } catch (Exception $e) {
          return $e->getMessage();
      }
    }

    public function EliminarTiendas()
    {
      try {
          $conexionDB = new ConexionBD();
          $conn = $conexionDB->abrirConexion();

          $sql = "DELETE FROM tienda WHERE id_ti=$this->id_ti";
          $filasAfectadas = $conn->exec($sql);

          if($filasAfectadas != 0){
              $resultado = true;
          }else{
              $resultado = false;
          }

          return $resultado;
      } catch (Exception $e) {
          return $e->getMessage();
      }
    }
 }
