



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style/styleSession.css">


</head>
<body>
    
 
    
    <form method="post" action="controller/controllerPostPages.php">
      <div class="form-group">
        <label for="name">Nombre de página</label>
        <input type="text" id="name" name="name" placeholder="Ingresa nombre de la pagina" required>
      </div>
      <div class="form-group">
        <label for="urlpage">Url de página</label>
        <input type="text" id="urlpage" name="urlpage" placeholder="Ingresa url de la pagina" required>
      </div>
      <div class="form-group">
        <label for="percent">% de cobro</label>
        <input type="text" id="percent" name="percent" placeholder="Ingresa porcentaje de cobro" >
      </div>
      
      

      
<?php
require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
echo '<script>const subdominioCurrency = "'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllCurrency/'.$headerslink.'";</script>';
?>
 <div class="form-group">
 <label for="currency">Moneda de cobro</label>
<select id="repos-select1" class="form-group table-button" name="currency"></select>

<?php
echo '
	<script>

 // Función para obtener los datos del API
 async function getAllCurrency() {

  const reposSelect = document.getElementById("repos-select1");

	fetch(subdominioCurrency)
  .then(response => response.json())
  .then(data => {
    data.currency.forEach(sub => {
      const option = document.createElement("option");
      option.value = sub.currency;
      option.text = sub.symbol+" "+sub.name;
      reposSelect.add(option);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });

 }

 // Llamar a la función para obtener los datos del API
 getAllCurrency();

	</script>
';

?>
      </div>
      
      
      <div class="form-group">
        <button type="submit">Crear página</button>
      </div>
    </form>
    




 
</body>
</html>
