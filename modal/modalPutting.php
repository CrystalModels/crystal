
    <!-- Modal -->
    <div id="myModalPut" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPut()"><h3>X</h3></span>
            <h2>Cortes</h2>
            <a href="#" onclick="openModalPutActive();getPutsactive();" class="table-button">Cortes activos</a>
            <a href="#" onclick="openModalPutClose();getPutsclose();" class="table-button">Cortes cerrados</a>
      <br>
            <?php require_once 'layout/tablePuts.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPut() {
            document.getElementById("myModalPut").style.display = "block";
        }

        function closeModalPut() {
            document.getElementById("myModalPut").style.display = "none";
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
