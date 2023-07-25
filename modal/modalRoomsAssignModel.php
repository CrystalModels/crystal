
    <!-- Modal -->
    <div id="myModalRoomsam" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalRoomsam()"><h3>X</h3></span>

            <h2>Rooms ocupados</h2>
            <a href="#" onclick="openModalRoomsamf();getRoomsamf();" class="table-button">Rooms desocupados</a>
            <a href="#" onclick="openModalRoomsLista();getRoomsLista();" class="table-button">Lista de rooms con modelos</a>
           
      <br>
            <?php require_once 'layout/tableRoomsam.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalRoomsam() {
            document.getElementById("myModalRoomsam").style.display = "block";
        }

        function closeModalRoomsam() {
            document.getElementById("myModalRoomsam").style.display = "none";
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
