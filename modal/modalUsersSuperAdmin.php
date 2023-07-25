
    <!-- Modal -->
    <div id="myModalUsersSuperAdmin" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalUsersSuperAdmin()"><h3>X</h3></span>
            <h2>Usuarios de sistema</h2>
            
            <a href="#" onclick="openModalPostUsers();" class="table-button">Crear usuario</a>
           
      <br>
            <?php require_once 'layout/tableUsersSuperAdmin.php' ?>
        </div>
        
    </div>

    <script>
        // JavaScript
        function openModalUsersSuperAdmin() {
            document.getElementById("myModalUsersSuperAdmin").style.display = "block";
        }

        function closeModalUsersSuperAdmin() {
            document.getElementById("myModalUsersSuperAdmin").style.display = "none";
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
