
    <!-- Modal -->
    <div id="myModalModelslog" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalModelslog()"><h3>X</h3></span>
            <h2>Logs</h2>
          
      <br>
            <?php require_once 'layout/tableModelsLogs.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalModelslog() {
            document.getElementById("myModalModelslog").style.display = "block";
        }

        function closeModalModelslog() {
            document.getElementById("myModalModelslog").style.display = "none";
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
