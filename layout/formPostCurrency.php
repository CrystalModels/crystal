



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style/styleSession.css">


</head>
<body>
    

    
    <form method="post" action="controller/controllerPostCurrency.php">
      <div class="form-group">
        <label for="name">Nombre de moneda</label>
        <input type="text" id="name" name="name" placeholder="Ingrese nombre de la pagina" required>
      </div>
      

      <?php
require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
echo '<script>const subdominioCurrencyList = "'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getCurrencyList/'.$headerslink.'";</script>';
?>
 <div class="form-group">
 <label for="currency">Abreviación</label>
<select id="repos-select2" class="form-group" name="currency"></select>

<?php
echo '
	<script>

 // Función para obtener los datos del API
 async function getAllCurrencyList() {

  const reposSelect = document.getElementById("repos-select2");

	fetch(subdominioCurrencyList)
  .then(response => response.json())
  .then(data => {
    data.currency.forEach(sub => {
      const option = document.createElement("option");
      option.value = sub.currency;
      option.text = sub.currency+" "+sub.name;
      reposSelect.add(option);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });

 }

 // Llamar a la función para obtener los datos del API
 getAllCurrencyList();

	</script>
';

?>

</div>


      <div class="form-group">
        <label for="vchange">Valor de cambio</label>
        <input type="text" id="vchange" name="vchange" placeholder="Ingrese el valor de cambio" required>
      </div>
      
 
 <div class="form-group">
 <label for="comparative">Comparativa de Cambio</label>
<select id="repos-select3" class="form-group" name="comparative"></select>

<?php
echo '
	<script>

 // Función para obtener los datos del API
 async function getAllCurrencyList1() {

  const reposSelect = document.getElementById("repos-select3");

	fetch(subdominioCurrencyList)
  .then(response => response.json())
  .then(data => {
    data.currency.forEach(sub => {
      const option = document.createElement("option");
      option.value = sub.currency;
      option.text = sub.name;
      reposSelect.add(option);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });

 }

 // Llamar a la función para obtener los datos del API
 getAllCurrencyList1();

	</script>
';

?>



</div>


 <div class="form-group">
 <label for="symbol">Simbolo de moneda</label>
<select id="repos-select4" class="form-group" name="symbol"></select>

<?php
echo '
	<script>

 // Función para obtener los datos del API
 async function getAllCurrencyList2() {

  const reposSelect = document.getElementById("repos-select4");

	fetch(subdominioCurrencyList)
  .then(response => response.json())
  .then(data => {
    data.currency.forEach(sub => {
      const option = document.createElement("option");
      option.value = sub.symbol;
      option.text = sub.symbol+" "+sub.name;
      reposSelect.add(option);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });

 }

 // Llamar a la función para obtener los datos del API
 getAllCurrencyList2();

	</script>
';

?>

            </div>
      
      
      <div class="form-group">
        <button type="submit">Crear Moneda</button>
      </div>
    </form>
    



</body>
</html>
