
    <!-- Modal -->
    <div id="myModalPhotograph" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPhotograph()">X</span>
            <h2>Fotografos</h2>
            <button type="submit" class="table-button">Crear Monitor</button>
      <br>
            <?php require_once 'layout/tablePhotographs.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPhotograph() {
            document.getElementById("myModalPhotograph").style.display = "block";
        }

        function closeModalPhotograph() {
            document.getElementById("myModalPhotograph").style.display = "none";
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
