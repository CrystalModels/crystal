
    <!-- Modal -->
    <div id="myModalModelsassignroom" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalModelsar();getRoomsamf();"><h3>X</h3></span>
            <h2>Modelos</h2>
          
      <br>
            <?php require_once 'layout/tableModelsar.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalModelsar() {
            document.getElementById("myModalModelsassignroom").style.display = "block";
        }

        function closeModalModelsar() {
            document.getElementById("myModalModelsassignroom").style.display = "none";
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
