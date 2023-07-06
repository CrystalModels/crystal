
    <!-- Modal -->
    <div id="myModalPages" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPages()">X</span>
            <h2>Páginas</h2>
            <a href="#" onclick="openModalPostPages();" class="table-button">Crear Página</a>
        
      <br>
            <?php require_once 'layout/tablePages.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPages() {
            document.getElementById("myModalPages").style.display = "block";
        }

        function closeModalPages() {
            document.getElementById("myModalPages").style.display = "none";
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
