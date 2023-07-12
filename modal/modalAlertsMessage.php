
    <!-- Modal -->
    <div id="myModalAlertsMessage" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalAlertsMessage()">X</span>
            <h1>¡Alerta!</h1>
            
      <br>
            <?php require_once 'layout/tableAlertsMessage.php' ?>
            <button onclick="closeModalAlertsMessage();">Cerrar</button>
        </div>
        
    </div>

    <script>
        // JavaScript
        function openModalAlertsMessage() {
            document.getElementById("myModalAlertsMessage").style.display = "block";
        }

        function closeModalAlertsMessage() {
            document.getElementById("myModalAlertsMessage").style.display = "none";
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
