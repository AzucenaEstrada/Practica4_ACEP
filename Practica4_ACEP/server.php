<?php
    requier_once "lib/nusoap.php";
    function getFrutas($datos){
        if ($datos == "Frutas"){
            return join ("," array(
                "Mango",
                "Durazno",
                "Naranja",
                "Mandarina"));
        }
        else {
            return "No hay Frutas";
        }
    }
    $server = new soap_server();
    $server->register("getFrutas");
    if (!isset ($HTTP_RAW_POST_DATA) ) $HTTP_RAW_POST_DATA =file_get_contents ('php://input');
        $server->service($HTTP_RAW_POST_DATA);
?>    