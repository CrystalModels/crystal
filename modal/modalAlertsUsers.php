
    <!-- Modal -->
    <div id="myModalAlertsUsers" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalAlertsUsers()"><h3>X</h3></span>
            <h2>Mis alertas</h2>
            
      <br>
            <?php require_once 'layout/tableAlertsUsers.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalAlertsUsers() {
            document.getElementById("myModalAlertsUsers").style.display = "block";
        }

        function closeModalAlertsUsers() {
            document.getElementById("myModalAlertsUsers").style.display = "none";
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
