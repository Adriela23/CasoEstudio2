<?php
require_once 'model/CasasModel.php';

    if(session_status() == PHP_SESSION_NONE) {
    session_start();
    }

    function casasDisponibles()
    {
        return casasDisponiblesModel();
    }

    if(isset($_POST["btnAlquilarCasa"]))
    {
        $consecutivo = $_POST["txtConsecutivo"];

        $resultado = AlquilarCasaModel($consecutivo);
        
        if($resultado == true)
        {
            header('location: ../../View/alquilarCasa.php');
        }
        else
        {
            $_POST["txtMensaje"] = "No fue posible alquilar esta casa, intente de nuevo";
        }
    }

    function consultarPrecioCasas(){
        $minPrecio = $_GET['minPrecio'] ?? 115000;
        $maxPrecio = $_GET['maxPrecio'] ?? 180000;

        $casas = consultarPrecioCasasModel($minPrecio, $maxPrecio);

        if ($casas) {
            require 'View/consultarCasa.php';
        } else {
            $_POST["txtMensaje"] = "Error al consultar las casas";
        }
    }
?>

