<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crystal Models</title>
  <link rel="icon" type="image/x-icon" href="public/logo.png">
  
  <style>
  .form-container {
  max-height: 800px; /* Establecer la altura máxima deseada */
  overflow-y: auto; /* Agregar desplazamiento vertical */
  padding: 20px;
  margin: auto;
}


@media screen and (max-width: 768px) {
  .form-container {
    max-width: 100%; /* Hacer el formulario ocupar el ancho completo en pantallas pequeñas */
  }
}

  </style>


</head>
<body>


<h2><img src="public/logo.png" alt="Crystal Models"></h2>
        

    </div>
    

  <div class="theme-toggle">
        <input type="checkbox" id="theme-toggle-checkbox">
        <label for="theme-toggle-checkbox" class="theme-toggle-label"></label>
      </div>
  <script src="scripts/scriptDarkMode.js">


  </script>

   
<body>
    
</body>
</html>


</html>
<!DOCTYPE html>
<html>
<head>
 
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
  

  <script>
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      const data = google.visualization.arrayToDataTable([
        ['Categoría', 'Valor'],
        ['Categoría 1', 30],
        ['Categoría 2', 40],
        ['Categoría 3', 50]
      ]);

      const options = {
        title: 'Mi Diagrama de Barras',
        legend: { position: 'none' },
        bars: 'vertical', // Orientación de las barras (vertical u horizontal)
        hAxis: { title: 'Categoría', minValue: 0 },
        vAxis: { title: 'Valor' }
      };

      const chart = new google.visualization.PieChart(document.getElementById('barchart'));
      chart.draw(data, options);
    }
  </script>

<script>
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart1);

    function drawChart1() {
      const data = google.visualization.arrayToDataTable([
        ['Categoría', 'Valor'],
        ['Categoría 1', 30],
        ['Categoría 2', 40]
      ]);

      const options = {
        title: 'Mi Diagrama de Barras',
        legend: { position: 'none' },
        bars: 'vertical', // Orientación de las barras (vertical u horizontal)
        hAxis: { title: 'Categoría', minValue: 0 },
        vAxis: { title: 'Valor' }
      };

      const chart = new google.visualization.ColumnChart(document.getElementById('barchart1'));
      chart.draw(data, options);
    }
  </script>



<footer>
        <div>
            <p>Versión del software: 1.0.0</p>
            <p>&copy; 2023 Todos los derechos reservados</p>
            <p>Contacto de soporte: soporte@example.com</p>
        </div>
    </footer>
</body>
</html>


