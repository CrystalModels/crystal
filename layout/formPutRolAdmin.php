




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
echo '<script>const subdominioRolesAdmin = "'.$sub_domain.'/crystalGateway/apiCore/v1/getAllRolesAdmin";</script>';
?>
 <div class="form-group">
 <label for="rol">Rol</label>
<select id="repos-select1" class="form-group" name="rol"></select>

<?php
echo '
	<script>

 // Función para obtener los datos del API
 async function getAllRolesAdmin() {

  const reposSelect = document.getElementById("repos-select1");

	fetch(subdominioRolesAdmin,{
    headers: {
      "Content-Type": "application/json",
      "Api-Key": "'.$_SESSION['ranCode'].'",
      "x-api-Key": "'.$_SESSION['key'].'"
    }
  })
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
 getAllRolesAdmin();

	</script>
';

?>
      </div>
      
      <div class="form-group">
        <button type="submit">Cambiar Rol</button>
      </div>
    </form>
   

</body>
</html>
