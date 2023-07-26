<!-- Modal -->
<div id="myModalChangePassSession" class="modalProfile">
    <!-- Contenido del modal -->
    <div class="modal-contentProfile">
        <span class="close" onclick="closeModalmyModalChangePassSession()"><h3>X</h3></span>

        <?php require_once 'layout/formChangePassSession.php' ?>
    </div>
</div>

<script>
    // JavaScript
    document.addEventListener("DOMContentLoaded", function() {
        closeModalmyModalChangePassSession();
    });

    function openModalmyModalChangePassSession() {
        document.getElementById("myModalChangePassSession").style.display = "block";
    }

    function closeModalmyModalChangePassSession() {
        document.getElementById("myModalChangePassSession").style.display = "none";
    }

</script>
</body>
</html>
