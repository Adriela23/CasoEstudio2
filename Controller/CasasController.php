<?php
require_once 'Model/CasasModel.php';

class CasasController {
    public function consultar() {
        $model = new CasasModel();
        $casas = $model->obtenerCasas();
        require 'View/consultarCasa.php';
    }

    public function alquilar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idCasa = $_POST['IdCasa'];
            $usuario = $_POST['UsuarioAlquiler'];
            $fecha = date('Y-m-d H:i:s');

            if (!empty($usuario)) {
                $model = new CasasModel();
                $model->alquilarCasa($idCasa, $usuario, $fecha);
                header('Location: index.php?action=consultar');
                exit;
            }
        }
        $model = new CasasModel();
        $casasDisponibles = $model->obtenerCasasDisponibles();
        require 'View/alquilerCasa.php';
    }
}
?>
