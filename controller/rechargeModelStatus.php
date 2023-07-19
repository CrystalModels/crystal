


<?php
session_start();

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();
$_SESSION['gatewayDomain']=$sub_domain;

$headerslink = $_SESSION['ranCode'] . " " . $_SESSION['key'];
//$url = $sub_domain . "/crystalGateway/apiIntegrations/v1/getModelLog/" . $headerslink . "/" . $_SESSION['profileId'];

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "".$sub_domain . "/crystalGateway/apiIntegrations/v1/getModelLog/" . $headerslink . "/" . $_SESSION['profileId'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  
));
$response = curl_exec($curl);
$err = curl_error($curl);

$_SESSION['modelLog']=$response;
curl_close($curl);

$data = json_decode($_SESSION['modelLog']);
  foreach ($data->models as $character) {
    
    //echo "<h3 align='center'>Bienveni@:</h3><h4 align='center'>" . $character->name." ";
    $_SESSION['isBreak'] = $model->isBreak;
    $_SESSION['isLunch'] = $model->isLunch;
    $_SESSION['isMeet'] = $model->isMeet;
    $_SESSION['isIssue'] = $model->isIssue;
    $_SESSION['isConnected'] = $model->isConnected;
    $_SESSION['isBroom'] = $model->isBroom;
    
    
  }


  
echo $_SESSION['modelLog'];
//echo json_encode($_SESSION['userInfo']);
//echo $_SESSION['sessionStatus'];
?>

