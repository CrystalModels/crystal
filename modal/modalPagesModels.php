
    <!-- Modal -->
    <div id="myModalPagesModels" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPagesModel()">X</span>
            <h2>En transmisión</h2>
           
        
      <br>
            <?php require_once 'layout/tablePagesListModels.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPagesModel() {
            document.getElementById("myModalPagesModels").style.display = "block";
        }

        function closeModalPagesModel() {
            document.getElementById("myModalPagesModels").style.display = "none";
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
