<!-- Modal -->
<div id="myModalForgotPass" class="modalProfile">
    <!-- Contenido del modal -->
    <div class="modal-contentProfile">
        <span class="close" onclick="closeModalmyModalForgotPass()">X</span>
        <h2 class="modal-title">Mi perfil</h2>
        <?php require_once 'layout/formForgotPass.php' ?>
    </div>
</div>

<script>
    // JavaScript
    document.addEventListener("DOMContentLoaded", function() {
        closeModalmyModalProfile();
    });

    function openModalmyModalForgotPass() {
        document.getElementById("myModalForgotPass").style.display = "block";
    }

    function closeModalmyModalForgotPass() {
        document.getElementById("myModalForgotPass").style.display = "none";
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
