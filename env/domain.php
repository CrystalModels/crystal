<?php

class model_dom {

function dom() {

     //opcion de subdominio

    require_once 'option.php';
    $sub_domaincon = new model_option();
    $sub_domain = $sub_domaincon->dom();
    $option=$sub_domain;
    if($option==1){//localhost
        $sub_domain="http://localhost";
        return $sub_domain;

    }
    if($option==2){//desarrollo
 $sub_domain="https://dev-crystalGateway.crystalmodels.online"; // o dirección IP del servidor de la base de datos remota
 return $sub_domain;

    }
    if($option==3){//pruebas-staging
        $sub_domain="https://staging-crystalGateway.crystalmodels.online";
        return $sub_domain;
    }
    if($option==4){//ptoducción

        $sub_domain="https://crystalGateway.crystalmodels.online";
        return $sub_domain;
    }
   //$sub_domain="https://dev-lugmacore.lugma.tech"; // o dirección IP del servidor de la base de datos remota
   
}
}

?>