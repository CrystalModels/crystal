<!-- Modal -->
<div id="myModalCloseSession" class="modalProfile">
    <!-- Contenido del modal -->
    <div class="modal-contentProfile">
        <span class="close" onclick="closeModalmyModalCloseSession()"><h3>X</h3></span>
        <h2 class="modal-title">Cerrar sesión</h2>
        <?php require_once 'layout/formLoginClose.php' ?>
    </div>
</div>

<script>
    // JavaScript
    document.addEventListener("DOMContentLoaded", function() {
        closeModalmyModalCloseSession();
    });

    function openModalmyModalCloseSession() {
        document.getElementById("myModalCloseSession").style.display = "block";
    }

    function closeModalmyModalCloseSession() {
        document.getElementById("myModalCloseSession").style.display = "none";
    }

</script>
</body>
</html>
