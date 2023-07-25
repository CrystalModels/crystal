<!-- Modal -->
<div id="myModalProfile" class="modalProfile">
    <!-- Contenido del modal -->
    <div class="modal-contentProfile">
        <span class="close" onclick="closeModalmyModalProfile()"><h3>X</h3></span>
        <h2 class="modal-title">Mi perfil</h2>
        <?php
        
        require_once 'env/domain.php';
        $sub_domaincon = new model_dom();
        $sub_domain = $sub_domaincon->dom();
        //echo $_SESSION['key'];
        echo '<form method="post" action="controller/controllerPutUserBasic.php">
        <div id="myProfile-div"></div>
        <script>
        const rancode = sessionStorage.getItem("ranCode");
        const key = sessionStorage.getItem("key");
             </script>';
        echo '<script>
            // Función para obtener los datos del API
            async function getMyProfileInfo() {
                const urlMyProfile1 = "' . $sub_domain . '/crystalGateway/apiCore/v1/getProfileInfoLogJS/'.$_SESSION['ranCode'].'/'.$_SESSION['key'].'/'.$_SESSION['userName'].'/'.$_SESSION['sessionId'].'";
      
                fetch(urlMyProfile1)
                    .then(response => response.json())
                    .then(data => {
                        const userData = data.users[0];

                        // Mostrar los datos en la pantalla
                        const profileDiv = document.querySelector("#myProfile-div");
                        profileDiv.innerHTML = `
                            <h4 align="center">${userData.name} ${userData.lastName}</h4>
                            <h5 align="center">Usuario: ${userData.userName}</h5>
                            <h5 align="center">Rol: ${userData.rol}</h5>
                            <h5 align="center">Id de usuario: ${userData.userId}</h5>
                            <h5 align="center">Id de perfil: ${userData.profileId}</h5>
                            <h5 align="center">Correo empresarial: ${userData.companyMail}</h5>
                            <h5 align="center">Nombres: <input type="text" id="name" name="name" placeholder="Ingresa tus nombres" value="${userData.name}"></h5>
                            <h5 align="center">Apellidos: <input type="text" id="lname" name="lname" placeholder="Ingresa tus apellidos" value="${userData.lastName}"></h5>
                            <h5 align="center">Correo personal: <input type="email" id="pmail" name="pmail" placeholder="Ingresa tu correo personal" value="${userData.personalMail}"></h5>
                            <h5 align="center">Url de imagen: <input type="url" id="urlimage" name="urlimage" placeholder="Ingresa url de imagen/perfil" value="${userData.imageUrl}"></h5>
                           
                            <h2><img src="${userData.imageUrl}" alt="profile_image" class="img-fluid mx-auto d-block rounded" style="max-height: 200px;"></h2>
                        `;
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            }

            // Llamar a la función para obtener los datos del API
            getMyProfileInfo();
        </script>

        <button type="submit" class="table-button">Editar perfil</button>
        </form>';
        
        ?>
    </div>
</div>

<script>
    // JavaScript
    document.addEventListener("DOMContentLoaded", function() {
        closeModalmyModalProfile();
    });

    function openModalmyModalProfile1() {
        document.getElementById("myModalProfile").style.display = "block";
    }

    function closeModalmyModalProfile() {
        document.getElementById("myModalProfile").style.display = "none";
    }

    // Cambiar al modo oscuro
    function enableDarkMode() {
        document.body.classList.add("dark-mode");
    }

    // Cambiar al modo claro
    function disableDarkMode() {
        document.body.classList.remove("dark-mode");
    }
</script>
</body>
</html>
