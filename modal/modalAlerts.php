
    <!-- Modal -->
    <div id="myModalAlerts" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalAlerts()">X</span>
            <h2>Alertas</h2>
            <a href="#" onclick="openModalPostRooms();" class="table-button">Crear Room</a>
        
      <br>
            <?php require_once 'layout/tableAlerts.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalAlerts() {
            document.getElementById("myModalAlerts").style.display = "block";
        }

        function closeModalAlerts() {
            document.getElementById("myModalAlerts").style.display = "none";
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
