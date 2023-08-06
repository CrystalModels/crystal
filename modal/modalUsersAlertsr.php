
    <!-- Modal -->
    <div id="myModalUsersAlertsr" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalUsersAlertsr()"><h3>X</h3></span>
            <h2>Alertas</h2>
               
      <br>
            <?php require_once 'layout/tableUsersAlertsr.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalUsersAlertsr() {
            document.getElementById("myModalUsersAlertsr").style.display = "block";
        
        }

        function closeModalUsersAlertsr() {
            document.getElementById("myModalUsersAlertsr").style.display = "none";
       
        
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
