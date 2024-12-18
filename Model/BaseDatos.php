<?php

    function AbrirBD()
    {
        return mysqli_connect("127.0.0.1:3307", "root", "", "casoestudiomn");
    }

    function CerrarBD($enlace)
    {
        mysqli_close($enlace);
    }

?>