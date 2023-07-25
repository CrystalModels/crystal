
    <!-- Modal -->
    <div id="myModalRoomsModels" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalRoomsModelassign()"><h3>X</h3></span>
            <h2>Asignar room</h2>
           
        
      <br>
            <?php require_once 'layout/tableRoomsAssign.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalRoomsModelassign() {
            document.getElementById("myModalRoomsModels").style.display = "block";
        }

        function closeModalRoomsModelassign() {
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
