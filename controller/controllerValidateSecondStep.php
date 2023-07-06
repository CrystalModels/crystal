
<?php
session_start();

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "".$sub_domain."/crystalGateway/apiCore/v1/getProfileInfoLog/".$_SESSION['userName'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json', // Tipo de contenido JSON
   
    'x-api-Key: '.$_SESSION['key']
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

$_SESSION['userInfo']=$response;
curl_close($curl);

$data = json_decode($_SESSION['userInfo']);
  foreach ($data->users as $character) {
    
    //echo "<h3 align='center'>Bienveni@:</h3><h4 align='center'>" . $character->name." ";
    $_SESSION['userId'] =$character->userId;
    $_SESSION['personalMail'] =$character->personalMail;
    $_SESSION['companyMail'] =$character->companyMail;
    $_SESSION['internalMail'] =$character->internalMail;
    $_SESSION['userName'] =$character->userName;
    $_SESSION['sessionCounter'] =$character->sessionCounter;
    $_SESSION['profileId'] =$character->profileId;
    $_SESSION['name'] =$character->name;
    $_SESSION['lastName'] =$character->lastName;
    $_SESSION['imageUrl'] =$character->imageUrl;
    $_SESSION['totalHours'] =$character->totalHours;
    $_SESSION['rol'] =$character->rol;
    $_SESSION['ranCode'] =$character->ranCode;
    
    
  }

echo $data;
echo json_encode($_SESSION['userName'])
//header ('Location: ../session.php');

?>

