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
        $code="c66e63ca-fa63-42c8-95e7-eab4db5d41d8";
        return $code;
    }
    if($option==4){//ptoducción

        $code="c66e63ca-fa63-42c8-95e7-eab4db5d41d8";
        return $code;
    }
   //$sub_domain="https://dev-lugmacore.lugma.tech"; // o dirección IP del servidor de la base de datos remota
   
}
}

?>