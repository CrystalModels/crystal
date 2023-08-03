
    <!-- Modal -->
    <div id="myModalPutModel" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutModel()"><h3>X</h3></span>
            <h2>Cortes sin datos</h2>
            
      <br>
            <?php require_once 'layout/tablePutsModel.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutModel() {
            document.getElementById("myModalPutModel").style.display = "block";
        }

        function closeModalPutModel() {
            document.getElementById("myModalPutModel").style.display = "none";
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
