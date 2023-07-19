
    <!-- Modal -->
    <div id="myModalPagesConnected" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPagesConnected()">X</span>
            <h2>Páginas</h2>
           
        
      <br>
            <?php require_once 'layout/tablePages.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPagesConnected() {
            document.getElementById("myModalPagesConnected").style.display = "block";
        }

        function closeModalPagesConnected() {
            document.getElementById("myModalPagesConnected").style.display = "none";
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
