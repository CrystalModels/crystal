
    <!-- Modal -->
    <div id="myModalRoomsamf" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalRoomsamf();getRoomsam();">X</span>
          
            <h2>Rooms Desocupados</h2>
           
      <br>
            <?php require_once 'layout/tableRoomsamf.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalRoomsamf() {
            document.getElementById("myModalRoomsamf").style.display = "block";
        }

        function closeModalRoomsamf() {
            document.getElementById("myModalRoomsamf").style.display = "none";
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
