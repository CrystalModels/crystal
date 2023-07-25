
    <!-- Modal -->
    <div id="myModalPortafolio" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalPortafolio()"><h3>X</h3></span>
            <h2>Agregar imágen al portafólio</h2>
            
      <br>
            <?php require_once 'layout/tableModelsPhoto.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalPortafolio() {
            document.getElementById("myModalPortafolio").style.display = "block";
        }

        function closeModalPortafolio() {
            document.getElementById("myModalPortafolio").style.display = "none";
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
