
    <!-- Modal -->
    <div id="myModalAlertsr" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalAlertsr()"><h3>X</h3></span>
            <h2>Respuestas de alertas</h2>
            
      <br>
            <?php require_once 'layout/tableAlertsr.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalAlertsr() {
            document.getElementById("myModalAlertsr").style.display = "block";
        }

        function closeModalAlertsr() {
            document.getElementById("myModalAlertsr").style.display = "none";
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
