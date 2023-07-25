
    <!-- Modal -->
    <div id="myModalRooms" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalRooms()"><h3>X</h3></span>
            <h2>Rooms</h2>
            <a href="#" onclick="openModalPostRooms();" class="table-button">Crear room</a>
        
      <br>
            <?php require_once 'layout/tableRooms.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalRooms() {
            document.getElementById("myModalRooms").style.display = "block";
        }

        function closeModalRooms() {
            document.getElementById("myModalRooms").style.display = "none";
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
