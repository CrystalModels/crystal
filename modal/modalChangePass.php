<!-- Modal -->
<div id="myModalHasCode" class="modalProfile">
    <!-- Contenido del modal -->
    <div class="modal-contentProfile">
        <span class="close" onclick="closeModalmyModalHasCode()">X</span>
        <h2 class="modal-title">Código de Confirmación</h2>
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
