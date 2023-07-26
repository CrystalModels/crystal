
<?php

session_start();
require_once 'controller/recharge.php';
unset($_SESSION['password']);
unset($_SESSION['username']);

if($_SESSION['rol']=="SUPERADMIN"){
   
    require_once 'view/viewSessionSuperAdmin.php';
}
if($_SESSION['rol']=="ADMIN"){
 
    require_once 'view/viewSessionAdmin.php';
}
if($_SESSION['rol']=="MODEL"){
    
    require_once 'view/viewSessionModel.php';
}
if($_SESSION['rol']=="MONITOR"){
    
    require_once 'view/viewSessionMonitor.php';
}
if($_SESSION['rol']=="PHOTO"){
   
    require_once 'view/viewSessionPhotograf.php';
}


?>
<?php 
 require_once 'layout/footer.php';
?>