




<!DOCTYPE html>
<html lang="en">

<body>
    

 
   
      
<?php
echo '<form method="post" action="controller/controllerPutPageStatusBySuperAdmin.php?pageId='.$_GET['pageId'].'">
';
?>
 <div class="form-group">
 <label for="status">Estado</label>
<select id="repos-select" class="form-group" name="status">

<option value="act">Activar</option>
  <option value="dec">Desactivar</option>
  <option value="sho">Mostrar</option>
  <option value="hid">Ocultar</option>


</select>

      </div>
      
      <div class="form-group">
        <button type="submit">Cambiar Estado</button>
      </div>
    </form>
   


</body>
</html>
