<!-- Modal -->
<div id="myModalPrevVer" class="modalProfile">
    <!-- Contenido del modal -->
    <div class="modal-contentProfile">
        <span class="close" onclick="closeModalPrevVer()"><h3>X</h3></span>

        <?php require_once 'layout/formPrevVer.php' ?>
    </div>
</div>

<script>
    // JavaScript
    document.addEventListener("DOMContentLoaded", function() {
        closeModalPrevVer();
    });

    function openModalPrevVer() {
        document.getElementById("myModalPrevVer").style.display = "block";
    }

    function closeModalPrevVer() {
        document.getElementById("myModalPrevVer").style.display = "none";
    }

</script>
</body>
</html>
