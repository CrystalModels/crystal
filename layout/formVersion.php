


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="public/logo.png">
  <title>Versiones</title>
  <link rel="stylesheet" href="style/styleSession.css">


</head>
<body>
    

 
 
    <form method="post" action="controller/controllerChangePassSession.php">

   

    <div class="form-group">
    <label for="nkeyword">## [1.0.5-Beta] - 2023-07-26
- Visualizador de versiones.</label>
    </div> 
    <div class="form-group">
    <label for="nkeyword">## [1.0.4-Beta] - 2023-07-26
- Homologación de footer.</label>
    </div> 
    <div class="form-group">
    <label for="nkeyword">## [1.0.3-Beta] - 2023-07-25
- Homologación de interfaz, textos,botones.</label>
    </div> 
    <div class="form-group">
    <label for="nkeyword">## [1.0.2-Beta] - 2023-07-25
- Homologación de modales, textos.</label>
    </div> 
    <div class="form-group">
    <label for="nkeyword">## [1.0.1-Beta] - 2023-07-25
- Homologación de layouts, textos.</label>
    </div> 

    <div class="form-group">
    <label for="nkeyword">## [1.0.0-Beta] - 2023-07-24
- SISTEMA BASE</label>
    </div> 


       </form>

 









    <h2>CORE</h2>
    <table id="tabla-versions">
        <thead>
            <tr>
                <th>Versión</th>
                <th>Contenido</th>
            </tr>
        </thead>
        <tbody>
            <!-- La tabla se llenará dinámicamente aquí -->
        </tbody>
    </table>
    <?php

require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
	echo '
    <script>
        // URL del API
        const apiUrl = `'.$sub_domain.'/crystalGateway/apiBroker/v1/getVersionListCoreApiUsers/'.$headerslink.'`;

        // Obtener la referencia a la tabla
        const tablaVersions = document.getElementById("tabla-versions").getElementsByTagName("tbody")[0];

        // Función para llenar la tabla con los datos del API
        async function llenarTabla() {
            try {
                // Realizar la solicitud al API
                const response = await fetch(apiUrl);
                const data = await response.json();

                // Iterar sobre los datos y llenar la tabla
                for (const entry of data["crystalCore-apiUsers"]) {
                    for (const version in entry) {
                        const fecha = entry[version];

                        const row = tablaVersions.insertRow();
                        const cellVersion = row.insertCell();
                        const cellFecha = row.insertCell();

                        cellVersion.textContent = version;
                        cellFecha.textContent = fecha;
                    }
                }
            } catch (error) {
                console.error("Error al obtener los datos del API:", error);
            }
        }

        // Llamar a la función para llenar la tabla
        llenarTabla();
    </script>';?>
</body>
</html>
