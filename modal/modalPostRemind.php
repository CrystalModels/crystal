
    <!-- Modal -->
    <div id="myModalRemindsPost" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <span class="close" onclick="closeModalRemindsPost()">X</span>
            <h2>Crear Recordatorio</h2>
            <br>
           <?php  require_once 'layout/formPostReminds.php' ?>
        </div>
    </div>

    <script>
        // JavaScript
        function openModalRemindsPost() {
            document.getElementById("myModalRemindsPost").style.display = "block";
        }

        function closeModalRemindsPost() {
            document.getElementById("myModalRemindsPost").style.display = "none";
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
