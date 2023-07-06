
    <!-- Modal -->
    <div id="myModalPutUserStatus" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutUserStatus()">X</span>
            <h2>Cambiar Estado</h2>
               
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
