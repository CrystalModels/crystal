
    <!-- Modal -->
    <div id="myModalRoomsModels" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalRoomsModel()">X</span>
            <h2>En transmisión</h2>
           
        
      <br>
            <?php require_once 'layout/tableRoomsAssign.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalRoomsModel() {
            document.getElementById("myModalRoomsModels").style.display = "block";
        }

        function closeModalRoomsModel() {
            document.getElementById("myModalRoomsModels").style.display = "none";
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
