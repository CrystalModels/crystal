
<?php

session_start();
require_once 'controller/recharge.php';
if($_SESSION['rol']=="SUPERADMIN"){
    require_once 'controller/recharge.php';
    require_once 'view/viewSessionSuperAdmin.php';
}
if($_SESSION['rol']=="ADMIN"){
    require_once 'controller/recharge.php';
    require_once 'view/viewSessionAdmin.php';
}
if($_SESSION['rol']=="MODEL"){
    require_once 'controller/recharge.php';
    require_once 'view/viewSessionModel.php';
}
if($_SESSION['rol']=="MONITOR"){
    require_once 'controller/recharge.php';
    require_once 'view/viewSessionMonitor.php';
}
if($_SESSION['rol']=="PHOTO"){
    require_once 'controller/recharge.php';
    require_once 'view/viewSessionPhotograf.php';
}
require_once 'controller/recharge.php';
require_once 'view/viewSessionSuperAdmin.php';

?>
