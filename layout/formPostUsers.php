



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style/styleSession.css">


</head>
<body>

    
    <form method="post" action="controller/controllerPostUsersBySuperAdmin.php">
      <div class="form-group">
        <label for="name">Nombres</label>
        <input type="text" id="name" name="name" placeholder="Ingresa nombres de usuario" required>
      </div>
      <div class="form-group">
        <label for="lastname">Apellidos</label>
        <input type="text" id="lastname" name="lastname" placeholder="Ingresa apellidos de usuario" required>
      </div>
      <div class="form-group">
        <label for="pmail">Correo personal</label>
        <input type="text" id="pmail" name="pmail" placeholder="Ingresa correo personal de usuario" required>
      </div>
      <div class="form-group">
        <label for="cmail">Correo empresarial</label>
        <input type="text" id="cmail" name="cmail" placeholder="Ingresa correo empresarial de usuario" required>
      </div>
      <div class="form-group">
        <label for="imageurl">Imagen de perfil</label>
        <input type="text" id="imageurl" name="imageurl" placeholder="Ingrese URL de imagen/perfil" required>
      </div>

      
<?php
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
        <button type="submit">Crear usuario</button>
      </div>
    </form>
    

  

 
</body>
</html>
