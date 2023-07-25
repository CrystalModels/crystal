
    <!-- Modal -->
    <div id="myModalPutRolAdmin" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutRolAdmin()"><h3>X</h3></span>
            <h2>Cambiar rol</h2>
               
            <?php require_once 'layout/formPutRolAdmin.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutRolAdmin() {
            document.getElementById("myModalPutRolAdmin").style.display = "block";
        }

        function closeModalPutRolAdmin() {
            document.getElementById("myModalPutRolAdmin").style.display = "none";
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
