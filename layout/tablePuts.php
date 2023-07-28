

<h3>Seleccionar fecha inicial</h3>

<h3><input type="date" id="fechaInput" class="table-button"></h3>



<h3>Seleccionar fecha final</h3>

<h3><input type="date" id="fechaInput1" class="table-button"></h3>
<h3>Nombre o referencia de corte</h3>
<h3><input type="text" id="putName"></h3>

<h3><a href="#" onclick="createPut();" class="table-button">Crear corte</a></h3>

    

<script>

function createPut() {
  // Obtener el valor del campo de texto correspondiente al botón
  var fechaSeleccionada = document.getElementById("fechaInput").value;
    var fechaSeleccionada1 = document.getElementById("fechaInput1").value;
    var putname = document.getElementById("putName").value;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerCreatePut.php?roomId=' + encodeURIComponent(fechaSeleccionada) + '&profileId=' + encodeURIComponent(fechaSeleccionada1);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      const mensaje = sessionStorage.getItem("mensaje");
      showAlert(mensaje);
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
      console.log(fechaSeleccionada);
console.log(fechaSeleccionada1);
console.log(putname);
    });
}
</script>


<div class="table-container">







<table id="puts-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Room</th>
      <th>Comentario</th>
      <th>Estado</th>
      <th>Activo</th>
      <th>Actualizado</th>
      
    </tr>
  </thead>
            <tbody>

	<?php

require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
	echo '
	<script>
		
  //const my_profyle = sessionStorage.getItem("profile");
  const subputs = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllRooms/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getPuts() {';?>
 
	<?php

  echo '
	fetch(subputs)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#puts-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.puts.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="room.php?roomId=${student.roomId}" target="_blank">Abrir</a>
      </td>
  
      <td>${student.name}</td>
        <td>${student.comments}</td>
        <td>${student.status}</td>
        <td>${student.isActive}</td>
        <td>${student.updatedAt}</td>
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPuts();
 


	</script>

';?>  



<div id="publicgroups-container"></div>




<?php

require_once 'env/domain.php';
$sub_domaincon = new model_dom;
$sub_domain = $sub_domaincon->dom();
$headerslink = $_SESSION['ranCode'] . " " . $_SESSION['key'];
echo '
<script>
  // Función para obtener los datos del API
  async function getSchUsersx() {
   const subdominioschx = "' . $sub_domain . '/crystalGateway/apiIntegrations/v1/getMyAlerts/' . $headerslink . '/'.$_SESSION['profileId'].';
  
    fetch(subdominioschx)
      .then(response => response.json())
      .then(data => {
        const alertas = data.alerts;
        const recordatorios = data.alerts;
        
        // Actualizar los enlaces del menú con los datos del API
        const alertasLink = document.querySelector("#alertas-link");
        const recordatoriosLink = document.querySelector("#recordatorios-link");
        
        alertasLink.textContent = alertas;
        recordatoriosLink.textContent = recordatorios;
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
  getSchUsersx();
</script>
';?>







</tbody>
          </table>
       
</div>

