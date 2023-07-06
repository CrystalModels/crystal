
    <!-- Modal -->
    <div id="myModalPostUsers" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPostUsers()">X</span>
        
            <?php require_once 'layout/formPostUsers.php' ?>
            
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPostUsers() {
            document.getElementById("myModalPostUsers").style.display = "block";
        }

        function closeModalPostUsers() {
            document.getElementById("myModalPostUsers").style.display = "none";
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
