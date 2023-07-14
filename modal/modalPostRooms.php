
    <!-- Modal -->
    <div id="myModalPostRooms" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPostRooms()">X</span>
            <h2>Crear Room</h2>
            <?php require_once 'layout/formPostRooms.php' ?>
            
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPostRooms() {
            document.getElementById("myModalPostRooms").style.display = "block";
        }

        function closeModalPostRooms() {
            document.getElementById("myModalPostRooms").style.display = "none";
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
