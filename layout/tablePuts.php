

<h3>Seleccionar fecha inicial</h3>

<h3><input type="date" id="fechaInput"></h3>

<h3>Seleccionar fecha final</h3>

<h3><input type="date" id="fechaInput1"></h3>
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
  var url = 'controller/controllerCreatePut.php?fechaInput=' + encodeURIComponent(fechaSeleccionada) + '&fechaInput1=' + encodeURIComponent(fechaSeleccionada1)+ '&putName=' + encodeURIComponent(putname);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      const mensaje = sessionStorage.getItem("mensaje");
      //showAlert(mensaje);
      getPuts();
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    
    });
}
</script>


<h2>Cortes creados inactivos</h2>

<div class="table-container">





<table id="puts-table" class="table">
 
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Corte</th>
      <th>Inicio</th>
      <th>Final</th>
      <th>Activo</th>
      <th>Estado</th>
      
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
  const subputs = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getPutsCreatedNotStart/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getPuts() {';?>
 
	<?php

  echo '

  var pid="del";
  var pid1="open";
	fetch(subputs)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#puts-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.puts.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="corteStatusPut(this,&quot;${student.cutId}&quot;,&quot;${pid1}&quot;)" class="table-button">Iniciar corte</button>
      <button onclick="corteStatusPut(this,&quot;${student.cutId}&quot;,&quot;${pid}&quot;)" class="table-button">Eliminar corte</button></td>
    
  
      <td>${student.cutName}</td>
        <td>${student.startDate}</td>
        <td>${student.endDate}</td>
        <td>${student.isActive}</td>
        <td>${student.status}</td>
       

        
       
        
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






</tbody>
          </table>
       
</div>



<script>

function corteStatusPut(button, putId,value) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerPuttingStatus.php?putId=' + encodeURIComponent(putId) + '&value=' + encodeURIComponent(value);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      const mensaje = sessionStorage.getItem("mensaje");
      showAlert(mensaje);
      getPuts();
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
</script>
