<?php

class model_code {

function domcode() {

     //opcion de subdominio

    require_once 'option.php';
    $sub_domaincon = new model_option();
    $sub_domain = $sub_domaincon->dom();
    $option=$sub_domain;
    if($option==1){//localhost
        $code="c66e63ca-fa63-42c8-95e7-eab4db5d41d8";
        return $code;

    }
    if($option==2){//desarrollo
        $code="c66e63ca-fa63-42c8-95e7-eab4db5d41d8";
        return $code;

    }
    if($option==3){//pruebas-staging
        $code="e00945de-1c0d-455e-a5eb-08bdec622147";
        return $code;
    }
    if($option==4){//ptoducción

        $code="1fd72372-c8a5-4eac-8f6d-58564c80fa15";
        return $code;
    }
   //$sub_domain="https://dev-lugmacore.lugma.tech"; // o dirección IP del servidor de la base de datos remota
   
}
}

?>