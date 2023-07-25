<!-- Modal -->
<div id="myModalHasCode" class="modalProfile">
    <!-- Contenido del modal -->
    <div class="modal-contentProfile">
        <span class="close" onclick="closeModalmyModalHasCode()"><h3>X</h3></span>
        <h2 class="modal-title">Cambiar contraseña</h2>
        <?php require_once 'layout/formChangePass.php' ?>
    </div>
</div>

<script>
    // JavaScript
    document.addEventListener("DOMContentLoaded", function() {
        closeModalmyModalHasCode();
    });

    function openModalmyModalHasCode() {
        document.getElementById("myModalHasCode").style.display = "block";
    }

    function closeModalmyModalHasCode() {
        document.getElementById("myModalHasCode").style.display = "none";
    }

</script>
</body>
</html>
