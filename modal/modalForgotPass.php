<!-- Modal -->
<div id="myModalForgotPass" class="modalProfile">
    <!-- Contenido del modal -->
    <div class="modal-contentProfile">
        <span class="close" onclick="closeModalmyModalForgotPass()">X</span>
        <h2 class="modal-title">Recuperar Contraseña</h2>
        <?php require_once 'layout/formForgotPass.php' ?>
    </div>
</div>

<script>
    // JavaScript
    document.addEventListener("DOMContentLoaded", function() {
        closeModalmyModalForgotPass();
    });

    function openModalmyModalForgotPass() {
        document.getElementById("myModalForgotPass").style.display = "block";
    }

    function closeModalmyModalForgotPass() {
        document.getElementById("myModalForgotPass").style.display = "none";
    }

</script>
</body>
</html>
