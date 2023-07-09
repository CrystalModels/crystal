<!-- Modal -->
<div id="myModalHasCode" class="modalProfile">
    <!-- Contenido del modal -->
    <div class="modal-contentProfile">
        <span class="close" onclick="openModalmyModalHasCode()">X</span>
        <h2 class="modal-title">Mi perfil</h2>
        <?php require_once 'layout/formHasCode.php' ?>
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

    function openModalmyModalHasCode() {
        document.getElementById("myModalHasCode").style.display = "none";
    }

</script>
</body>
</html>
