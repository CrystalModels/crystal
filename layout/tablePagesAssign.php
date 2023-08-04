


<div class="table-container">
    
<table id="pagesassign-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Página</th>
      <th>Url</th>
      
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
  //const subdominiopages = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPages/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getPagesAssign(profileid) {
  var pid=profileid;
  sessionStorage.setItem("assignPageId", pid);

	
	fetch(subdominiopages)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassign-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.pages.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="asignarPagina(this,&quot;${student.pageId}&quot;,&quot;${pid}&quot;)" class="table-button">Asignar página</button></td>
    
  
      <td>${student.name}</td>
        <td>${student.urlPage}</td>
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPages();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>
<div class="notification" id="notification">
        <p id="notificationText"></p>
    </div>


<script>





function obtenerVariablesPHP() {
  fetch('layout/getPHPVariables.php')
    .then(response => response.json())
    .then(data => {
      // Aquí obtienes los nuevos valores de las variables PHP en el objeto "data"
      // Puedes acceder a los valores como data.mensaje y data.error
      // Por ejemplo:
      var nuevoMensaje = data.mensaje;
      var nuevoError = data.error;

      sessionStorage.setItem("mensaje", nuevoMensaje);        
sessionStorage.setItem("error", nuevoError);
      // Ahora puedes usar los nuevos valores en tu función o realizar cualquier otra acción
      console.log('Nuevo mensaje:', nuevoMensaje);
      console.log('Nuevo error:', nuevoError);

      return {
    valor1: nuevoMensaje,
    valor2: nuevoError,
  };
    })
    .catch(error => {
      console.error('Error al obtener las variables PHP:', error);
    });
}




async function asignarPagina(button, pageid, profileid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerAssignPage.php?pageId=' + encodeURIComponent(pageid) + '&profileId=' + encodeURIComponent(profileid);
 
  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      const { valor1, valor2 } = obtenerVariablesPHP();
      
      
      
      var res = sessionStorage.getItem(mensaje);
      var er1=sessionStorage.getItem(error);
      if(er1==="true"){
        
        var re="success";
        
      }
      if(er1==="false"){
      
        var re="error";
        
      }

      mostrarNotificacion(res, re);
     
      console.log(valor1); // Imprimirá 10
  console.log(valor2); // Imprimirá 'Hola'
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}








// Función para mostrar la notificación
function mostrarNotificacion(mensaje, tipo) {
    const notificacion = document.getElementById('notification');
    const notificacionText = document.getElementById('notificationText');

    notificacionText.textContent = mensaje;
    notificacion.classList.remove('error'); // Remover clase de error (en caso de que esté presente)

    if (tipo === 'error') {
        notificacion.classList.add('error');
    }

    notificacion.style.display = 'block';

    // Desaparecer la notificación después de 3 segundos
    setTimeout(() => {
        notificacion.style.display = 'none';
    }, 3000);
}












</script>

<style>
		/* Estilos para la notificación */
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #4CAF50;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    display: none;
}
.notification.error {
    background-color: #f44336;
}

	</style>
  

