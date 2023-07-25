
    <!-- Modal -->
    <div id="myModalPagesModelsNot" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPagesModelNot()"><h3>X</h3></span>
            <h2>Sin transmisión</h2>
           
        
      <br>
            <?php require_once 'layout/tablePagesListModelsNot.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPagesModelNot() {
            document.getElementById("myModalPagesModelsNot").style.display = "block";
        }

        function closeModalPagesModelNot() {
            document.getElementById("myModalPagesModelsNot").style.display = "none";
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
