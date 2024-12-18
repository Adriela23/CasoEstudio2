<?php
require_once 'BaseDatos.php';

    function consultarCasas($minPrecio, $maxPrecio)
    {
        try{
            $enlace = AbrirBD();

            $sentencia = "CALL ConsultarCasas($minPrecio, $maxPrecio)";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch (Exception $ex)
        {
            return null;
        }
    }

    function casasDisponibles() {
        try{
            $enlace = AbrirBD();

            $sentencia = "CALL CasasDisponibles()";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch (Exception $ex)
        {
            return null;
        }
    }

    public function alquilarCasa() {
        try{
            $enlace = AbrirBD();

            $sentencia = "CALL AlquilarCasa()";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch (Exception $ex)
        {
            return null;
        }
    }


?>

