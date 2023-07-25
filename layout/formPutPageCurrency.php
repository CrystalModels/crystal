




<!DOCTYPE html>
<html lang="en">

<body>
    

 
   
      
<?php
echo '<form method="post" action="controller/controllerPutPageCurrencyBySuperAdmin.php?pageId='.$_GET['pageId'].'">
';
?>


<?php
require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
echo '<script>const subdominioCurrencyList = "'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllCurrency/'.$headerslink.'";</script>';
?>
 <div class="form-group">
 <label for="currency">Moneda</label>
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
      option.text = sub.currency+" "+sub.name+" "+sub.symbol;
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
      
      <div class="form-group">
        <button type="submit">Cambiar moneda</button>
      </div>
    </form>
   


</body>
</html>
