




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar - Crystal Models</title>
  <link rel="stylesheet" href="style/styleLogIn.css">


</head>
<body>
    

 
   
      
<?php
echo '<form method="post" action="controller/controllerPutRolBySuperAdmin.php?profileId='.$_GET['profileId'].'&userName='.$_GET['userName'].'">
';
require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
echo '<script>const subdominioRoles = "'.$sub_domain.'/crystalGateway/apiCore/v1/getAllRoles/'.$headerslink.'";</script>';
?>
 <div class="form-group">
 <label for="rol">Rol</label>
<select id="repos-select" class="form-group table-button" name="rol"></select>

<?php
echo '
	<script>

 // Función para obtener los datos del API
 async function getAllRoles() {

  const reposSelect = document.getElementById("repos-select");

	fetch(subdominioRoles)
  .then(response => response.json())
  .then(data => {
    data.roles.forEach(sub => {
      const option = document.createElement("option");
      option.value = sub.rolId;
      option.text = sub.name;
      reposSelect.add(option);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });

 }

 // Llamar a la función para obtener los datos del API
 getAllRoles();

	</script>
';

?>
      </div>
      
      <div class="form-group">
        <button type="submit">Cambiar rol</button>
      </div>
    </form>
   

  
</body>
</html>
