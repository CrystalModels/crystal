
    <!-- Modal -->
    <div id="myModalRoomsLista" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalRoomsLista()"><h3>X</h3></span>

            <h2>Rooms ocupados</h2>
           
      <br>
            <?php require_once 'layout/tableRoomsLista.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalRoomsLista() {
            document.getElementById("myModalRoomsLista").style.display = "block";
        }

        function closeModalRoomsLista() {
            document.getElementById("myModalRoomsLista").style.display = "none";
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
