
    <!-- Modal -->
    <div id="myModalSchedule" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalSchedule()"><h3>X</h3></span>
            <h2>Mi horario</h2>
               
      <br>
            <?php require_once 'layout/tableSchedule.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalSchedule() {
            document.getElementById("myModalSchedule").style.display = "block";
        
        }

        function closeModalSchedule() {
            document.getElementById("myModalSchedule").style.display = "none";
       
        
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
