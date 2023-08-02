
    <!-- Modal -->
    <div id="myModalPutClose" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutClose()"><h3>X</h3></span>
            <h2>Cortes cerrados</h2>
           
      <br>
            <?php require_once 'layout/tablePutsClose.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutClose() {
            document.getElementById("myModalPutClose").style.display = "block";
        }

        function closeModalPutClose() {
            document.getElementById("myModalPutClose").style.display = "none";
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
