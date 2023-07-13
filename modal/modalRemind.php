
    <!-- Modal -->
    <div id="myModalReminds" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalReminds()">X</span>
            <h2>Mis Recordatorios</h2>
            <a href="#" onclick="openModalRemindsPost();" class="table-button">Crear Recordatorio</a>
      <br>
            <?php require_once 'layout/tableReminds.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalReminds() {
            document.getElementById("myModalReminds").style.display = "block";
        }

        function closeModalReminds() {
            document.getElementById("myModalReminds").style.display = "none";
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
