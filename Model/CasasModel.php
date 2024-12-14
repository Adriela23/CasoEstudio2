<?php
require_once 'db.php';

class CasasModel {
    public function obtenerCasas() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT *, IF(UsuarioAlquiler IS NULL, 'Disponible', 'Reservada') AS Estado FROM CasasSistema WHERE PrecioCasa BETWEEN 115000 AND 180000 ORDER BY Estado ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerCasasDisponibles() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT IdCasa, DescripcionCasa, PrecioCasa FROM CasasSistema WHERE UsuarioAlquiler IS NULL");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function alquilarCasa($idCasa, $usuario, $fecha) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE CasasSistema SET UsuarioAlquiler = ?, FechaAlquiler = ? WHERE IdCasa = ?");
        $stmt->execute([$usuario, $fecha, $idCasa]);
    }
}
?>
