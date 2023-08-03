
    <!-- Modal -->
    <div id="myModalModelsrev" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalModelsrev()"><h3>X</h3></span>
            <h2>Modelos</h2>
          
      <br>
            <?php require_once 'layout/tableModelsRev.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalModelsrev() {
            document.getElementById("myModalModelsrev").style.display = "block";
        }

        function closeModalModelsrev() {
            document.getElementById("myModalModelsrev").style.display = "none";
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
