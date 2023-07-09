
    <!-- Modal -->
    <div id="myModalMonitors" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalMonitors()">X</span>
            <h2>Monitores</h2>
                       <?php require_once 'layout/tableMonitors.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalMonitors() {
            document.getElementById("myModalMonitors").style.display = "block";
        }

        function closeModalMonitors() {
            document.getElementById("myModalMonitors").style.display = "none";
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
