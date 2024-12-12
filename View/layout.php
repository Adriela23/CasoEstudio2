<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Controller/LoginController.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Controller/CarritoController.php';

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

?>