
    <!-- Modal -->
    <div id="myModalPutActive" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutActive();getPuts();"><h3>X</h3></span>
            <h2>Cortes activos</h2>
           
      <br>
            <?php require_once 'layout/tablePutsActive.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutActive() {
            document.getElementById("myModalPutActive").style.display = "block";
        }

        function closeModalPutActive() {
            document.getElementById("myModalPutActive").style.display = "none";
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
