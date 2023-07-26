


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="public/logo.png">
  <title>Versiones</title>
 


  <style>
   body {
    margin: 0;
    padding: 0;
}

/* Agregar espacio inferior al contenido principal */
#main-content {
    padding-bottom: 100px; /* Ajusta este valor para dar margen inferior al contenido */
}

h1 {
    text-align: center;
}

table {
    margin: 0 auto;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
    padding: 8px;
}

tfoot {
    display: table-footer-group;
    font-weight: bold;
}

tfoot th {
    text-align: right;
}

footer {
    background-color: #f0f0f0;
    padding: 20px;
    text-align: center;
    font-size: 14px;
    color: #555;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
}

</style>
</head>
<body>
<div id="main-content">
<div class="form-group">
 
 
 

    <div class="form-group">
    <h2>FRONT</h2>
    <table id="tabla-versionsF">
        <thead>
            <tr>
                <th>---Versión---</th>
                <th>---Contenido---</th>
            </tr>
        </thead>
        <tbody>
            <!-- La tabla se llenará dinámicamente aquí -->
        </tbody>
    </table>

    <script>
        const data = {
          "crystal-front": [
            {"1.0.6.2-Beta": "2023-07-26-Visualizador de versiones sistema general fix de front versionamiento."},
            {"1.0.6.1-Beta": "2023-07-26-Visualizador de versiones sistema general fix de front."},
            {"1.0.6-Beta": "2023-07-26-Visualizador de versiones sistema general."},
            {"1.0.5-Beta": "2023-07-26-Visualizador de versiones."},
            {"1.0.4-Beta": "2023-07-26-Homologación de footer."},
            {"1.0.3-Beta": "2023-07-25-Homologación de interfaz, textos,botones."},
            {"1.0.2-Beta": "2023-07-25-Homologación de modales, textos."},
            {"1.0.1-Beta": "2023-07-25-Homologación de layouts, textos."},
            
            {"1.0.0": "2023-07-24- sistema base"}
          ]
        };

        const tablaVersionsF = document.getElementById('tabla-versionsF').getElementsByTagName('tbody')[0];

        // Iterar sobre el JSON y llenar la tabla
        for (const entry of data["crystal-front"]) {
            for (const version in entry) {
                const fecha = entry[version];

                const row = tablaVersionsF.insertRow();
                const cellVersion = row.insertCell();
                const cellFecha = row.insertCell();

                cellVersion.textContent = version;
                cellFecha.textContent = fecha;
            }
        }
    </script>
    
    </div>




       <div class="form-group">
    <h2>CORE</h2>
    <table id="tabla-versions">
        <thead>
            <tr>
                <th>---Versión---</th>
                <th>---Contenido---</th>
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
    </div>





    

    <div class="form-group">
    <h2>INTEGRATIONS</h2>
    <table id="tabla-versions1">
        <thead>
            <tr>
                <th>---Versión---</th>
                <th>---Contenido---</th>
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
        const apiUrl1 = `'.$sub_domain.'/crystalGateway/apiBroker/v1/getVersionListIntControl/'.$headerslink.'`;

        // Obtener la referencia a la tabla
        const tablaVersions1 = document.getElementById("tabla-versions1").getElementsByTagName("tbody")[0];

        // Función para llenar la tabla con los datos del API
        async function llenarTabla1() {
            try {
                // Realizar la solicitud al API
                const response = await fetch(apiUrl1);
                const data = await response.json();

                // Iterar sobre los datos y llenar la tabla
                for (const entry of data["crystalIntegrations-apiControlTower"]) {
                    for (const version in entry) {
                        const fecha = entry[version];

                        const row = tablaVersions1.insertRow();
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
        llenarTabla1();
    </script>';?>
    </div>

    

    <div class="form-group">
    <h2>BROKER</h2>
    <table id="tabla-versions2">
        <thead>
            <tr>
                <th>---Versión---</th>
                <th>---Contenido---</th>
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
        const apiUrl2 = `'.$sub_domain.'/crystalGateway/apiBroker/v1/getVersionListBroker/'.$headerslink.'`;

        // Obtener la referencia a la tabla
        const tablaVersions2 = document.getElementById("tabla-versions2").getElementsByTagName("tbody")[0];

        // Función para llenar la tabla con los datos del API
        async function llenarTabla2() {
            try {
                // Realizar la solicitud al API
                const response = await fetch(apiUrl2);
                const data = await response.json();

                // Iterar sobre los datos y llenar la tabla
                for (const entry of data["crystalBroker-apiJoin"]) {
                    for (const version in entry) {
                        const fecha = entry[version];

                        const row = tablaVersions2.insertRow();
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
        llenarTabla2();
    </script>';?>
    </div>

    
    <div class="form-group">
    <h2>GATEWAY INTEGRATIONS</h2>
    <table id="tabla-versions3">
        <thead>
            <tr>
                <th>---Versión---</th>
                <th>---Contenido---</th>
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
        const apiUrl3 = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getVersionListThis/'.$headerslink.'`;

        // Obtener la referencia a la tabla
        const tablaVersions3 = document.getElementById("tabla-versions3").getElementsByTagName("tbody")[0];

        // Función para llenar la tabla con los datos del API
        async function llenarTabla3() {
            try {
                // Realizar la solicitud al API
                const response = await fetch(apiUrl3);
                const data = await response.json();

                // Iterar sobre los datos y llenar la tabla
                for (const entry of data["crystalGateway-apiIntegrations"]) {
                    for (const version in entry) {
                        const fecha = entry[version];

                        const row = tablaVersions3.insertRow();
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
        llenarTabla3();
    </script>';?>
    </div>






    
    <div class="form-group">
    <h2>GATEWAY BROKER</h2>
    <table id="tabla-versions4">
        <thead>
            <tr>
                <th>---Versión---</th>
                <th>---Contenido---</th>
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
        const apiUrl4 = `'.$sub_domain.'/crystalGateway/apiBroker/v1/getVersionListThis/'.$headerslink.'`;

        // Obtener la referencia a la tabla
        const tablaVersions4 = document.getElementById("tabla-versions4").getElementsByTagName("tbody")[0];

        // Función para llenar la tabla con los datos del API
        async function llenarTabla4() {
            try {
                // Realizar la solicitud al API
                const response = await fetch(apiUrl4);
                const data = await response.json();

                // Iterar sobre los datos y llenar la tabla
                for (const entry of data["crystalGateway-apiBroker"]) {
                    for (const version in entry) {
                        const fecha = entry[version];

                        const row = tablaVersions4.insertRow();
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
        llenarTabla4();
    </script>';?>
    </div>




    
    <div class="form-group">
    <h2>GATEWAY CORE</h2>
    <table id="tabla-versions5">
        <thead>
            <tr>
                <th>---Versión---</th>
                <th>---Contenido---</th>
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
        const apiUrl5 = `'.$sub_domain.'/crystalGateway/apiCore/v1/getVersionListThis/'.$headerslink.'`;

        // Obtener la referencia a la tabla
        const tablaVersions5 = document.getElementById("tabla-versions5").getElementsByTagName("tbody")[0];

        // Función para llenar la tabla con los datos del API
        async function llenarTabla5() {
            try {
                // Realizar la solicitud al API
                const response = await fetch(apiUrl5);
                const data = await response.json();

                // Iterar sobre los datos y llenar la tabla
                for (const entry of data["crystalGateway-apiCore"]) {
                    for (const version in entry) {
                        const fecha = entry[version];

                        const row = tablaVersions5.insertRow();
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
        llenarTabla5();
    </script>';?>
    </div>
    
    <div>
      </div>
</body>
</html>
