
    <!-- Modal -->
    <div id="myModalPutModelVer" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutModelVer()"><h3>X</h3></span>
            <h2>Cortes por confirmar</h2>
            
      <br>
            <?php require_once 'layout/tablePutsModelVer.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutModelVer() {
            document.getElementById("myModalPutModelVer").style.display = "block";
        }

        function closeModalPutModelVer() {
            document.getElementById("myModalPutModelVer").style.display = "none";
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
