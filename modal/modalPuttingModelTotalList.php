
    <!-- Modal -->
    <div id="myModalPutModelTotalList" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPutModelTotalList()"><h3>X</h3></span>
            <h2>Listado de corte</h2>
            
      <br>
            <?php require_once 'layout/tablePutsModelTotalList.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPutModelTotalList() {
            document.getElementById("myModalPutModelTotalList").style.display = "block";
        }

        function closeModalPutModelTotalList() {
            document.getElementById("myModalPutModelTotalList").style.display = "none";
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
