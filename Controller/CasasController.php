<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Model/CarritoModel.php';

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }   
    
?>