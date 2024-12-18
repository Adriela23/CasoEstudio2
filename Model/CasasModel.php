<?php
require_once 'BaseDatos.php';

    function consultarPrecioCasasModel($minPrecio, $maxPrecio)
    {
        try{
            $enlace = AbrirBD();

            $sentencia = "CALL ConsultarPrecioCasas($minPrecio, $maxPrecio)";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch (Exception $ex)
        {
            return null;
        }
    }

    function casasDisponiblesModel() {
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

    function AlquilarCasaModel($consecutivo)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL AlquilarCasa('$consecutivo')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return false;
        }
    }
?>

