
    <!-- Modal -->
    <div id="myModalPagesassign" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPagesAssign()">X</span>
            <h2>Páginas</h2>
           
      <br>
            <?php require_once 'layout/tablePagesAssign.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPagesAssign() {
            document.getElementById("myModalPagesassign").style.display = "block";
        }

        function closeModalPagesAssign() {
            document.getElementById("myModalPagesassign").style.display = "none";
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
