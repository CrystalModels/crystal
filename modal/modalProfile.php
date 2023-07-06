<!-- Modal -->
<div id="myModalProfile" class="modalProfile">
    <!-- Contenido del modal -->
    <div class="modal-contentProfile">
        <span class="close" onclick="closeModalmyModalProfile()">X</span>
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
            const urlMyProfile = "' . $sub_domain . '/crystalGateway/apiCore/v1/getProfileInfoLog/'.$_SESSION['userName'].'";
        </script>';
        echo '<script>
            // Función para obtener los datos del API
            async function getMyProfileInfo() {
                fetch(urlMyProfile, {
                        headers: {
                            "Content-Type": "application/json",
                            "Api-Key": "'.$_SESSION['ranCode'].'",
                            "x-api-Key": "'.$_SESSION['key'].'"
                        }
                    })
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
                            <h5 align="center">Id de Perfil: ${userData.profileId}</h5>
                            <h5 align="center">Correo: ${userData.companyMail}</h5>
                            <h5 align="center">Nombre: <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" value="${userData.name}"></h5>
                            <h5 align="center">Apellido: <input type="text" id="lname" name="lname" placeholder="Ingresa tu apellido" value="${userData.lastName}"></h5>
                            <h5 align="center">Correo Personal: <input type="text" id="pmail" name="pmail" placeholder="Ingresa tu correo personal" value="${userData.personalMail}"></h5>
                            <h5 align="center">Url de imagen: <input type="text" id="urlimage" name="urlimage" placeholder="Ingresa tu correo personal" value="${userData.imageUrl}"></h5>
                           
                            <img src="${userData.imageUrl}" alt="profile_image" class="img-fluid mx-auto d-block rounded" style="max-height: 200px;">
                        `;
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            }

            // Llamar a la función para obtener los datos del API
            getMyProfileInfo();
        </script>

        <button type="submit" class="table-button">Editar</button>
        </form>';
        ?>
    </div>
</div>

<script>
    // JavaScript
    document.addEventListener("DOMContentLoaded", function() {
        closeModalmyModalProfile();
    });

    function openModalmyModalProfile() {
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