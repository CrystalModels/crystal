
    <!-- Modal -->
    <div id="myModalMultimedia" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalMultimedia()"><h3>X</h3></span>
            <h2>Multimedia</h2>
            
      <br>
            <?php require_once '../multimediaForm.php?'?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalMultimedia() {
            document.getElementById("myModalMultimedia").style.display = "block";
        }

        function closeModalMultimedia() {
            document.getElementById("myModalMultimedia").style.display = "none";
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
