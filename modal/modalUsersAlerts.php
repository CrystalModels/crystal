
    <!-- Modal -->
    <div id="myModalUsersAlerts" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalUsersAlerts()"><h3>X</h3></span>
            <h2>Alertas</h2>
               
      <br>
            <?php require_once 'layout/tableUsersAlerts.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalUsersAlerts() {
            document.getElementById("myModalUsersAlerts").style.display = "block";
        
        }

        function closeModalUsersAlerts() {
            document.getElementById("myModalUsersAlerts").style.display = "none";
       
        
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
