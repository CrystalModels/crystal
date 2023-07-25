
    <!-- Modal -->
    <div id="myModalAlerts" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalAlerts()"><h1>X</h1></span>
            <h2>Mis alertas</h2>
            
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
