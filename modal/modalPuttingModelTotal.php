
    <!-- Modal -->
    <div id="myModalPutModelTotal" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutModelTotal()"><h3>X</h3></span>
            <h2>Total por Corte</h2>
            
      <br>
            <?php require_once 'layout/tablePutsModelTotal.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutModelTotal() {
            document.getElementById("myModalPutModelTotal").style.display = "block";
        }

        function closeModalPutModelTotal() {
            document.getElementById("myModalPutModelTotal").style.display = "none";
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
