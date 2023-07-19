
    <!-- Modal -->
    <div id="myModalPagesConnectedList" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPagesConnectedList()">X</span>
            <h2>En transmisión</h2>
           
        
      <br>
            <?php require_once 'layout/tablePagesList.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPagesConnectedList() {
            document.getElementById("myModalPagesConnectedList").style.display = "block";
        }

        function closeModalPagesConnectedList() {
            document.getElementById("myModalPagesConnectedList").style.display = "none";
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
