
    <!-- Modal -->
    <div id="myModalPagesModelsHis" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPagesModelHis()"><h3>X</h3></span>
            <h2>Historial de transmisión</h2>
           
        
      <br>
            <?php require_once 'layout/tablePagesListModelsHis.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPagesModelHis() {
            document.getElementById("myModalPagesModelsHis").style.display = "block";
        }

        function closeModalPagesModelHis() {
            document.getElementById("myModalPagesModelsHis").style.display = "none";
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
