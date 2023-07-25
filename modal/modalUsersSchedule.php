
    <!-- Modal -->
    <div id="myModalUsersSchedule" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalUsersSchedule()"><h3>X</h3></span>
            <h2>Horarios generales</h2>
               
      <br>
            <?php require_once 'layout/tableUsersSchedule.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalUsersSchedule() {
            document.getElementById("myModalUsersSchedule").style.display = "block";
        
        }

        function closeModalUsersSchedule() {
            document.getElementById("myModalUsersSchedule").style.display = "none";
       
        
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
