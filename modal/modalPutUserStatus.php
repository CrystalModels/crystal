
    <!-- Modal -->
    <div id="myModalPutUserStatus" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutUserStatus()"><h3>X</h3></span>
            <h2>Cambiar estado</h2>
               
            <?php require_once 'layout/formPutUserStatus.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutUserStatus() {
            document.getElementById("myModalPutUserStatus").style.display = "block";
        }

        function closeModalPutUserStatus() {
            document.getElementById("myModalPutUserStatus").style.display = "none";
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
