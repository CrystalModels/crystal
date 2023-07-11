
    <!-- Modal -->
    <div id="myModalScheduleUsers" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalScheduleUsers()">X</span>
            <h2>Horario de usuario</h2>
               
      <br>
            <?php require_once 'layout/tableScheduleUsers.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalScheduleUsers() {
            document.getElementById("myModalScheduleUsers").style.display = "block";
          

        }

        function closeModalScheduleUsers() {
            document.getElementById("myModalScheduleUsers").style.display = "none";
       
        
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
