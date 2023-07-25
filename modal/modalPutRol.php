
    <!-- Modal -->
    <div id="myModalPutRol" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutRol()"><h3>X</h3></span>
            <h2>Cambiar rol</h2>
               
            <?php require_once 'layout/formPutRol.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutRol() {
            document.getElementById("myModalPutRol").style.display = "block";
        }

        function closeModalPutRol() {
            document.getElementById("myModalPutRol").style.display = "none";
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
