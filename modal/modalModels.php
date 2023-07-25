
    <!-- Modal -->
    <div id="myModalModels" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalModels()"><h3>X</h3></span>
            <h2>Modelos</h2>
          
      <br>
            <?php require_once 'layout/tableModels.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalModels() {
            document.getElementById("myModalModels").style.display = "block";
        }

        function closeModalModels() {
            document.getElementById("myModalModels").style.display = "none";
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
