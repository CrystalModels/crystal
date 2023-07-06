
    <!-- Modal -->
    <div id="myModalPutPageStatus" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutPageStatus()">X</span>
            <h2>Cambiar Estado</h2>
               
            <?php require_once 'layout/formPutPageStatus.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutPageStatus() {
            document.getElementById("myModalPutPageStatus").style.display = "block";
        }

        function closeModalPutPageStatus() {
            document.getElementById("myModalPutPageStatus").style.display = "none";
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
