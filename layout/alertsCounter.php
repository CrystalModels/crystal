<script>		
 //setInterval(miFuncion, 10000);

 function miFuncion() {
   // Código de la función que se ejecutará cada 5 segundos
   getAlertsCounter();
   //openModalAlerts();
 
 }</script>

<?php

require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
	echo '
	<script>

  //const profileid = sessionStorage.getItem("profileId");
 // Función para obtener los datos del API
 async function getAlertsCounter() {
  const subdominioalertscounter = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getMyAlertsCounter/'.$headerslink.'/'.$_SESSION['profileId'].'`;

  
  ';?>
 
	<?php

  echo '
	fetch(subdominioalertscounter)
    
  .then(response => response.json())
  .then(data => {
   // const publicgroupsTableBody = document.querySelector("#alerts-table tbody");
    // Borramos los datos antiguos
    //publicgroupsTableBody.innerHTML = "";
    data.alertsCounter.forEach(alertCounter => {
     // const row = document.createElement("tr");
     sessionStorage.setItem("alertsCounter", ${alertCounter.alertsCounter});
   

      row.innerHTML = `
  

        
       
        
      `;

      
      

     // publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getSchUsers();
 


	</script>

';?>  



